<?php

// DESAFIO:

//Crie um hashmap (ou um objeto simples em PHP) que contenha as funções elementares de adição, subtração, multiplicação e divisão.
//Leve em consideração que a divisão não deve permitir dividendo 0
//A função sum permite um array como parâmetro de entrada e adiciona todos os seus elementos.
//A função de subtração permite um array como parâmetro de entrada e subtrai todos os seus elementos.
//Função de multiplicação - Idem
//A função de divisão aceita dois parâmetros: a e b.

// SOLUÇÃO:

class algorithm2 {

    public function divide(int $a, int $b)
    {
        return ($a == 0 || $b == 0 ? "O valor dos parâmetros não podem ser 0" : ($a / $b));
    }

    public function sum(array $numbers): int
    {
        return array_reduce($numbers, function ($a, $b) {
            return $a + $b;
        });
    }

    public function sub(array $numbers)
    {
        $total = null;
        foreach ($numbers as $value){
            if (!$total){
                $total = $value;
                continue;
            }
            $total -= $value;
        }

        return $total;
    }

    public function multiply(array $numbers)
    {
        return array_reduce($numbers, function ($a, $b) {
            if ($a == 0) {
                return 1 * $b;
            }
            return $a * $b;
        }, 0);
    }
}

$test = new algorithm2();
$numbers = [10, 2];

print_r($test->sum($numbers));
print_r($test->sub($numbers));
print_r($test->multiply($numbers));
print_r($test->divide($numbers[0], $numbers[1]));

