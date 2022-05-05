<?php  
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
    }
    $logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="PT-Br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de contatos</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/maskedinput.js"></script>
        <script type="text/javascript" src="bootstrap/js/form_contato.js"></script>
    
    </head>
    <?php
        include "config.php";
    ?>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?page=">Início</a></li>
                    <li><a href="index.php?page=form_contato">Cadastrar</a></li>
                    <li><a href="index.php?page=listar_contatos&contato=">Listar</a></li>
                    <li><a href="logout.php?sair=logout">Sair</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" role="search" name="busca" action="index.php">
                        <div class="form-group">
                            <input type="hidden" name="page" value="listar_contatos" />          
                            <input type="text" name="contato" class="form-control" placeholder="Buscar - nome ou código">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php 
            $page='';
            if( empty($_REQUEST['page']))
            {  
        ?>
                <div class="jumbotron">
                    <h2><?php echo "Bem vindo(a) ".$logado ?> - Agenda de Contatos!</h2>
                    <p>Cadastro de contatos !</p>
                </div>
        <?php 
            }
            else
            {
                $pagina = $_REQUEST['page'];
                include ($pagina.'.php');
            }
        ?>
    </div>

    <?php mysqli_close($con);  ?>

</body>
</html>
