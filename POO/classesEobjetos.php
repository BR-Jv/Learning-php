<?php
class Fruit
{
    //Propriedades
    public $name;

    //constructor 
    function __construct($name)
    {
        $this->name = $name;
    }

    //Métodos
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }

    /*
    * A Função destructor executa os comandos ao final do script
    */
    function __destruct() 
    {
    	echo "The fruit is {$this->name}.";
  	}

    
}

$apple = new Fruit("apple");
