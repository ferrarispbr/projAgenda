    <div class="row">
        <form class="form-horizontal" name="agenda" action="dao/cad_contato.php" method="post">
            <div class="form-group">
                <label>Nome *</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome" autofocus required>
            </div>
            <div class="form-group">
                <label>Sobrenome *</label>
                <input type="text" class="form-control" name="sobrenome" placeholder="sobrenome" autofocus required>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" onblur="acionar()" class="form-control" id= "cpf" name="cpf" placeholder="999.999.999.99">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com.br" >
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 0000-0000">
            </div>
            <div class="form-group">
                <label>Celular *</label>
                <input type="text" class="form-control"id= "celular" name="celular"  placeholder="(00) 00000-0000" autofocus required>
            </div>
            <div class="form-group">
                <label>C.E.P. *</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" autofocus required>
            </div>
            <div class="form-group">
                <label>Rua *</label>
                <input type="text" class="form-control" name="rua" placeholder="Rua" autofocus required>
            </div>
            <div class="form-group">
                <label>Numero *</label>
                <input type="text" class="form-control" name="numero" placeholder="Numero" autofocus required>
            </div>
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" class="form-control" name="complemento" placeholder="Complemento">
            </div>
            <div class="form-group">
                <label>Bairro *</label>
                <input type="text" class="form-control" name="bairro" placeholder="Bairro" autofocus required>
            </div>
            <div class="form-group">
                <label>UF *</label>
                <input type="text" list="estado" name="estado" autocomplete="on" placeholder="Estado" autofocus required>
                <datalist id="estado">
                    <option value="Alagoas">
                    <option value="Bahia">
                    <option value="Pernambuco">
                    <option value="Sergipe">
                </datalist>
            </div>
            <div class="form-group">
                <label>Cidade *</label>
                <input type="text" list="cidade" name="cidade" autocomplete="on" placeholder="Cidade" autofocus required>
                <datalist id="cidade">
                    <option value="Aracaju">
                    <option value="Delmiro">
                    <option value="Maceió">
                    <option value="Pariconha">
                    <option value="Petrolândia">
                </datalist>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>
        </form>
    </div>