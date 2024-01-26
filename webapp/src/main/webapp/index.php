<?php
$numeros = [];
for ($i=1;$i<=100;$i++)
{
    $numeros[$i]= $i;
    print($numeros[$i]."\n");
}
$numerosPares = 0;
$numerosImpares = 0;
foreach ($numeros as $numero)
{
    if ($numero %2 == 0)
    {
        $numerosPares += $numero;
    }
    else
    {
        $numerosImpares += $numero;
    }
}
print("La suma de los números pares es de: ".$numerosPares."\n");
print("La suma de los números impares es de: ".$numerosImpares."\n");
?>
