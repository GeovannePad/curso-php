<?php

// Controle de delete e update, a transação.
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

  $conn -> beginTransaction();
  // stmt = comando
  // Não precisa colocar apenas um comando, porém só trata o retorno do último comando que você mandou.
  // Nunca esqueça do WHERE.
  $stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

  $id = 2;

  // Liga cada parâmetro, com uma variável contendo um valor.

  // Método para executar a query.
  $stmt -> execute(array($id));

  // Oposto de commit(), exemplo, caso não der certo algo, você cancela a query, como se nunca tivesse dado aquele comando.
  // $conn -> rollBack();
  
  // Confirma a execução da query, exemplo, quando tudo estiver certo, ai então você confirma a query
  $conn -> commit();
  echo "Deletado com sucesso";
