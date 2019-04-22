<?php

// Gerando imagens a partir de outras imagens.


// Gerar nossa "tela" a partir de uma imagem, onde, irá fazer uma "cópia" da imagem, carregando todas as características da imagem, como altura e largura, para que nós possamos edita-la.
$image = imagecreatefromjpeg("certificado.jpg");

// Gerando uma cor para os textos, no caso, a cor Preta RGB (0,0,0)
$titleColor = imagecolorallocate($image, 0, 0, 0);

// Gerando um tom de cinza RGB (100,100,100)
// Note: Sempre que repetir os três valores R G B, resultará sempre em uma tonalidade de cinza, sendo mais escura quando mais próximo dos valores do preto e mais clara quando mais perto do branco.
$gray = imagecolorallocate($image, 100, 100, 100);

// Adicionando os textos na imagem, atribuindo fontes externas nos textos. 
// Para isso deve-se utilizar a função imagettftext().
// Função utf8_decode() serve para decodificar um padrão de caracter em utf8.
// 2º parâmetro = Tamanho da fonte (size).
// 3º parâmetro = ângulo que será "escrito" o texto, no caso, como é 0, o ângulo será horizontal. Se fosse 90, então seria inserido o texto na vertical.
// 5º parâmetro = Caminho do arquivo TTF da fonte usada.
// __DIR__ Constante mágica, retornará como valor o caminho da pasta atual, no caso, todo o caminho para a pasta GD.
imagettftext($image, 32, 0, 315, 250, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 340, 350, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Divanei Aparecido");
imagettftext($image, 32, 0, 250, 450, $gray, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", utf8_decode("Concluído em: ") . date("d/m/Y"));

// Definindo o tipo de arquivo/resposta que será gerado pelo PHP, no caso, uma imagem (JPG).
// É como uma forma de dizer para o HTML que o arquivo, que ta "chegando" é do tipo imagem, e JPEG.
// É o tipo de arquivo que será retornado, caso chamarem um arquivo PHP que contenha essa função.
header("Content-type: image/jpg");

// Envia/emite uma imagem do tipo JPEG, enviando para o browser ou para um arquivo.
imagejpeg($image);

// Destruindo a variável resource, liberando qualquer memória alocada para a variável $image.
imagedestroy($image);
