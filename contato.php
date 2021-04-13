<?php

date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Trocar names aq
$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Campo nome não informado!';
$email = $_POST['email'] ? $_POST['email'] : 'Campo Email Não Informado!';
$mensagem = $_POST['msg'] ? $_POST['msg'] : 'Mensagem Não Informada';
$data = date('d/m/y H:i:s');


if($email && $mensagem){
    $mail = new PHPMailer();

    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ecovibes4.0@gmail.com'; 
    $mail->Password = 'Proa@2020';  
    $mail->Port = 587;
    
    $mail->setFrom('ecovibes4.0@gmail.com');
    $mail->addAddress('ecovibes4.0@gmail.com');
    
    $mail->isHTML(true);
    $mail->Subject = 'Plataforma EcoVibes';  //caso tenha uma variavel assunto, chamar ela aq
    $mail->Body = "Nome: {$nome} <br>
                   Email: {$email} <br>
                   Mensagem: {$mensagem} <br>
                   Data/hora: {$data}";
    
    
    if($mail->send()){
        echo 'Email enviado com suceso';
    }
    else{
         echo'Email não pode ser enviado';
    }
}

else{
    echo("Mensagem e Email não informados :C Porfavor preencher todos os campos");
}


?>