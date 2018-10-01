<?php

  // método usado para acessar atributos de uma classe, dentro ou fora dela, sem precisar instânciá-la

  class Documento {

    private $numero;

    public function getNumero(){
      return $this->numero;
    }

    public function setNumero($numero){
      // Acessar um método estático, mesmo fora da classe
      $resultado = Documento::validarCPF($numero);

      if($resultado === false){
        // "Estourar" um erro.
        throw new Exception("CPF informado não é válido", 1);
      }
      return $this->numero = $numero;
    }

    public static function validarCPF($cpf):bool{
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

  //$cpf = new Documento();
  //$cpf->setNumero("39515984840");
  //var_dump($cpf->getNumero());

  // Sintaxe para "chamar" a função estática. Pode ser usada dentro ou fora da classe, mesmo sem tê-la instânciada.
  var_dump(Documento::validarCPF("395.159.848-40"));