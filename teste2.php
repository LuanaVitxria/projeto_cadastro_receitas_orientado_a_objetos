<?php

require_once "conexão.php";
$conexao = new Conexao();

//listar registros
$registros = $conexao->listarRegistros();
foreach($registros as $row)
    {
        echo $row['marca'] . ' - ' . $row['modelo'] . ' - ' . $row['ano'] . '<br>';
    }

//cadastrar registro
//teste do insert - create
$titulo = 'teste';
$ingredientes = 'teste2';
$modo_de_preparo = 'teste3';
$novoRegistro = array (':titulo'=>$titulo, ':ingredientes'=>$ingredientes, ':modo_de_preparo'=>$modo_de_preparo);
$idNovoRegistro = $conexao->cadastrarRegistro($novoRegistro);
echo "Novo registro cadastrado com ID: $idNovoRegistro<br>";

//editar registro
$idRegistroEditar = 1;
$titulo = "queijo queijudo";
$ingredientes = "queijo branco, queijo mussarela, queijo prato";
$modo_de_preparo = "queijo no queijo em cima do queijo com mais queijo";
$dadosEditar = array (':titulo'=>$titulo, ':ingredientes'=>$ingredientes, ':modo_de_preparo'=>$modo_de_preparo);
$conexao->editarRegistros($idRegistroEditar, $dadosEditar);
echo "<br>Registro $idRegistroEditar editado com sucesso.<br> ";

//excluir registro
$idRegistroExcluir = 