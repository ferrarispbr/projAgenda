<?php
    include "../config.php";

    $sql = "UPDATE agenda 
                SET
                    nome = '$_POST[nome]',
                    sobrenome = '$_POST[sobrenome]',
                    cpf = '$_POST[cpf]',
                    email = '$_POST[email]',
                    telefone = '$_POST[telefone]',
                    celular = '$_POST[celular]',
                    cep = '$_POST[cep]',
                    rua = '$_POST[rua]',
                    numero = '$_POST[numero]',
                    complemento = '$_POST[complemento]',
                    bairro = '$_POST[bairro]',
                    cidade = '$_POST[cidade]',
                    estado = '$_POST[estado]'
                WHERE
                    cod_contato = $_POST[cod_contato];";

    $query = mysqli_query($con, $sql);

    if ($query == true) 
    {
        print "<script>alert('Usuário Editado com sucesso');</script>";
        print "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=editar_contato&contato=$_POST[cod_contato]'> ";
    }
    else 
    {
        print "Não foi possivel editar o registro <br><br>".mysqli_error($con);
    }
?>