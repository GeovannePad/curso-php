<?php
  // Funçlão recursiva é uma função que chama ela mesmo.
  // TOMAR CUIDADO PARA NÃO ENTRAR EM UM LOOP INFINITO.
  // Usadas apenas em situações mais complicadas. Nunca utilizar atoa.

  $hierarquia = array(
    array(
      //Início: CEO
      'nome_cargo'=>'CEO',
      'subordinados'=>array(
        //Início: Diretor Comercial
        array(
          'nome_cargo'=>'Diretor Comercial',
          'subordinados'=>array(
            //Início: Gerente de Vendas
            array(
              'nome_cargo'=>'Gerente de Vendas'
            ) //Término: Gerente de Vendas
          )
        ), //Término: Diretor Comercial
        //Início: Diretor Financeiro
        array(
          'nome_cargo'=>'Diretor Financeiro',
          'subordinados'=>array(
            //Início: Gerente de Contas a Pagar
            array(
              'nome_cargo'=>'Gerentes de Contas a Pagar',
              'subordinados'=>array(
                //Início: Supervisor de Pagamentos
                array(
                  'nome_cargo'=>'Supervisor de Pagamentos'
                ) //Término: Supervisor de Pagamentos
              ) 
            ), //Término: Gerente de Contas a Pagar
            //Início: Gerente de Compras
            array(
              'nome_cargo'=>'Gerente de Compras',
              'subordinados'=>array(
                //Início: Supervisor de Suprimentos
                array(
                  'nome_cargo'=>'Supervisor de Suprimentos',
                  'subordinados'=>array(
                    //Início: Funcionário
                    array(
                      'nome_cargo'=>'Funcionário'
                    )
                    //Término: Funcionário
                  )
                ) //Término: Supervisor de Suprimentos
              )
            ) //Término: Gerente de Compras
          )
        ) //Término: Diretor Financeiro   
      )
    ) //Término: CEO
  );
  function exibe($cargos){
    $html = '<ul>';
    foreach ($cargos as $cargo) {
      $html .= '<li>';
      $html .= $cargo['nome_cargo'];
      if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
        $html .= exibe($cargo['subordinados']);
      }
      $html .= '</li>'; 
    }
    $html .= '</ul>';
    return $html;
  }
  echo exibe($hierarquia);