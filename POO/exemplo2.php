<?php
  class Carro {
    // Proteje o atributo, sendo acessado apenas por um método.
    private $modelo;
    private $motor;
    private $ano;

    // Método get é para "pegar" a variável e o método set é para mudar ou setar algo para a variável.
    public function getModelo(){
      return $this->modelo;
    }
    public function setModelo($modelo){
      //$this->modelo é uma coisa e a variável $modelo é outra coisa.
      $this->modelo = $modelo;
    }

    public function getMotor(){
      if(!isset($this->modelo)){
        return false;
      } else {
        return $this->motor;
      }
      
    }
    public function setMotor($motor){
      if ($this->getModelo() == "GOL GT") {
        $this->motor = $motor;
      } else {
        return null;
      }

    }

    public function getAno(){
      if (isset($this->modelo)) {
        return $this->ano;
      } else {
        return "Você deve informar primeiro o modelo do carro";
      }
      
    }
    public function setAno($ano){
      $this->ano = $ano;
    }



    public function exibir(){
      return array(
        "modelo"=>$this->getModelo(),
        "motor"=>$this->getMotor(),
        "ano"=>$this->getAno()
      );
    }
  }

  // Impossível acessar uma varíavel private sem os métodos set e get.
  // Você apenas consegue definir um valor para um atributo private com o método setAlgo...
  // E para acessar esse atributo, você deve usar o método getAlgo...
  // Nessa caso, é usado para ter um controle maior, criando regras dentro dos métodos set e get.
  $gol = new Carro();
  $gol->setModelo("GOL GT");
  $gol->setMotor("1.6");
  $gol->setAno("2017"); 
  
  var_dump($gol->exibir());
