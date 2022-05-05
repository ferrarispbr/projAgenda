<?php
    include "../config.php";

    session_start();
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $query = "select * from $nome_banco.usuarios where login = '".$login."' and senha = '".$senha."'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:http://'.$site.'index.php');
    }
    else
    {
        print "<script>alert('Login ou Senha inválido(a) !');</script>";
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        print $login;
        print $senha;
        header('location:http://'.$site.'login.php?erro=1');
    }

?>
