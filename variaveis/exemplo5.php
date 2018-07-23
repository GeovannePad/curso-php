<?php
//escopo é como se fosse locais diferentes, como casas diferentes.
//arrays super globais podem ser usados em quaisquer escopos

// $nome fora da função não é a mesma coisa que $nome dentro da função
$nome = "Giovanni";

//escopo é difinido pelas chaves {}
function teste() {

    //global se utiliza para falar que a variavel é pra ser "escutada globalmente, no caso dentro dessa funcao"
    global $nome;
    echo $nome;

}

//outro escopo
function teste2 () {

    $nome = "João";
    echo $nome . " agora no teste2";
    
}

//metodo para chamar as funções
teste();
teste2();