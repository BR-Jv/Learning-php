<?php
/**
 * preg_match();
 *  return 1, se encontrar  
 *  return 0, se não encontrar
 * 
 * preg_match_all();
 *  retorna o números de vezes que o padrão é encontrado
 * 
 * preg_replace();
 * 
 * www.w3schools.com/php/php_ref_regex.asp
 * */

$rgx = "/joao/i";
$lorem = "ola joao, seja bem vindo!.";

if (preg_match($rgx, $lorem) != 1) {
    echo "padrao nao encontrado \n";
} else {
    echo "padrao encontrado \n";
}
