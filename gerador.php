<?php

$arrayNomes = [
    "Batata",
    "Tomate",
    "Frango 600g",
    "Cebola",
    "Pimentão",
    "Vela",
    "Refrigerante 2L",
    "Repolho",
    "Alface",
    "Garfo",
    "Faca",
    "Prato"
];

$filename = "dados";
$csv_filename = $filename . "_" . date("Y-m-d_H-i", time()) . ".csv";

$conteudo = "Código, Descrição, Preço\n";
$dados = array();

for ($i = 0; $i < 10000; $i++) {
    $arrayItem = array();
    array_push($arrayItem, $i + 1);
    array_push($arrayItem, $arrayNomes[rand(0, 11)]);
    array_push($arrayItem, rand(0, 15) + 0.99);
    array_push($dados, $arrayItem);
}

foreach ($dados as $dado) {
    $linha = $dado[0] . "," . $dado[1] . "," . $dado[2] . "\n";
    $conteudo .= $linha;
}

$fd = fopen($csv_filename, "w");
fputs($fd, $conteudo);
fclose($fd);
?>