<?php
////STRINGS

//Para unir duas ou mais strings em PHP, usamos o operador de concatenação.
$nome = "Raphael";
$sobrenome = "Felix";

echo $nome." ".$sobrenome; //Saída: Raphael Felix
echo "<br>";
//Para obter o comprimento de uma string em PHP, usamos a função strlen()
$texto = "Olá, Mundo!";
echo strlen($texto);  // Saída: 12
echo "<br>";

//Para substituir partes de uma string, usamos a função str_replace()
$texto = "O rato roeu a roupa do Rei.";
$novo_texto = str_replace("rato","gato", $texto);
echo $novo_texto; //Saida: O gato roeu a roupa do Rei.
echo "<br>";

//Strlower(): Converte uma string para letras minúsculas
//stroupper(): Converte uma string para letras maiúsculas
$texto = "Olá, Mundo!";
$texto_minusculo = strtolower($texto);
$texto_maiusculo = strtoupper($texto);

echo $texto_minusculo;
echo "<br>";
echo $texto_maiusculo;
echo "<br>";
echo $texto;

// trim(): Remove espaços em branco no inicio e no final de uma string.
$texto = "Olá, Mundo!    ";
$texto_sem_espacos = trim($texto);
echo $texto_sem_espacos; //Saida: Olá, Mundo!
echo "<br>";

// strpos(): Encontra a posição da primeira ocorrência de uma sbustring em uma string
$texto = "O rato roeu a roupa do rei";
$posicao = strpos($texto, "rato"); //Saida: 2 (posição da primeira letra da palavra "rato")
echo $posicao;
echo "<br>";

// strrev(): Inverte uma string
$texto = "Scorrem-me subi no onibus em Marrocos";
$texto_invertido = strrev($texto);
echo $texto_invertido; //Saida: socorraM me subino on ibus em-merrocS
echo "<br>";

?>


