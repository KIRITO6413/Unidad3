<?php 
/* CBTIS 89
   Programa que almacena informacion de 6 personas y de pendiendo de su edad los sigientes condiciones:
   si la persona es menor de 18 años se debe colocar un 1 en el <rreglo $Grupo1 y y en los otros un 0 .
   si la persona tine entre 18 y 49 años se debe colocar un 1 en el arregflo $GRupo2 y en los otros dos colocar un 0 .
   si la persona tine 50 años o mas se debe colocar un 1 en el arreglo $Grupo3, y en los otros 2 un 0.
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$Nombres = array("Paco","mari","lalo","rosi","paty","beto");

$edades = array(17,30,71,38,12,58);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();
echo "NOMBRE---","Edad---","Grupo1---","Grupo2---","Grupo3<br>";

for($i=0; $i< count($edades);$i++)
{
	if ($edades[$i] < 18 ){
		$Grupo1[]=1;
	    $Grupo2[]=0;
	    $Grupo3[]=0;
       } 


else if ($edades[$i] >= 18 && $edades[$i] <= 49) {
    $Grupo1[]=0;
	$Grupo2[]=1;
	$Grupo3[]=0;
}

else {
	$Grupo1[]=0;
	$Grupo2[]=0;
	$Grupo3[]=1;
}
}	

for ($i = 0; $i < count($Nombres); $i++) {
  
    echo   $Nombres[$i] ;
    echo  "---".$edades[$i] ;
    echo  "---".$Grupo1[$i] ;
    echo  "---".$Grupo2[$i] ;
    echo  "---".$Grupo3[$i] ;
    echo "<br>";
}
?>
