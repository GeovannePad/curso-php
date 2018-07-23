<?php
//GET recebe as informações junto com a url
$nome = (int)$_GET["a"];

//Utiliza para mostrar mais informações da variável, echo só mostra o que tem dentro, não mostrando informações adicionais
//var_dump($nome);

//utiliza para coletar o ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];

//coleta informacoes do ambiente em que o usuario está utilizando, por exemplo o nome do arquivo, local, etc ... 
$ambiente = $_SERVER["SCRIPT_NAME"];


echo $ip;
echo "<br/>";
echo $ambiente;