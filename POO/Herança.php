<?php
/*
* 1. As classes filhas irão herdar todas as propriedades e métodos public e protected 
* 2. Métodos herdados podem ser sobrepostos(overriding) em classes filhas
* 3. Métodos herdados com modificador protected só podem ser acessados dentro da classe.
* 4. Palavra reservada FINAL  
*/

class UserRoot {
    public $id;
    

    function __construct($id){
        $this->id = $id;
    }

    //FINAL garante que métodos e classes não sejam sobrepostas(overriding)
    final protected function procurandoProcessos(){
        echo "Procurando os processos.";
    }
    
    private function finalizarProcesso(){
    	echo "finalizando o processo";
    }

    public function mensagem(){
        echo "Olá usuário root. você tem todo acesso livre !";
    }


}


class User extends UserRoot {

    //Usando uma função protected da classe UserRoot
	public function listarProcessos(){
    	$this-> procurandoProcessos(); 
        echo "\n Listando os processos";
    }

    //função mensagem() da classe User está sobrepondo a função mensagem() da classe UserRoot
    public function mensagem()
    {
        echo "Olá usuário. você tem acesso limitado!";
    }


}

$newUser = new User("0113");
$newUser->listarProcessos();
//! $newUser-> procurandoProcessos(); ERRO, essa função é protected  



