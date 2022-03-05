<div class='titulo'>Metodos Mágicos PHP</div>
<?php
// __construct(), Construtores pais não são chamados implicitamente se a classe filha define um construtor. Para executar o construtor da classe pai, uma chamada a parent::__construct() dentro do construtor da classe filha é necessária. Se a classe filha não definir um construtor, será herdado da classe pai como um método normal (se não foi declarado como privado).
// __destruct(),  O método destrutor será chamado assim que todas as referências a um objeto particular forem removidas ou quando o objeto for explicitamente destruído ou qualquer ordem na sequência de encerramento.
// __call(), é disparado ao invocar métodos inacessíveis em um contexto de objeto.
// __callStatic(), é disparado quando invocando métodos inacessíveis em um contexto estático.
// __get(), é utilizado para ler dados de propriedades inacessíveis.
// __set(), é executado ao escrever dados em propriedades inacessíveis.
// __isset(), é disparado ao chamar a função isset() ou empty() em propriedades inacessíveis.
// __unset(), é invocado ao usar o construtor unset() em propriedades inacessíveis.
// __sleep(), é enviar dados pendentes ou realizar tarefas de limpeza. Além disso, a função é útil se tiver objetos muito grandes que não precisem ser completamente salvos.
// __wakeup(), é reestabelecer qualquer conexão com banco de dados que podem ter sido perdidas durante a serialização, e realizar outras tarefas de reinicialização.
// __serialize(),
// __unserialize(), checa pela presença da função com o nome mágico __wakeup(). Se presente, essa função pode reconstruir qualquer recurso que o objeto possa ter.
// __toString(),   converter objeto em uma string
// __invoke(), O método __invoke() é chamado quando um script tenta chamar um objeto como uma função.
// __set_state(), Esse método estático é chamado em classes exportadas por var_export() desde
// __clone()  o objeto recém criado terá seu método __clone() chamado, permitindo que qualquer propriedade seja alterada.
// __debugInfo() ao despejar um objeto para obter as propriedades que devem ser exibidas. Se este método não for definido em um objeto, todos as propriedades públicas, protegidas e provadas serão exibidas.

// Começa com dois __

class Pessoa {
    public $nome;
    public $idade;

    // Metodo especial chamado quando é iniciado
    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }


    function __destruct(){
        echo '<br>E morreu!';
    }

    /// Converter Objetos para String
    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this."<br>";
    }

    /// Acessa atributos que não foram declarados no objeto
    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";
    }

    // sempre que chama o metodo que não existe
    public function __call($metodo, $params) {
        echo "Tentando executar o método {$metodo}.";
        echo "<br>, com os parametros:";
        print_r($params); // O que é passado é um array
    }

}

$pessoa = new Pessoa('Jonas', 40); // Chamando o __contruct
/// chamando o  __toString()
$pessoa->apresentar();
// chamando o __toString()
echo $pessoa, '<br>';

/// Acessa o atribuito diretamente
$pessoa->nome = 'Sandra';
// chamando o __toString()
$pessoa->apresentar();

// Chamando o metodo __set()
$pessoa->nomeCompleto = 'Muito Legal!!';
/// Chamando o __get
$pessoa->nomeCompleto;
echo '<br>';

 /// Chamando o __call
$pessoa->exec(['Teste' => 22], 'teste', true);

$pessoa =null;