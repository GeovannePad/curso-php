<?php
  // Command Injection

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  
  // Para evitar o Command Injection, você deve tratar os dados vindo do POST, e aplicar regras a eles, por exemplo, no caso abaixo 
  // o PHP apenas irá executar o comando, se ele for 'dir C:\', caso contrário ele irá
  // escapar com o escapeshellcmd() adicionando caracteres em meio a esse comando, fazendo ele virar uma string, consequentemente não o executando.
  // escapeshellarg() adiciona aspas simples em torno de uma string e escapa qualquer as aspas simples existentes permitindo a você passar uma string diretamente para uma função shell e tendo ela tradata como um argumento seguro.
  $cmd = $_POST["cmd"];

  if ($cmd !== "dir C:\\") {
    $escape = escapeshellcmd($cmd);    
    var_dump($escape);
  } else {
    echo "<pre>";
    $comando = system($cmd, $retorno);
    echo "</pre>";
  }

}

?>
<form method="post">
  <input type="text" name="cmd">
  <button type="submit">Enviar</button>
</form>