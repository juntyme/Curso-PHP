<?php

function novaConexao($banco = 'curso_php')
{
    $servidor = '127.0.0.1:3306'; /// localhost
    $usuario = 'root';
    $senha = 'root';

    /// Nova instancia do mysqli
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
        // exit();
    }

    return $conexao;
}