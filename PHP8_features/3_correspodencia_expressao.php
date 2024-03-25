<?php

$busca = 21;

switch($busca){ //comparacao por igualdade (==)
    case '1':
        $retornoSwitch = 'encontrou o texto 1';
        break;
    case 2:
        $retornoSwitch = 'encontrou o número 2';
        break;
    default:
    $retornoSwitch = 'Não econtrou';
}

echo "resultado switch: " . $retornoSwitch;
echo "<hr>";

/*
$retornoMatch = match($busca){ //comparacao por indentidade (===)
    '1' => "econtrou o texto 1",
    1 => "encontrou o número 1",
    5, '8', 12, 'X' => "encontrou o valor 5 ou 12, ou os textos 8 ou X",
    default => "Não econtrou"
};

echo "resultado match: ". $retornoMatch;
*/

//match com condicionais e operações lógicas
$retornoMatch = match(true){
    $busca < 20 => "encontrou",
    $busca >= 20 && $busca <= 30 => 'Encontrou um valor maior que 20 e menor que 30',
    default => 'não econtrou'
};

echo "resultado match: ". $retornoMatch;
