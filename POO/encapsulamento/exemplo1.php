<?php

  // Também podem ser chamados de modificador de acesso.
  class Pessoa {

    // Todo mundo vê.
    public $nome = "Rasmus Lerdorf";
    // Apenas quem está dentro da classe, como os métodos ou atributos presentes dentro da classe em que o atributo protegido foi criado. E na classe extendida também consegue acessar esses atributos.
    protected $idade = 48;
    // Está um nível acima de um atributo protegido, pois nem mesmo a classe extendida consegue acessar, apenas quem está dentro da classe consegue acessar esse atributo.
    private $senha = "123456";

    public function verDados(){
      echo $this->nome . "<br>";
      echo $this->idade . "<br>";
      echo $this->senha . "<br>";
    }


  }

  // Programador herda Pessoa, onde ganha acesso a tudo dentro da classe Pessoa, menos o que é privado (private).
  class Programador extends Pessoa {

    public function verDados(){
      // Mostra de qual classe está sendo chamado esse método, no caso, verDados. Ele recebe um objeto, no caso, dentro da própria classe, é a variável reservada $this.
      echo get_class($this) . "<br>";

      // Vai ter acesso
      echo $this->nome . "<br>";
      // Vai ter acesso
      echo $this->idade . "<br>";
      // Não vai ter acesso
      echo $this->senha . "<br>";
    }
  }

  $objeto = new Programador();

  //echo $objeto->senha . "<br>";
  $objeto->verDados() . "<br>";

  // Fora da classe, essa função deve receber o objeto em que foi instânciada, não $this.
  echo get_class($objeto);