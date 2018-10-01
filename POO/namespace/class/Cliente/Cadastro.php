<?php

  // A classe Cadastro dentro do escopo/namespace Cliente é um Cadastro do cliente. Diferente da classe Cadastro (genérica) que foi herdada para a classe Cadastro do cliente.
  namespace Cliente;

  // Usa-se no windows "\nomedoarquivo" para voltar um diretório.
  class Cadastro extends \Cadastro {

    public function registrarVenda(){
      return "Foi registrada uma venda para o cliente " . $this->getNome();
    }
  }