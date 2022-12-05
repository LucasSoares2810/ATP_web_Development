<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Lucas138!';
    $dbName = 'empresta_atp';


    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    $GLOBALS['conexao'] = $conexao;

    // Inicia a sessao
    session_start();

    function executarSql($query) {
        $conexao = $GLOBALS['conexao'];
        $resultado = mysqli_query($conexao, $query);
        return $resultado;
    }
?>