<?php

// DESAFIO:

//Crie um algoritmo que gere o seguinte padrão de ID aleatório: XXXX-AAAA-BBBB-CCCC
//Onde os padrões XXXX, AAAA, BBBB e CCCC são alfanuméricos aleatórios
//O padrão é uma string: "XXXX-AAAA-BBBB-CCCC"
//O resultado deve ser armazenado em uma variável. Por exemplo:
//$id = generarId()
//id vale ~ abc1-bb12-234a-bcc2

// SOLUÇÃO:


function generarId(): string
{
    return sprintf("%04x-%04x-%04x-%04x", mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ));
}

$id = generarId();
print_r($id);



