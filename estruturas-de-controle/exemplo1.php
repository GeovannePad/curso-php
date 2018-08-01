<?php
    //Troque este valor para ver as diferentes mensagens.
    $qualaSuaIdade = 19;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    // If significa "se", então se o que estiver dentro do parênteses for verdade ele executará o que estará dentro das {}
    // o else significa "senão", caso a primeira condição não for atendida, resultando em false, ele executará o que estará dentro das {} depois do else.
    // Também tem o else if (se não se), que da pra fazer várias comparações, porém, lembre-se, o if sempre terá que vir em primeiro e o else sempre será o último, para fechar a comparação    
    if ($qualaSuaIdade < $idadeCrianca) {
        echo "Criança";
    } else if ($qualaSuaIdade < $idadeMaior) {
        echo "Adolescente";
    } else if ($qualaSuaIdade < $idadeMelhor) {
        echo "Adulto";
    }else{
        echo "Idoso";
    }
    echo "<br>";

    //Operador ternário
    //Pode-se utilizar este operador em condições básicas ou rápidas.
    // é a mesma função do if
    // (condição) ? "casofortrue" : "casoforfalse"
    echo ($qualaSuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";