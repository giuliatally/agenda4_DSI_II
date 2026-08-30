<?php

function verificarEstoque($quantidade) {
    if ($quantidade < 100) {
        return "Estoque baixo";
    } else {
        return "Estoque normal";
    }
}

function parImparRetorno($valor) {
    if ($valor % 2 == 0) {
        return "PAR";
    } else {
        return "IMPAR";
    }
}

$roupas = [
    "Camisetas" => 150,
    "Calças" => 80,
    "Saias" => 120,
    "Shorts" => 90,
    "Meias" => 199
];

echo "<h2>Estoque de Roupas</h2>";

foreach ($roupas as $produto => $quantidade) {
    echo "$produto: $quantidade unidades - " . verificarEstoque($quantidade) . "<br>";

    if ($produto == "Meias") {
        $resultado = parImparRetorno($quantidade);
        echo "Quantidade de meias: $resultado<br>";

        if ($resultado == "IMPAR") {
            echo "Doar meia sem par.<br>";
        }
    }
}

?>