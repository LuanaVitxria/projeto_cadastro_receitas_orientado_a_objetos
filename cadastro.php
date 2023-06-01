<?php
    //incluindo o arquivo de conexão com o banco de dados
    include "database.php";

    //declaração de variáveis para resgatar as informações do formulário via POST
    $login = $_POST ["login_user"];
    $email = $_POST['login_email'];
    $password = $_POST ["login_password"];
    $celular = $_POST['login_tel'];


    //Construir uma string em SQL para cadastro das informações.

    $sql = "INSERT INTO cp_receitas (login_user, login_email, login_password, login_profile) 
    VALUES ('$login', '$password', '$email', 'cliente')";

    //Função para cadastrar no banco de dados
    //Função mysqli_query necessita de dois parâmetros - 1º conexão com o banco 2ª comando em sql
    if(mysqli_query($conexao, $sql))
    {
        //A função header redireciona para a página indicada.
        header("Location: painel.php");
    }
    else
    {
        echo "Falha ao realizar o cadastro";
    }
