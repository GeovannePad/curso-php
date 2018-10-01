<?php
  // Método mágico é um tipo de método que é chamado por trás, meio que sem o programador "ver". como o método construtor.
  class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    // Chamado quando o objeto é criado/instânciado, alocando o espaço na memória.
    public function __construct($a, $b, $c){
      $this->logradouro = $a;
      $this->numero = $b;
      $this->cidade = $c;
    }

    // Chamado quando o objeto é finalizado, removido da memória. Exemplo: quando a página terminar a sua execução. 
    // Usa-se destruct quando você quer matar variáveis ou desconectar de um banco de dados.
    public function __destruct(){
      //var_dump("Destruir");
    }

    // Converte os valores para string. Como na hora de usar o echo para imprimir um objeto, ele será usado, e converterá todas os atributos para string e os retornando.
    public function __toString(){
      return $this->logradouro . ", " . $this->numero . " - " . $this->cidade; 
    }
  }

  $meuEndereco = new Endereco("Rua Ademar Saraiva Leão", 123, "Santos");

  // echo $meuEndereco;

  // ver todas as informações dentro de um objeto
  // var_dump($meuEndereco);

  // função unset() que também limpa da memória, no caso, você que chama essa função, que "manda" remover da memória.
  // unset($meuEndereco);