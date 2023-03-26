<?php
/*
* 1. As classes filhas irão herdar todas as propriedades e métodos public e protected 
* 2. Métodos herdados podem ser sobrepostos em classes filhas
* 3. Métodos herdados com modificador protected só podem ser acessados dentro da classe. 
*/

class UserRoot {
    public $id;

    function __construct($id){
        $this->id = $id;
    }

    public function mensagem(){
        echo "Olá usuário root. você tem todo acesso livre !";
    }

    protected function procurandoProcessos(){
        echo "Procurando os processos.";
    }
    
    private function finalizarProcesso(){
    	echo "finalizando o processo";
    }
}


class User extends UserRoot {

	public function listarProcessos(){
    	$this-> procurandoProcessos(); 
        echo "\n Listando os processos";
    }

    public function mensagem()
    {
        echo "Olá usuário. você tem acesso limitado!";
    }
}

$newUser = new User("0113");
$newUser->listarProcessos();
//$newUser-> procurandoProcessos(); ERRO, essa função é protected  



