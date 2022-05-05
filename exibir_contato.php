<?php
    $inicial= $_REQUEST['contato'];
    $busca = mysqli_query($con, "select * from agenda where cod_contato = '$inicial'" ) or trigger_error('Erro ao executar consutla. <br> ' . mysqli_error($con));
    $dados = mysqli_fetch_array($busca);
?>

<div class="row">
    <form class="form-horizontal" name="agenda" action="dao/edit_contato.php" method="post" >
        <div class="form-group">
            <label>Código</label>
            <input type="text" class="form-control" name="cod_contato" readonly  value="<?php echo $dados['cod_contato']; ?>">
        </div>
        <div class="form-group">
            <label>Nome *</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome" readonly value="<?php echo $dados['nome']; ?>">
        </div>
        <div class="form-group">
            <label>Sobrenome *</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="sobrenome" readonly  value="<?php echo $dados['sobrenome']; ?>">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" onblur="acionar()" class="form-control" id= "cpf" name="cpf" readonly value="<?php echo $dados['cpf']; ?>" placeholder="999.999.999.99">
         </div>
        <div class="form-group">
            <label>E-mail </label>
            <input type="email" class="form-control" name="email" readonly placeholder="exemplo@exemplo.com.br" value="<?php echo $dados['email']; ?>">
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="tel" class="form-control" name="telefone" readonly placeholder="(00) 0000-0000" value="<?php echo $dados['telefone']; ?>">
        </div>
        <div class="form-group">
            <label>Celular *</label>
            <input type="tel" class="form-control" name="celular" readonly placeholder="(00) 00000-0000" value="<?php echo $dados['celular']; ?>">
        </div>
        <div class="form-group">
            <label>C.E.P. *</label>
            <input type="text" class="form-control" id="cep" name="cep" readonly placeholder="00000-000" value="<?php echo $dados['cep']; ?>">
        </div>
        <div class="form-group">
            <label>Rua *</label>
            <input type="text" class="form-control" name="rua" readonly placeholder="Rua"  value="<?php echo $dados['rua']; ?>" >
        </div>
        <div class="form-group">
            <label>Numero *</label>
            <input type="number" class="form-control" name="numero" readonly placeholder="Numero" value="<?php echo $dados['numero']; ?>" >
        </div>
        <div class="form-group">
            <label>Complemento</label>
            <input type="text" class="form-control" name="complemento" readonly value="<?php echo $dados['complemento']; ?>" placeholder="Complemento">
        </div>
        <div class="form-group">
            <label>Bairro *</label>
            <input type="text" class="form-control" name="bairro" readonly placeholder="Bairro" value="<?php echo $dados['bairro']; ?>">
        </div>
        <div class="form-group">
            <label>UF *</label>
            <input type="text" class="form-control" name="cidade" readonly placeholder="Cidade" value="<?php echo $dados['cidade']; ?>" >
        </div>
        <div class="form-group">
            <label>Cidade *</label>
            <input type="text" class="form-control" name="estado" readonly placeholder="Estado" value="<?php echo $dados['estado']; ?>">
        </div>
    </form>
</div>