<?php

    $nome = addcslashes($_POST['nome'],'');
    $email = addcslashes($_POST['email'],'');
    $telefone = addcslashes($_POST['telefone'],'');

    $destino = "gabriel.rteodoro@yahoo.com.br";
    $assunto = "Contato";


    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: smoke.hackin75@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino, $corpo, $cabeca)){
        echo("E-mal enviado com sucesso!");

    }else{
        echo("Houve um erro!");
    

    }

?>