<?php
    include "envia_email.php";

    $nome = "Fulano de tal";
    $data = "28/11/2022";
    $email = "lololzinha225@gmail.com";

    $assunto = "Exemplo de e-mail pelo PHP";

    $mensagem = "Mensagem teste <3";
;

    if(envia_email($email, $assunto, $mensagem)){
        echo "E-mail enviado com sucesso!";
    }
    else{
        echo "Falha no envio do e-mail";
    }
?>