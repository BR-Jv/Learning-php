<?php 
    /**
     * É uma boa prática escrever o nome da constante com letras maiúsculas  
     */

    class Constantes {
        const PI = 3.14;
        const G = 9.8;
        
        //Acessando a constante G dentro da classe
        public function Gravidade(){
            echo self::G; 
        }
    }

    //Acessando a constante PI fora da classe em que foi definida 
    echo Constantes::PI;

    $g = new Constantes();
    $g->Gravidade();

    