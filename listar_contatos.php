<center><h1> Agenda de contatos</h1></center>
<font size="verdana">

<?php
    include "config.php";
    $inicial = $_REQUEST['contato'];
    $busca = mysqli_query($con, "select * from agenda where nome like '%$inicial%' or cod_contato = '$inicial'") or trigger_error('Erro ao executar consutla. <br>' . mysqli_error());

    if (mysqli_num_rows($busca) == 0) 
    { 
        print "<h3 align='center'>";
        print "Nenhum registro encontrado.";
        print "</h3>";
    } 
    else 
    {
?>
        <table class="table table-striped table-hover" align='center' style="width:800px;">
            <tr>
                <td>Código</td>
                <td>Nome</td>
                <td>telefone</td>
                <td>email</td>
                <td align='center'>Ações</td>
            </tr>
            <?php
            while ($dados = mysqli_fetch_array($busca)) {
            ?>
                <tr>
                    <td><?php print $dados['cod_contato']; ?></td>
                    <td><a href="index.php?page=exibir_contato&contato=<?php print $dados['cod_contato']; ?>"><?php print $dados['nome']; ?></td>
                    <td><?php print $dados['celular'];?></td>
                    <td><?php print $dados['email'];?></td>
                    <td align='center'>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Ações para os Contatos!">
                            <a href="index.php?page=exibir_contato&contato=<?php print $dados['cod_contato']; ?>" type="button" class="btn btn-default btn-info" aria-label="Exibir Contato">
                                <span class="glyphicon glyphicon-user"></span>
                            </a>
                            <a href="index.php?page=editar_contato&contato=<?php print $dados['cod_contato']; ?>" type="button" class="btn btn-default btn-primary" aria-label="Editar Contato">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="dao/del_contato.php?contato=<?php print $dados['cod_contato']; ?>" type="button" class="btn btn-default btn-danger" aria-label="Excluir Contato">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
<?php
    }
?>