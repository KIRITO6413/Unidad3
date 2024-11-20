<?php 
/*Programa que almacena  el nombres de cuatro personas en un arreglo $Alumnos y otro arreglo multidimencional llamado $Calificasiones almacena las calificasiones de cada uno de ellos por medio de filas y columnas 
Deves calcular por medio de ciclos el promedio de cada alumno y guardarlo en el arreglo $Promedio de igual manera eb el arreglo $Status debes almacenar la palabra Aprobado o Repobado segin carresponda */
$Alumnos = array("luz","fer","ian","ale");
$Calificasiones=array(
    array(6, 4, 5),
    array(7, 9, 8),
    array(7, 9, 5),
    array(5, 4, 6)
);

   

  


echo "Calificasiones ";
echo "<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $Calificasiones[$i][$j] . " ";
    }
    echo "<br>";
}

