<?php
include "template.php";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Entrar</title>
        <script type='text/javascript' src='js/jquery.js'></script>
        <script type='text/javascript' src='js/jquery.form.js'></script>

        <link rel="stylesheet" type="text/css" href="css/main.css" />

        <script type="text/javascript">
        // Quando carregado a página
        $(function($) {

            // Quando enviado o formulário
            $('#frmLogin').submit(function() {

                // Limpando mensagem de erro
                $('div.mensagem-erro').html('');

                // Mostrando loader
                $('div.loader').show();

                // Enviando informações do formulário via AJAX
                $(this).ajaxSubmit(function(resposta) {

                    // Se não retornado nenhum erro
                    if (!resposta)
                        // Redirecionando para o painel
                        window.location.href = 'painel.php';
                    else
                    {
                        // Encondendo loader
                        $('div.loader').hide();

                        // Exibimos a mensagem de erro
                        $('div.mensagem-erro').html(resposta);
                    }

                });

                // Retornando false para que o formulário não envie as informações da forma convencional
                return false;

            });
        });
        </script>

    </head>
    <body>
        <form id="frmLogin" action="ajax/logar.php" method="post">
            <fieldset>
                <legend>Entrar</legend>

                <div class="loader" style="display: none;"><img src="image/loader.gif" alt="Carregando" /></div>
                <div class="mensagem-erro"></div>

                <p>
                    <label for="login">Usuário</label> <br />
                    <input type="text" id="login" name="login" />
                </p>

                <p>
                    <label for="senha">Senha</label> <br />
                    <input type="password" id="senha" name="senha" />
                </p>

                <input type="submit" value="Entrar" />
            </fieldset>
        </form>
<!-- http://rafaelcouto.com.br/login-dinamico-com-jquery-php-mysql/ -->
        <p><a href="#">Login de usuários</a></p>
    </body>
</html>
