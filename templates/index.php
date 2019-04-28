<?php

  // Pega um template HTML, e faz um merge, juntamente com o código PHP, junta os dois e coloca no cache, para acessar posteriormente.
  // Forma melhorada para separar os códigos HTML do PHP e vice versa, pois antigamente se juntava os dois e o código além de ficar sujo, com o tempo ficaria lento.

  // A extensão do template pode ser .tpl, mas também pode ser .html, ficando até mais fácil para se abrir o código para editar.
  // Não pode ser considerado um MVC, pois MVC é um padrão de projeto. Porém é uma forma mais organizada.
  // Não é um MVC, pois estamos vendo apenas a parte HTML, separada da parte do código PHP, apenas.

require_once('vendor/autoload.php');

// namespace
use Rain\Tpl;

// config
$config = array(
  "tpl_dir"       => "tpl/",
  "cache_dir"     => "cache/",
  "debug"         => true, // set to false to improve the speed
);

Tpl::configure($config);


// Add PathReplace plugin (necessary to load the CSS with path replace)
//Tpl::registerPlugin(new Tpl\Plugin\PathReplace());


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign("name", "Giovanni");
// PHP_VERSION constante do PHP que "pega" a versão do PHP utilizado
$tpl->assign("version", PHP_VERSION);

// assign an array
$tpl->assign("week", array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"));

// draw the template
// Gera o resultado final, a página completa, com o php e html.

// Neste caso ele pega o conteúdo que ele gerou e guarda na variável $html, neste caso ele vai fazer um return, "guardando" o código na variável $html.
$html = $tpl->draw("index", true);

// Neste caso eu não mudei as variáveis, pois o gmail com verificação de duas etapas bloqueia a requisição e não envia o e-mail, por questões de segurança.
// Porém o exemplo abaixo funciona, apenas troque as variáveis e informações para as suas.

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

// Pega o template HTMl gerado pelo RainTPL, guardado na variável $html para usar como corpo do e-mail.
$mail->msgHTML($html);

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
