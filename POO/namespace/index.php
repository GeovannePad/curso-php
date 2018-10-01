<?php
  // Utilizar para organizar as classes por assuntos, evitando conflitos, as vezes, entre classes com o mesmo nome, mesmo fazendo coisas diferentes.

  require_once("config.php");
  
  // Palavra reservada para utilizar de um namespace específico.
  use Cliente\Cadastro;

  $cad = new Cadastro();
  $cad -> setNome("Djalma Sindeaux");
  $cad -> setEmail("djalma@hcode.com.br");
  $cad -> setSenha("123456");

  // Echo só aceita texto, não um objeto, então nessa hora, o método __ToString é executado e converte tudo para um json.
  echo $cad -> registrarVenda();