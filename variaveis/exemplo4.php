<?php
//GET recebe todas as informações que estão vindo junto com a url. Query string (?)
// o (int) irá converser a string para número inteiro.
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