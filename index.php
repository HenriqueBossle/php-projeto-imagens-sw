<?php
$imagens = glob("imagens/*jpg"); //Pegar todas as imagem .jpg da pasta informada 
$dados = json_decode(file_get_contents("dados.json"), true); //Ler os dados do arquivo em json

$imagemAleatoria = $imagens[array_rand($imagens)]; //Escolhe uma imagem aleatoria dentre as presentes na pasta e com o array_rand e coloca em uma variavel

$nomeImagem = basename($imagemAleatoria); //extrai somente o nome do arquivo

$personagem = $dados[$nomeImagem]; //recupera os dados dos personagems
?>