<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "gsferreiira@gmail.com";
    $assunto = "Coleta de dados";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone".$telefone."\n"."Mensagem".$mensagem;

    $cabeca = "From: gsferreiira@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo ("Email enviado com sucesso");
    } else{
        echo ("Houve um erro, tente novamente");
    }
?>