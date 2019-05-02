<?php

  // SQL Injection é tipo de ataque direcionado ao banco de dados, onde o hacker irá focar em injetar um comando além daqueles que você solicitou.
  // Por exemplo, ao passar o id pela URI, nesse caso o hacker poderia adicionar '4 OR 1=1 --', como 1=1 sempre é verdade retornaria todos os usuários contidos na tabela. E o '--' é para os comandos a seguir serem comentados e não executados.
  // Uma boa prática para se evitar isso é, tratar a informação que nós usamos para acessar o banco de dados, por exemplo, o id sempre é númerico, então nada a não ser número poderia entrar.
  // Uma outra boa prática é utilizar o PDO, e a função bindParam, onde caso chegar uma query diferente do normal, ele coloca aspas simples em volta dessa query, transformando-a em uma string, consequentemente não a executando.
  $id = isset($_GET['id']) ? $_GET["id"] : 1;

  // Caso o $id tiver mais de 5 caracteres ou não for número, ele para o código.
  if(!is_numeric($id) || strlen($id) > 5) {
    exit("Pegamos você!");
  }
  $conn = mysqli_connect("localhost", "root", "", "db_doomus");

  $sql = "SELECT * FROM users WHERE id = $id";
  

  $exec = mysqli_query($conn, $sql);

  while ($resultado = mysqli_fetch_object($exec)) {
    var_dump($resultado);
  }
  
?>
