<?php
  // Sempre iniciar por letra maiúscula
  // Início da classe Pessoa
  class Pessoa {
    
    // Atributo $nome. Com encapsulamento public, onde todo mundo tem acesso, é tipo uma variável pública. "Todo mundo vê"
    public $nome;

    // Método "falar"
    public function falar(){
      // This é uma variável padrão que já existe nesse contexto. Seguido do nome do atributo criado anteriormente, $this é uma variável interna do PHP.
      return "O meu nome é " . $this->nome;
    }
  }


  // O parênteses é opcional, apenas tem por causa do construtor.
  $giovanni = new Pessoa();
  // Acessando o atributo nome e armazenando a string "Giovanni Padilha".
  $giovanni->nome = "Giovanni Padilha";
  // Chamando o método falar() onde basicamente retornará o nome inserido no atributo $nome.
  echo $giovanni->falar();