<?php 
/* CBTIS 89
   Programa que almacena por medio  de un ciclo
   los numeros del 150 al 200 de la sigiente manera :
   en el $Arreglo1 van los numeros pares; en el $Arreglo2 von los numeros impares, en el $Arreglo3 van la suma de los numeros 
   correspondiente al mismo indice 
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino*/
$Arreglo1 = array(); // Para números pares
$Arreglo2 = array(); // Para números impares
$Arreglo3 = array(); // Para la suma de pares e impares en el mismo índice

for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i; 
    } else {
        $Arreglo2[] = $i; 
    }
}

for ($i =0; $i < count($Arreglo1);$i++){
    $Arreglo3[]= $Arreglo1[$i]+$Arreglo2[$i];
}

                echo "CBTIS89 <br>";
echo "Arreglo1--------Arreglo2----------Arreglo3<br>";
for ($i =0; $i < count($Arreglo1);$i++){
echo "$Arreglo1[$i]--------$Arreglo2[$i]----------$Arreglo3[$i]";
echo "<br>";
}
?>