<?php

echo "Olá Mundo!"."<br>";


//Isso é um comentario
# Isso também é um comentário

/*
Iso é um comentario de multiplas linas
Eu disse, multiplas linha
*/


//Declaração de variáveis
$nome = "João" ;
$sobrenome = "Silva";
$nome_completo = $nome ." ".$sobrenome;

// echo $nome;
// echo $sobrenome;

echo $nome ." ".$sobrenome."<br>";
echo $nome_completo."<br>";

//Variáveis numéricas
$idade = 25;
$ano = 2024;

echo $idade."<br>";
echo $ano - $idade."<br>"; //operações matemáticas

echo 'Esse é um texto em aspas simples <br>';
echo "Esse é um texto em aspas duplas <br>";

//Trabalhando com aspas simples e duplas
echo 'Dom Pedro disse:"Independencia ou Morte" '."<br>";

echo "$nome tem $idade anos de idade";
?>