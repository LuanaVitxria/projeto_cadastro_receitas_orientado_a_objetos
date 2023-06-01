<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooking Passion</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/cp_logo1.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container">
            <div class="sub-header">
                <div class="logo">
                    <a href="index.php"><img src="img/pc_logo.png" alt="logo_cookingpassion"></a>
                </div>

                <div class="barra_pesquisa">
                    <input type="text" name="pesquisa" placeholder="O que está procurando?">
                </div>
                <div class="sign-in">
                    <?php
                        session_start();

                        if(!isset($_SESSION ['usuario'])){
                    ?>
                        <div class="botoes_lc">
                            <form action="form_login.php" method="get">
                                <button type="submit">Login</button>
                            </form>                            
                            <form action="form_cadastro.php" method="get">
                                <button type="submit">Cadastrar</button>
                            </form>
                        </div>
                        
                    <?php
                            //iniciar sessão em php
                            if(isset($_SESSION['mensagem'])){
                                $msg = $_SESSION['mensagem'];
                                echo "<p>" .$msg. "</p>";
                                unset($_SESSION['mensagem']);
                            }        
                        } else {
                    ?>

                        <form action="logout.php" method="post">
                            <button type="submit">Sair</button>
                        </form>
                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </header>
    
</body>
</html>