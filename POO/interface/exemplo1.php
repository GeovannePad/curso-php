<?php

  // Interface é boa para organizar seu próprio código, quando você programa sozinho.
  // Quando um código "conversa" com outro código.
  // Define padrões para métodos, o que precisa, como precisa e aonde precisa estar.
  // Uma classe pode implementar várias interfaces.

  interface Veiculo {


    public function acelerar($velocidade);
    public function desacelerar($velocidade);
    public function trocarMarcha($marcha);

  }

  // Implementa a interface veiculo na classe Civic.
  // Para adicionar mais de uma interface em uma classe é só colocar uma vírgula, seguida do nome da próxima interface.
  class Civic implements Veiculo {

    // O nome do parâmetro não precisa ser o mesmo da interface, porém o nome do método sim.
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


  $carro = new Civic();

  $carro -> trocarMarcha(2);