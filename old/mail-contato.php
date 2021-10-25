<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$msg = $_POST['msg'];

require 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";

$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
// $mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
// $mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.aerotown.com.br";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "comercial@aerotown.com.br";
$mail->Password = "aerotown@301";

$mail->setFrom("marketing@aerotown.com.br", "Aerotown Power Center");
$mail->ClearReplyTos();
$mail->addReplyTo($email, $nome);

$mail->addAddress('marketing@aerotown.com.br ', 'Aerotown Power Center');
// $mail->addBCC('web@novastudio.com.br ', 'Aerotown Power Center');
$mail->Subject = 'Contato enviado por: '.$nome;

$mail->isHTML(true);
$mail->Body = '
	<h2>Contato enviado pelo site</h2>
	<tr> 
		<td style="width:90px;background:#DDDDDD;border-right:1px solid #000;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">Nome: </td>
		<td style="width:400px;background:#DDDDDD;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">'. $nome .'</td>
	</tr>
	<tr> 
		<td style="width:90px;background:#FFFFFF;border-right:1px solid #000;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">E-mail: </td>
		<td style="width:400px;background:#FFFFFF;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">'. $email .'</td>
	</tr>
	<tr> 
		<td style="width:90px;background:#DDDDDD;border-right:1px solid #000;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">Telefone: </td>
		<td style="width:400px;background:#DDDDDD;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">'. $tel .'</td>
	</tr>
	<tr>
		<td style="width:90px;background:#FFFFFF;border-right:1px solid #000;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">Mensagem: </td>
		<td style="width:400px;background:#FFFFFF;border-top:1px solid #aaa;margin-bottom:0;margin-top:0;padding:10px;height:18px;">'. $msg .'</td>
	</tr>
';

if (!$mail->send()) {
    header("Location: http://aerotown.com.br?msg=falha");
} else {
    // $mail2->send();
    header("Location: http://aerotown.com.br?msg=sucesso");
}
?>