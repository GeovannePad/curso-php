<?php 

// Uma das formas de encriptografar dados.
// Porém, essa função mcrypt_encrypt foi descontinuada a partir do PHP 7.1

// Um array com dados, para ser encriptado.
$data = [
	"nome"=>"Hcode"
];

// Função para definir uma constante de nome SECRET.
// Juntamente com a função pack(), que converte uma string para 16 bits, ou seja 16 caracteres. Pois a função mcrypt_encrypt() necessita de uma chave em 16 bits para funcionar.
// Caso essa chave tenha 16 caracteres não há a necessidade de utilizar essa função pack(), porém se ela tiver menos de 16 ou mais de 16, é necessário utiliza-la.
define('SECRET', pack('a16', 'senha'));


$mcrypt = mcrypt_encrypt(
	// O algoritmo que vai ser usado para encriptar.
	MCRYPT_RIJNDAEL_128, 

	// A constante que contém a senha ou a "chave" que abre essa informação, essa "chave" não deve ser divulgada. Pois caso um cracker/hacker interceptar essa informação encriptada e ele tiver essa chave, ele consegue acessar essa informação.
	SECRET,

	// String que vai ser encriptada.
	// No caso por ser um array, então utiliza-se a função json_encode() para transformar esse array em JSON(string), mantendo a formatação para conseguir separar esses dados depois.
	json_encode($data), 

	// Modo de criptografia que vai ser utilizado.
	MCRYPT_MODE_ECB
);


// Caso for salvar em um banco de dados, é preciso salvar em string, para não perder nenhuma informação de nenhum caractere.
// Para isso, é utilizado a função base64_encode().
$final = base64_encode($mcrypt);

// Processo reverso, "volta da informação".
$string = mcrypt_decrypt(
	MCRYPT_RIJNDAEL_128, 
	SECRET, 
	// Como foi usado o padrão BASE64 para codificar essa string, é necessário decodificar essa string para voltar no formato original.
	base64_decode($final), 
	MCRYPT_MODE_ECB);

	// Por final, a função mcrypt_decrypt() retorna um JSON. E para ser convertido em array, deve-se utilizar a função json_decode(), passando o valor "true" no 2º parâmetro.
	var_dump(json_decode($string, true));
 ?>


