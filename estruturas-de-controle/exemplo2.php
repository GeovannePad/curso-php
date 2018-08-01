    <?php

        // Switch case
        // Parecido com o if, porém os resultados já são definidos, sendo mais específico que o if

        // Função básica do PHP de pegar a data atual, no caso utilizando o "w" entre os parênteses, mostrará números de 0-6 referente aos dias da semana
        $diadasemana = 8;//date("w");


        // cada case é como se fosse uma opção, e todos necessitam do break, caso você se esquecer do break ele executará todos os códigos em sêquencia, e o default é para quando nenhum desses valores forem verdade.
        switch ($diadasemana) {
            case 0:
                echo "Domingo";
                break;
            case 1:
                echo "Segunda";
                break;  
            case 2:
                echo "Terça";
                break;
            case 3:
                echo "Quarta";
                break;
            case 4:
                echo "Quinta";
                break;
            case 5:
                echo "Sexta";
                break;
            case 6:
                echo "Sábado";
                break;
            default:
                echo "Data Inválida!";
                break;
        }