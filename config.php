<?php

    require_once "Database.class.php";

    $conexao = new Conexao('localhost', 'cp_receitas', 'root', '');

    //Adicionar receitas
    if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['adicionar'])){
        $titulo = $_POST['titulo'];
        $ingredientes = $_POST['ingredientes'];
        $modo_de_preparo = $_POST['modo_de_preparo'];

        $sql = "INSERT INTO cp_receitas_oo (titulo, ingredientes, modo_de_preparo) VALUES (:titulo, :ingredientes, :modo_de_preparo)";
        $params = array(':titulo'=>$titulo, ':ingredientes'=>$ingredientes, ':modo_de_preparo'=>$modo_de_preparo);

        $stmt = $conexao->executarQuery($sql, $params);

        header('Location: registre.php');
        exit();
    }