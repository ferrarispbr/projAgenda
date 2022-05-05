<?php
    include "../config.php";

    $sql = "INSERT 
                INTO agenda(
                                nome,
                                sobrenome,
                                cpf,
                                email,
                                telefone,
                                celular,
                                cep,
                                rua,
                                numero,
                                complemento,
                                bairro,
                                cidade,
                                estado
                            )
                VALUES (
                            '" . $_POST["nome"] . "',
                            '" . $_POST["sobrenome"] . "',
                            '" . $_POST["cpf"] . "',
                            '" . $_POST["email"] . "',
                            '" . $_POST['telefone'] . "',
                            '" . $_POST['celular'] . "',
                            '" . $_POST['cep'] . "',
                            '" . $_POST['rua'] . "',
                            '" . $_POST['numero'] . "',
                            '" . $_POST['complemento'] . "',
                            '" . $_POST['bairro'] . "',
                            '" . $_POST['cidade'] . "',
                            '" . $_POST['estado'] . "'
                        )";

    $query = mysqli_query($con, $sql);

    if ($query == true) 
    {
        print "<script>alert('Novo usuário cadastrado !');</script>";
        print "<META http-equiv='refresh' content='1;URL=http://" . $site . "index.php?page=listar_contatos&contato='> ";
    } 
    else 
    {
        print " <br><br> Não foi possivel fazer o cadastro ! <br><br>" . mysqli_error($con);
    }
