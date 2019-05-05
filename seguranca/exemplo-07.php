<?php

  // Função que substituiu a função mcrypt a partir do PHP 7.1 .

  // Neste caso é utilizado duas chaves, a chave SECRET_IV é uma espécie de camada a mais de segurança.

  // Por exemplo: vamos imaginar que uma pessoa se chame João Silva. Esse nome é bem comum e sua encriptação é a mesma. 
  // Assim, se um usuário com este nome descobrir o seu hash, poderá descriptografar as informações sigilosas de outros usuários com o mesmo nome.
  // É muito difícil que essa falha aconteça; mas, para garantir a segurança dos dados, foi adicionado uma camada a mais de verificação, que é o SECRET_IV. 
  // Como ele é único, faz com que, por exemplo, mesmo os usuários que possuem nomes iguais, essa segunda camada irá garantir que o hash da criptografia seja diferente.
  
  // Ambas devem ser em 16 bits.
  define('SECRET_IV', pack('a16', 'senha'));
  define('SECRET', pack('a16', 'senha'));

  $data = [
    "nome"=>"Hcode",
    "data"=>date('Y-m-d'),
    "senha"=>123456789,
    "avatar"=>"imagem.jpg"
  ];

  $openssl = openssl_encrypt(
    // Também precisa ser em string
    json_encode($data),
    // Algoritmo a ser usado.
    'AES-128-CBC',
    // Primeira chave, primeira camada de proteção.
    SECRET,
    // Lista de opções, forma de retorno, no caso o 0 define que não é necessário voltar nada além da criptografia.
    0,
    // Segunda chave, segunda camada de proteção.
    SECRET_IV
  );

  // A função openssl_encrypt() por padrão já retorna a string criptografada. Porém, se houver necessidade, você pode codificar ela em base64.
  // Conforme a quantidade de dados aumenta, o tamanho da string criptografada também aumenta. 
  var_dump($openssl);

  // Processo de descriptografar.
  // Utiliza os mesmos padrões da função anterior, porém, passando a variável que contém as informações criptografadas.
  $string = openssl_decrypt(
    // Variável que contém os dados criptografado
    $openssl,
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
  );

  // Transformando o JSON em array.
  var_dump(json_decode($string, true));