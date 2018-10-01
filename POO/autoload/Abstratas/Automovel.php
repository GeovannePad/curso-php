<?php

interface Veiculo {

  public function acelerar($velocidade);
  public function desacelerar($velocidade);
  public function trocarMarcha($marcha);
  
}

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