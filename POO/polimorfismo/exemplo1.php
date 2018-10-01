<?php

  // "Ter muitas formas"
  // Polimorfismo é ter dois métodos com o nome, porém fazem coisas diferentes. Isso existe para classes diferentes apenas, dois métodos com o mesmo nome em uma única classe gera conflito. Exemplo:
  // Uma classe "pai" pode ser herdada por várias outras classes "filhas", e em cada classe vai ter um método com o nome, porém fazendo coisas diferentes. Isso é polimorfismo.
  // Em cada classe o mesmo método possui o mesmo nome, porém uma outra função. Caso queira chamar um método da classe pai, você pode usar a palavra reservada "parent".
  
  abstract class Animal {

    public function falar(){
      return "Som";
    }

    public function mover(){
      return "Anda";
    }

  }
  
  class Cachorro extends Animal {

    public function falar(){
      return "Late";
    }

  }

  class Gato extends Animal {

    public function falar(){
      return "Mia";
    }
  }

  class Passaro extends Animal {

    public function falar() {
      return "Canta";
    }

    public function mover(){
      // Além de definir algo novo, você também chama o método presente lá na classe pai.
      return "Voa e " . parent::mover();
    }
  }
  $pluto = new Cachorro();

  echo $pluto -> falar() . "<br>"; 

  echo $pluto -> mover() . "<br>";

  echo "---------------------- <br>";

  $garfield = new Gato();

  echo $garfield -> falar() . "<br>"; 

  echo $garfield -> mover() . "<br>";

  echo "---------------------- <br>";

  $aguia = new Passaro();

  echo $aguia -> falar() . "<br>";

  echo $aguia -> mover() . "<br>";
