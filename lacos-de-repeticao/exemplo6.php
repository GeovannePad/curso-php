    <?php

        // While e Do while
        // While significa "faça enquanto", muito usado para pegar dados do banco de dados.
        //  O do while, ele executa o código pelo menos uma vez o código e depois começa a repetição e comparação.

        $condicao = true;

        // Enquanto a condição for retornando true ele irá repetir o que estiver dentro das chaves {}
        while ($condicao) {
            $numero = rand(1, 10);
            if ($numero === 3) {
                echo "Três ";
                $condicao = false;
                break;
            }
            echo $numero . " ";
        }