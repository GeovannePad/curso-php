<?php

  // Uma classe pai, exemplo, Transportes, contendo informações em comum de todos os transportes existentes, sem ser muito específico. E posso ter uma classe filha, exemplo, Carro, onde poderá ser mais específica,
  // contendo informações mais relacionados ao Carro/Automóvel. A classe Carro herdará tudo de Transportes, menos o que é privado.
  // Com isso você pode quebrar a redundância.
  // Organizando melhor seu código.
  // Evitando muita coisa "igual" em uma só classe.
  // Abstração, por exemplo, Transportes, é uma classe "genérica" onde ela servirá para vários contextos.

  class Documento {

    private $numero;
    

    public function getNumero(){
      // Pode conter regras e tratamento para este atributo.
      return $this->numero;
    }

    public function setNumero($n){
      // Pode conter regras e tratamento para este atributo.
      $this->numero = $n;
    }
  }

  // A classe filha (CPF) consegue "pedir" coisas para a classe pai (Documento), mas a classe pai não consegue "pedir" coisas para a classe filha. 
  // Classe CPF herda a classe Documento.
  class CPF extends Documento {

    public function validarCPF():bool {

      $cpf = $this->getNumero();

      // Verifica se um número foi informado
      if(empty($cpf)) return false;

      // Elimina possível máscara
      $cpf = preg_replace('/[^0-9]/', '', $cpf);
      $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

      // Verifica se o número de digitos é igual a 11
      if(strlen($cpf) != 11) {
        return false;
      // Verifica se nenhuma das sequências inválidas abaixo foi digitada. Caso afirmativo, retorna false
      }else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999'){
          return false;
      // Cálcula os digitos verificadores para ver se o CPF é válido
      } else {
        for ($t= 9; $t < 11; $t++) { 

          for ($d=0, $c = 0; $c < $t; $c++) { 
            $d += $cpf[$c] * (($t + 1) - $c);
          }

          $d = ((10* $d) % 11) % 10;

          if ($cpf[$c] != $d) {
            return false;
          }

        }
      }
      return true;
    }

  }

  $documento = new CPF();

  $documento->setNumero("256.934.040-56");

  var_dump($documento->validarCPF());

  echo "<br>";

  echo $documento->getNumero();