<?php
    $site = 'localhost/agenda/';
    $nome_banco = "agenda";

    $con = mysqli_connect("127.0.0.1","root","",$nome_banco);

    if (mysqli_connect_errno())
    {
        print "Falha de conexão no MySQL: " . mysqli_connect_error();
    }

    mysqli_select_db($con,$nome_banco);
?>

