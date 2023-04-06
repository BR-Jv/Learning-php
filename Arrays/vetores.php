<?php 

//Definindo uma array padrão
$arr = array("item1", "item2", "item3");

//Acessando a array atráves do index
echo $arr[0];

//Criando uma array com chaves
$arr2 = array("key1"=>"valor1" , "key2" => "valor2", "key3"=>"valor3");

//Acessando uma array com chaves 
echo $arr2["key2"];

//Percorrendo a array2

foreach($arr2 as $item => $item_value){
    echo "Chave=".$item." Valor=".$item_value."\n";
}

//Matriz ou array multidimensional 
$table = array(
    //cada nova array representa um linha
    array("0.0", "0.1", "0.2"), 
    array("1.0", "1.1", "1.2"),
    array("2.1", "2.2", "2.2"),
);

for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo $table[$row][$col]." ";
    }   
    echo "\n";
}

