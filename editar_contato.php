<?php
    $inicial= $_REQUEST['contato'];
    $busca = mysqli_query($con, "select * from agenda where cod_contato = '$inicial'" ) or trigger_error('Erro ao executar consutla. <br>' . mysqli_error($con));
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
            <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $dados['nome']; ?>" autofocus required>
        </div>
        <div class="form-group">
            <label>Sobrenome *</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="sobrenome"  value="<?php echo $dados['sobrenome']; ?>" autofocus required>
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" onblur="acionar()" class="form-control" id= "cpf" name="cpf" value="<?php echo $dados['cpf']; ?>" placeholder="999.999.999.99">
         </div>
        <div class="form-group">
            <label>E-mail </label>
            <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com.br" value="<?php echo $dados['email']; ?>" autofocus required>
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="tel" class="form-control" name="telefone" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}$" placeholder="(00) 0000-0000" value="<?php echo $dados['telefone']; ?>">
        </div>
        <div class="form-group">
            <label>Celular *</label>
            <input type="tel" class="form-control" name="celular" pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}$" placeholder="(00) 00000-0000" value="<?php echo $dados['celular']; ?>" autofocus required>
        </div>
        <div class="form-group">
            <label>C.E.P. *</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" value="<?php echo $dados['cep']; ?>" autofocus required>
        </div>
        <div class="form-group">
            <label>Rua *</label>
            <input type="text" class="form-control" name="rua" placeholder="Rua" value="<?php echo $dados['rua']; ?>" autofocus required >
        </div>
        <div class="form-group">
            <label>Numero *</label>
            <input type="number" class="form-control" name="numero" placeholder="Numero" value="<?php echo $dados['numero']; ?>" autofocus required >
        </div>
        <div class="form-group">
            <label>Complemento</label>
            <input type="text" class="form-control" name="complemento" value="<?php echo $dados['complemento']; ?>" placeholder="Complemento">
        </div>
        <div class="form-group">
            <label>Bairro *</label>
            <input type="text" class="form-control" name="bairro" placeholder="Bairro" value="<?php echo $dados['bairro']; ?>" autofocus required>
        </div>
        <div class="form-group">
            <label>UF *</label>
            <input type="text" list="cidade" name="cidade" autocomplete="on" placeholder="Cidade" value="<?php echo $dados['cidade']; ?>" autofocus required>
            <datalist id="cidade">
                <option value="Aracaju">
                <option value="Delmiro">
                <option value="Maceió">
                <option value="Pariconha">
                <option value="Petrolândia">
            </datalist>  
        </div>
        <div class="form-group">
            <label>Cidade *</label>
            <input type="text" list="estado" name="estado" autocomplete="on" placeholder="Estado" value="<?php echo $dados['estado']; ?>" autofocus required>
                <datalist id="estado">
                <option value="Alagoas">
                <option value="Bahia">
                <option value="Pernambuco">
                <option value="Sergipe">
            </datalist>  
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-primary">Limpar</button>
    </form>
</div>