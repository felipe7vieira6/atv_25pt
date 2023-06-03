<?php
$soma = 0;

for ($numero = 10; $numero <= 500; $numero++) {
    if ($numero % 2 == 0) {
        $soma += $numero;
    }
}

echo "A soma dos números pares de 10 a 500 é: " . $soma;
?>