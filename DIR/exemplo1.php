<?php
  // Verificar se o diretório (DIR) existe, se não existir, cria um.
  $name = "images";

  // is_dir é uma função para perguntar se o diretório existe, retorna true caso exista e false caso não existe
  if (!is_dir($name)) {
    // Função para criar um diretório.
    mkdir($name); 
    echo "Diretório criado com sucesso";
  } else {
    // Remove um diretório.
    rmdir($name);
    echo "Já existe o diretório: $name foi removido!";
  }

