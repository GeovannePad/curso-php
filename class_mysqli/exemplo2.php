<?php
  // Meio mais antigo de conexão com o banco de dados

  // Conectando ao banco, seguindo os parâmetros, (local_da_conexão/ip, usuário, senha, nome_do_banco).
  $conn = new mysqli("localhost", "root", "", "dbphp7");

  // Testando para ver se deu erro na coneção com o banco.
  if ($conn -> connect_error) {
    echo "Error: " . $conn->connect_error;
  }

  // Executar um comando direto dentro do banco de dados, sem preparar um comando antes.
  $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY idusuario");

  $data = array();
  // Se existir dados no resultado, armazena essa linha de dados dentro da variável $row.
  while ($row = $result->fetch_assoc()){

    // Inseri um novo valor no array $data, no caso, os dados presentes em $row, formando um array de um array
    array_push($data, $row);

  }

  echo json_encode($data);
