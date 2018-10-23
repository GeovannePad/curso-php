<?php
  // PHP Data Object

  // DSN, String de conexão. 1º parâmetro
  // Usuário. 2º parâmetro
  // Senha. 3º parâmetro
  // Também pode trabalhar com begin transactio em PDO.

  // Cria a conexão com o banco.
  // String de conexão com o mysql.
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
  

  // Prepara a query para mandar pro banco de dados
  $stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

  // Executa a query
  $stmt -> execute();

  // "Fatia" todas as linhas, trazendo todos os resultados
  $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

  // Neste primeiro foreach ele passa em cada linha do array.
  foreach ($results as $row) {
    // Depois, exibe todos os valores de cada coluna em cada linha do array
    foreach ($row as $key => $value) {
      // Exibe todos os dados, nesse formato
      echo "<strong>" . $key . ":</strong>" . $value . "<br>";
    }
    echo "============================= <br>";
  }

  