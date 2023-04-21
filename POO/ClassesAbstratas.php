<?php
/***
 * Classes abstratas definem metódos que serão implementados pelas classes filhas
 * 1. Classes filhas tem que ter o mesmo tipo e número de argumentos, no entanto, podem ter argumentos extras
 * 2. Classes filhas devem ter o mesmo tipo de modificador de acesso ou menor
 */

abstract class ParentClass
{
    abstract protected function method1();
    abstract public function method2($name, $color); 
}

class ChildClass extends ParentClass 
{
    //public < protected
    public function method1(){
        //implementa o method1, porém com o tipo de acesso difente
    }

    public function method2($name, $color, $cidade = 'natal')
    {
        //implementa a method2, e adiciona um argumento       
    }
}

