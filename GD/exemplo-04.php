<?php

// Gerando uma thumbnail a partir de uma outra imagem.

// Definindo o tipo de arquivo/resposta que será gerado pelo PHP, no caso, uma imagem (JPG).
header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

// Tamanho da nossa thumbnail em valores fixos, porém pode-se usar tamanhos em porcentagem para reampliar em proporções iguais.
$new_width = 256;
$new_height = 256;

// Função list() do php, é usada para coletar os dados de um array baseado na sua posição, e em seguida criando variáveis contendo esses dados.
// Neste caso, como os dois dados que queremos é respectivamente o 1º e o 2º, ou seja, o 1º tem index [0] e o 2º index [1].
// O valor do index [0] vai ser armazenado em $old_width e o valor do index [1] em $old_height.
list($old_width, $old_height) = getimagesize($file);

// Criando uma imagem true color, isso quer dizer, que ela vai ter 16 milhões de cores. Que é o jeito que o nosso olho costuma enxergar.
$new_image = imagecreatetruecolor($new_width, $new_height);

// Criando uma imagem a partir da imagem wallpaper.jpg, criando um tipo de cópia para se usar.
$old_image = imagecreatefromjpeg($file);

// Função para copiar e redimensionar uma parte da imagem.
// 1º param = A variável(resource) da imagem redimensionada.
// 2º param = A variável que contém a antiga imagem, antes de ser redimensionada.

// 3º param = A coordenada do eixo X do ponto de "início" da imagem destino(redimensionada). Valor dado em pixels(px). $dst_x
// 4º param = A coordenada do eixo Y do ponto de "início" da imagem destino(redimensionada). Valor dado em pixels(px). $dst_y

// 5º param = A coordenada do eixo X do ponto de "início" da imagem original(não-redimensionada). Valor dado em pixels(px). $src_x
// 6º param = A coordenada do eixo Y do ponto de "início" da imagem original(não-redimensionada). Valor dado em pixels(px). $src_y

// 7º param = A largura da nova imagem, já redimensionada. $dst_width
// 8º param = A altura da nova imagem,  já redimensionada. $dst_height

// 9º param = A largura da imagem original. $src_width
// 10º param = A altura da imagem original. $src_height

// * Para se entender melhor como funciona esses parâmetros, há um arquivo na pasta GD chamado "parametros" que contém o que cada paraâmetro representa.

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

// Envia/emite uma imagem do tipo JPEG, enviando para o browser ou para um arquivo.
// Enviando com 100% da qualidade.
imagejpeg($new_image, "thumbnail" . date("Y-m-d") . ".jpg", 100);

// Destruindo as variáveis utilizadas para desalocar qualquer memória a elas.
imagedestroy($old_image);
imagedestroy($new_image);