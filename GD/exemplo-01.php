<?php
// Biblioteca GD, biblioteca inclusa no PHP, usada para realizar diversas operações com imagens.
// Essa biblioteca não é exclusiva do PHP, da para usar em outras linguagens.
// Colocando o tipo de arquivo/resposta que o PHP vai gerar, porém, ao declarar o Content Type como uma imagem, não dará para ver os erros do código, pois é uma imagem.
header("Content-Type: image/png");

// Função da biblioteca para criar a "tela", ou seja, o tamanho da imagem que será trabalhada, a variável $image se torna uma variável resource.
// 1ª Parâmetro é a largura e o 2º parâmetro é a altura.
$image = imagecreate(256, 256);

// Função para atribuir uma cor a uma variável, usando o padrão RGB.
// A primeira cor que é criada, é atribuída como a cor de fundo da imagem.
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// Função para "escrever" na imagem, nesse caso, é sem usar um arquivo de fonte (TTF).
// 2º Parâmetro é o tamanho do texto.
// 3º e 4º Parâmetro é, respectivamente, o X e o Y que será inserido o texto, no caso, o texto vai ser inderido em 60px da margem de X e 120px da margem de Y.
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

// Função para emitir/enviar a imagem do tipo JPEG para o browser ou arquivo.
imagepng($image);

// Após gerar a imagem, é necessário destruir essa variável resource, para não ficar "atrelada" no PHP.
imagedestroy($image);
