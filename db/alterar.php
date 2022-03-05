<div class="titulo">Alterar Registro</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php

require_once("conexao.php");
$conexao = novaConexao();

if ($_GET['codigo']) {

    $sql = "SELECT * FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $_GET['codigo']);

    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        // var_dump($resultado->num_rows);
        // exit;
        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();

            if ($dados['nascimento']) {
                $dt = new DateTime($dados['nascimento']);
                $dados['nascimento'] = $dt->format('d/m/Y');
            }

            if ($dados['salario']) {
                $dados['salario'] = str_replace(".", ",", $dados['salario']);
            }
        }
    }
}


if (count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];

    /// isset($_POST['nome'])
    /// Validar email
    if (trim($dados['nome']) === "") {
        $erros['nome'] = "Nome é obrigatório";
    }

    /// Validar Data
    if (trim($dados['nascimento']) === "") {
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if (!$data) {
            $erros['nascimento'] =  'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    // Validar email
    if (!filter_var($dados["email"], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] =  'Email inválido';
    }


    // Validar url
    if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'Site inválido';
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];

    /// Validação em valores inteiros
    if (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig && $dados['filhos'] != 0)) {

        $erros['filhos'] =  'Qunatidade de filhos inválida';
    }

    /// validação de salario
    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido';
    }

    /// Contagem do erro tem que ser zero
    if (!count($erros)) {

        $sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'] ? str_replace(",", ".", $dados['salario']) : null,
            $dados['id']
        ];

        // Passa os parametros com array
        $stmt->bind_param("ssssidi", ...$params);

        if ($stmt->execute()) {
            unset($dados);
        }
    }
}

?>
<?php foreach ($erros as $erro) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $erro ?>
    </div>
<?php endforeach ?>
<form action="/curso_php/exercicio.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="number" name="codigo" class="form-control" value="<?= $_GET['codigo'] ?>" placeholder="Informe o Código para consultar">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">Consultar</button>
        </div>
    </div>
</form>

<form action="" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?> " placeholder="Nome" value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" name="nascimento" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" placeholder="E-mail" value="<?= $dados['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" name="site" class="form-control  <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" placeholder="Site" value="<?= $dados['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtda de Filhos</label>
            <input type="number" name="filhos" class="form-control  <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" placeholder="Qtda de Filhos" value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" name="salario" class="form-control  <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" placeholder="Salário" value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>