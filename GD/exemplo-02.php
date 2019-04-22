<?php

// Gerando imagens a partir de outras imagens.


// Gerar nossa "tela" a partir de uma imagem, onde, irá fazer uma "cópia" da imagem, carregando todas as características da imagem, como altura e largura, para que nós possamos edita-la.
$image = imagecreatefromjpeg("certificado.jpg");

// Gerando uma cor para os textos, no caso, a cor Preta RGB (0,0,0)
$titleColor = imagecolorallocate($image, 0, 0, 0);

// Gerando um tom de cinza RGB (100,100,100)
// Note: Sempre que repetir os três valores R G B, resultará sempre em uma tonalidade de cinza, sendo mais escura quando mais próximo dos valores do preto e mais clara quando mais perto do branco.
$gray = imagecolorallocate($image, 100, 100, 100);


// Adicionando os textos na imagem.
// Função utf8_decode() serve para decodificar um padrão de caracter em utf8.
imagestring($image, 5, 440, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $gray);

// Definindo o tipo de arquivo/resposta que será gerado pelo PHP, no caso, uma imagem (JPG).
// É como uma forma de dizer para o HTML que o arquivo, que ta "chegando" é do tipo imagem, e JPEG.
// É o tipo de arquivo que será retornado, caso chamarem um arquivo PHP que contenha essa função.
header("Content-type: image/jpg");

// Envia/emite uma imagem do tipo JPEG, enviando para o browser ou para um arquivo.
// 2º parâmetro é o nome do arquivo a ser criado e o 3º é relacionado a qualidade da imagem em % (0 = pior qualidade | 100 = melhor qualidade).
// Por padrâo a qualidade é setada em 75%, ou seja, 75. Neste caso, a imagem está sendo gerada com 50% da qualidade original.
imagejpeg($image, utf8_decode("certificado-") . date("Y-m-d") . ".jpg", 50);

// Destruindo a variável resource, liberando qualquer memória alocada para a variável $image.
imagedestroy($image);
