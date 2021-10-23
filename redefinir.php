<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './lib/vendor/autoload.php';

include("classes/config/Conexao.class.php");
include("classes/dao/MoradoresDAO.class.php");
$objDAO = new MoradoresDAO();
$consulta = $objDAO->redefinirMoradores($_POST['inputEmail']);
// $agora = date('d/m/Y H:i');

date_default_timezone_set('America/Sao_Paulo');
$agora = date('d/m/Y \à\s H:i:s');
// $timezone = new DateTimeZone('America/Sao_Paulo');
// $agora = new DateTime('now', $timezone);

$Destino = $consulta['email'];
$autor = $consulta['nome'];
$senha = $consulta['senha'];

$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'a4dddc28fb0bd4';
    $mail->Password = '37ca4070341d5a';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 2525;
    

    $mail->setFrom('luan.limarangon@gmail.com', 'Intercom');
    $mail->addAddress($Destino, $autor);
    // $mail->addAddress($Destino, $autor);

    $mail->isHTML(true);
    $mail->Subject = 'Redefinição de senha';
    $mail->Body = "
        Olá, ".$autor.",<br/>   
        <br/>
        <br/>
        Recebemos uma solicitação para restaurar sua senha de acesso em nosso site.<br/>
        <br/>
        Ela ocorreu em ".$agora." <br/>
        E-mail de Recuperação ".$Destino."<br/>
        <br/>
        Senha: ".$senha."
        <br/>
        Caso não seja sua solicitação entrar em contato para Troca de E-mail e senha     
    ";
    // $mail->AltBody = "Olá Cesar, Sua solicitação sobre o curso de PHP Developer.\nTexto da segunda linha.";

    $mail->send();

    echo 'E-mail enviado com sucesso!<br>';
    header("Location: EsqueciSenha.php?a=ok");
} catch (Exception $e) {
    header("Location: EsqueciSenha.php?a=er");
    echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
    //echo "Erro: E-mail não enviado com sucesso.<br>";
}

?>
