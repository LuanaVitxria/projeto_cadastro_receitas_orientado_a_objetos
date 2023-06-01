<?php
    require_once 'header.php';
?>

<h1>CRUD- Receitas</h1>

<h2>Cadastro de receitas</h2>

<form action="config.php" method="POST">
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" id=titulo><br><br>

    <label for="ingredientes">Ingredientes:</label>
    <input type="text" name="ingredientes" id=ingredientes><br><br>

    <label for="modo_de_preparo">Modo de Preparo:</label>
    <input type="text" name="modo_de_preparo" id=modo_de_preparo><br><br>

    <input type="submit" name="adicionar" value="Adicionar">

</form>