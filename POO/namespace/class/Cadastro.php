<?php

  class Cadastro {

    private $nome;
    private $email;
    private $senha;

    // Usa-se gets e sets para validar alguma informação que o usuário inseriu, ou colocar algumas regras, antes de armazenar ou "puxar" o atributo em questão.
    public function getNome():string {
      return $this->nome;
    }
    public function getEmail():string {
      return $this->email;
    }
    public function getSenha():string {
      return $this->senha;
    }

    public function setNome($nome){
      $this->nome = $nome;
    }
    public function setEmail($email){
      $this->email = $email;
    }
    public function setSenha($senha){
      $this->senha = $senha;
    }

    public function __ToString(){
      // JSon é um array que você pode ver, e o json_encode tem que receber um array.
      return json_encode(array(
        "nome"=>$this->getNome(),
        "email"=>$this->getEmail(),
        "senha"=>$this->getSenha()
      ));
    }
  }