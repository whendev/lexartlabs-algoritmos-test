<?php

// DESAFIO:

//Crie um algoritmo que percorre uma array unidimensional contendo letras e números: [ “a”, 10, “b”, “hola”, 122, 15]
//Obtenha uma array contendo apenas as letras
//Obtenha uma array contendo apenas os números
//Obtenha o maior número da array acima

// SOLUÇÃO:

$array = ["a", 10, "b", "hola", 122, 15];

function algorithm(array $array)
{
    $onlyStr = [];
    $onlyNum = [];
    $higherNumber = 0;
    foreach ($array as $value){
        if (is_numeric($value)){
            $onlyNum[] = $value;
            $higherNumber = ($value > $higherNumber ? $value : $higherNumber);
            continue;
        }
        $onlyStr[] = $value;
    }
    print_r($onlyStr);
    print_r($onlyNum);
    print_r($higherNumber);
}

algorithm($array);

