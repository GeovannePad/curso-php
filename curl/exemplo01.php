<?php

  // Lib cURL é uma API do php que pode se comunicar com outras url solicitando ou não dados, com vários tipos de conexão. Posibilitando várias integrações e comunicação com diversos serviços.
  // cURL é uma forma "universal" de conversar, não tendo tanto trabalho para refazer seu código quando um serviço atualiza ou mude.
  
  // CEP do local para coletar os dados
  $cep = "01310100";

  // URL do Web Service que iramos usar.
  $link = "https://viacep.com.br/ws/$cep/json/";

  // Chama a biblioteca, passando o endereço de comunicação.
  $ch = curl_init($link);

  // Opções para funcionar corretamente

  // 1ª Parâmetro é a variável onde se iniciou a biblioteca, 2º Parâmetro é a opção/configuração que deseja e o 3º Parâmetro é se você quer ou não que isso seja executado ou ignorado

  // Nesta primeira opção, é uma configuração que possibilita o retorno de informações, quer dizer que você está esperando uma resposta. Neste caso a informação vai e depois volta uma resposta do serviço, no caso o 3º parâmetro deve ser 1 (true) para isso acontecer.
  // Caso você coloque 0 (false), ele vai entender que você apenas está enviando um dado ou uma notificação, e não se preocupará em mandar nenhuma resposta
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
  // Nesta outra opção, ela vai validar se o SSL(caso exista) existir em um orgão certificador, neste caso, eu não quero que isso aconteça, então coloco 0 (false).
  // Caso você coloque 1 (true) você estará pedindo que ele verifique o SSL de seu site, ou seja, seu certificado. Neste caso, também é necessário passar outras informações com relação ao seu certificado.
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 

  // Executa e guarda a response (resposta) da variável $ch em formato JSON.
  $response = curl_exec($ch);

  // Fecha a conexão com o Web Service.
  curl_close($ch);

  // Tranforma de JSON para array, para isso é necessário passar um 2º parâmetro, ao contrário ele transformará em um objeto.
  $data = json_decode($response, true);

  // Imprime o array na tela.
  print_r($data);