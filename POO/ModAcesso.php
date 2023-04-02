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
    protected $id;
    private $senha;

    function set_login($login){
        $this->login = $login;
    }
    
    function get_login(){
        return $this->login;
    }

    protected function set_id($id){
        $this->login = $id;
    }
    
    protected function get_id(){
        return $this->id;
    }

    private function set_senha($senha){
        $this->senha = $senha;
    }
    
    private function get_senha(){
        return $this->senha;
    }
}
