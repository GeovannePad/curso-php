<?php

$email = $_POST["inputEmail"];

$ch = curl_init();

// Definindo as configurações padrões
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Função http_build_query() monta uma URL de envio. Exemplo: ?secret=secret_value&response=response_value&remoteip=remoteip_value
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
  "secret" => "6LcTKqEUAAAAAAyZ3bOt2sfDrI73whJD0YY0oXBh",
  "response" => $_POST["g-recaptcha-response"],
  "remoteip" => $_SERVER["REMOTE_ADDR"]
)));

// Define que estamos esperando um retorno (response) dessa URL que estou mandando as informações
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Transformando o JSON do response em um array e guardando no $recaptcha.
$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

var_dump($recaptcha);
die();

// Verificando se é bot ou não.
if ($recaptcha["success"] === true) {
  echo "OK: " . $_POST["inputEmail"];
} else {
  header("Location: exemplo-04.php");
}