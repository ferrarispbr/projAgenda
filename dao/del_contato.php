  <?php
    include "../config.php";

    $sql = "DELETE FROM agenda WHERE cod_contato = $_REQUEST[contato];";

    if (mysqli_query($con, $sql) === TRUE) {
        print "<script>alert('Usuário Excluído com sucesso');</script>";
        print "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";
    } 
    else 
    {
        print "<script>alert('Erro ao Excluir Usuário');</script>";
        print "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";
    }
  ?>