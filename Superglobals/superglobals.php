<?php 

/**
 * Essas variáveis tem escopo global é podem ser acessadas em qualquer parte da aplicação
 * Elas são armazenadas no vetor de nome $GLOBALS
 */

 //Definindo uma variável GLOBAL própria 
 $GLOBALS['nome'] = 'Joao Victor';

 //Variável GLOBAL $_SERVER
 echo $_SERVER['PHP_SELF'];
 echo $_SERVER['SERVER_NAME'];

 //Variável GLOBAL $_REQUEST - usada para pegar dados de um form  
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_REQUEST['name'];
}


