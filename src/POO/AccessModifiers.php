<?php 
/*
* Modificadores de acesso 
*   - public 
*   - protected
*   - private
*/

class User 
{
    public $login;
    private $senha;

    function set_login($login){
        $this->login = $login;
    }
    
    function get_login(){
        return $this->login;
    }

    private function set_senha($senha){
        $this->senha = $senha;
    }
    
    private function get_senha(){
        return $this->senha;
    }
}
