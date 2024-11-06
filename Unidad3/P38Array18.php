<?php
/*P37Array17.php
Programa que almacena datos een un arreglo 
multidimensional y posterior mente inprime en 
diferentes posisiones 
Sanchez Burciaga Angel Gilberto
PROGRAMACION 1°A CBTIS89 TURNO MATUTINO */
$datos = array(
array(10,20,30),array(40,50,60),array(70,80,90));

echo "NORMAL";
echo "<br>";
for($i=0;$i<3;$i++)
{ for($j=0;$j<3;$j++)
{echo $datos[$i][$j]." ";}
echo "<br>";}

echo "FILAS A COLUMNAS ";
echo "<br>";
for($i=0;$i<3;$i++)
{ for($j=0;$j<3;$j++)
{echo $datos[$j][$i]." ";}
echo "<br>";}

echo "<br>columnas INVERTIDAS";
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 2; $j >= 0; $j--) { 
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>FILAS  INVERTIDAS";
echo "<br>";
for ($i = 2; $i >= 0; $i--) { 
    for ($j = 0; $j<3; $j++) { 
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>espejo ";
echo "<br>";
for ($i = 2; $i >= 0; $i--) { 
    for ($j = 2; $j >= 0; $j--) { 
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
?>