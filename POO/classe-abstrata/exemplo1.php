<?php

  // É praticamente uma interface, porém na classe abstrata você define também o que os métodos iram fazer. Além de definir os métodos.
  // Uma classe abstrata nunca é instânciada por um objeto, e para usa-la você deve criar outra classe que ira extender a classe abstrata.

  interface Veiculo {

    public function acelerar($velocidade);
    public function desacelerar($velocidade);
    public function trocarMarcha($marcha);

  }

  // Classe abstrata onde você define o que cada método faz, com o implemento de uma interfaced Veiculo, definindo os métodos obrigatórios para a classe.
  // Quando extender para a outra classe, você não precisa criar de novo os métodos na classe DelRey.
  abstract class Automovel implements Veiculo {

    public function acelerar($velocidade) {
      echo "O veículo acelerou até " . $velocidade . "km/h";
    }

    public function desacelerar($velocidade) {
      echo "O veículo desacelerou até " . $velocidade . "km/h";
    }

    public function trocarMarcha($marcha) {
      echo "O veículo trocou para a marcha " . $marcha;
    }

  }

  // Uma classe pode herdar de apenas uma classe abstrata.
  // Mas uma classe pode implementar várias interfaces.
  // Por mais que ela extenda de uma classe abstrata e uma interface, você pode criar outros métodos, caso necessário.
  class DelRey extends Automovel {
    
    public function empurrar() {
      echo "Quebrou";
    }


  }

  $carro = new DelRey();

  $carro -> acelerar(200);