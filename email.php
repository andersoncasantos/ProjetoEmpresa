<?php
 
if(isset($_POST['email']) && !empty($_POST['email']))

$email = addslashes($_POST['email']);

$to = "contato@infserver.com.br";
$subjet = "Contato - Infserver Soluções em Tecnologia";
$body = "Email: ".$email;

$header = "From:site@reactdigital.com.br"."\r\n".
            "Reply-To:" .$email. "\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$header)){

    header('Location: index.php?login=enviado#contato');

}else{

    echo("Opps! A mensagem não pode ser enviada.");

}

?>