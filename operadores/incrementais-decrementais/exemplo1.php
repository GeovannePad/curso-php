<?php
    // Operador de incremento e decremento

    $a = 10;

    //Simplesmente soma mais 1 depois uma na variável, um pós-incremento. Também pode-se usar o $a--, em vez de somar ele irá subtrair usando a mesma regra da soma.
    echo $a++;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo "<br>";
    
    //Nesse caso ele incrementará 1 antes de mostrar a variável, um pré-incremento. Também pode-se usar o --$a, em vez de somar ele irá subtrair usando a mesma regra da soma.
    echo ++$a;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo "<br>";

?>