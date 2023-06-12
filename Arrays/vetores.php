<?php 

//Definindo uma array 
$arrA = [10, 55, 64];
$arrB = [55, 73, 8];
    
//Array com chaves
$arr = [
    'nome' => "Aline Machado",
    'idade' => 54,
    'email' => null,
    'senha' => ",lno0"
]; 

//Percorrendo uma array 
foreach( $arrA as $item){
    print_r($item);
}

//Matriz ou array multidimensional 
$dados = [
    [
        'nome' => "João Victor",
        'idade' => 23,
        'email' => null,
        'senha' => "22i3a4g"
    ],
    [
        'nome' => "Maria Eduarda",
        'idade' => 23,
        'email' => null,
        'senha' => "123facxz"
    ],
    [
        'nome' => "Pedro Henrique",
        'idade' => 19,
        'email' => null,
        'senha' => "asdc"
    ]
];

/* 
 *  Array_Filter() - filtra uma array e retorna uma array com esses valores.  
 *  https://www.w3schools.com/php/func_array_filter.asp
 */
$filter = array_filter($arr, function ($value) {
    return !is_null($value);
});

/**
 * Array_diff() - compara duas ou mais array e retorna a diferença entre elas. 
 * https://www.w3schools.com/php/func_array_diff.asp
 */
array_diff($arrA, $arrB);

/**
 * Array_intersect() - retorna a intersecção de duas arrays.
 * https://www.w3schools.com/php/func_array_intersect.asp
 */
array_intersect($arrA, $arrB);

/**
 * Array_column() - retorna os valores de uma coluna.
 * https://www.w3schools.com/php/func_array_column.asp
 */
array_column($dados, 'nome');

/**
 * Array_map() - retorna uma array com valores que passaram por uma function.
 * https://www.w3schools.com/php/func_array_map.asp
 */
$dobro = array_map(function($value){
    return $value * 2;
}, $arrA);

print_r($dobro);

/** 
 *  https://www.w3schools.com/php/php_ref_array.asp
 *  
 *  array_combine($index, $valores) - cria uma array apartir de uma array de index e outra de valores. 
 *  array_merge() - cria uma nova array apartir de duas ou mais arrays
 *  array_pad() - define o tamanho e valores padrões de uma array  
 *  array_shift() - remove e retorna o primeiro valor de uma array. 
 *  array_unshift() - adiciona um novo valor na primeira posição de uma array.
 *  array_pop() - deleta o último elemento de uma array.
 *  array_unset() - remove valores da array, passamos um indice para saber qual valor apagar. 
 */


