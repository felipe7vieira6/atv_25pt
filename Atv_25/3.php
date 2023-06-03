<?php
$peso = 70; // Peso em kg
$altura = 1.75; // Altura em metros

// Cálculo do IMC
$imc = $peso / ($altura * $altura);

echo "Peso: " . $peso . " kg<br>";
echo "Altura: " . $altura . " metros<br>";
echo "IMC: " . $imc . "<br>";
?>