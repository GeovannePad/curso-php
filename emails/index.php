<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace

require_once("vendor/autoload.php");

//Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

//Tell PHPMailer to use SMTP
// "O que você vai fazer o que o PHPMailer"
// isSMTP prepara para enviar e-mails
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages

// 0 para produção
// 1 para testes
// 2 para desenvolver
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
// No caso do gmail é a porta 587.
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "from@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "secret";

//Set who the message is to be sent from
// 2º param = alias = Um "apelido" para o remetente.
$mail->setFrom('quemmanda', 'issoai');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('quemrecebe', 'dalo');

//Set the subject line
// Assunto a ser tratado
$mail->Subject = 'Testando a classe PHPMailer com Gmail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// Corpo do email, conteúdo HTML do email.
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// Adicionar anexos ao e-mail.
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
  //Section 2: IMAP
  //Uncomment these to save your message in the 'Sent Mail' folder.
  #if (save_mail($mail)) {
  #    echo "Message saved!";
  #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
/*
function save_mail($mail)
{
  //You can change 'Sent Mail' to any other folder or tag
  $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

  //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
  $imapStream = imap_open($path, $mail->Username, $mail->Password);

  $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
  imap_close($imapStream);

  return $result;
}
*/