<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/

?>

<!DOCTYPE html>
<html>
<head>
	<h1>Días del año</h1>
</head>
<body>

</body>
</html>

<?php 

	$fecha = rand(1,365);
	$mes = 0;
	echo "Número: ".$fecha;
	echo "<br>";


	if($fecha <= 31){
			$mes = '01';
            echo "Mes: Enero<br>"; 
            echo "$mes <br>";
        }else if($fecha <= 59){
        	$mes = '02';
            echo "Mes: Febrero<br>"; 
            echo "$mes <br>";      
        }else if($fecha <= 90){
        	$mes = '03';
             echo "Mes: Marzo<br>";
             echo "$mes <br>";
        }else if($fecha <= 120){
        	$mes = '04';
             echo "Mes: Abril<br>";
            echo "$mes <br>";
        }else if($fecha <= 151){
        	$mes = '05';
             echo "Mes: Mayo<br>";
            echo "$mes <br>";
        }else if($fecha <= 181){
        	$mes = '06';
             echo "Mes: Junio<br>";
            echo "$mes <br>";
        }else if($fecha <= 212){
        	$mes = '07';
             echo "Mes: Julio<br>";
            echo "$mes <br>";
        }else if($fecha <= 243){
        	$mes = '08';
             echo "Mes: Agosto<br>";
            echo "$mes <br>";
        }else if($fecha <= 273){
        	$mes = '09';
        	echo "Mes: Septiembre<br>";
            echo "$mes <br>";
        }else if($fecha <= 304){
        	$mes = '10';
        	echo "Mes: Octubre<br>";
            echo "$mes <br>";
        }else if($fecha <= 334){
        	$mes = '11';
        	echo "Mes: Noviembre<br>";
            echo "$mes <br>";
        }else if($fecha <= 365){
        	$mes = '12';
        	echo "Mes: Diciembre<br>";
            echo "$mes <br>";     
        }  
	 function dia($day) {
		$dia = array('Día: Domingo','Día: Lunes','Día: Martes','Día: Miercoles','Día: Jueves','Día: Viernes','Día: Sabado');
		$fecha = $dia[date('N', strtotime($day))];
		echo $fecha;
		}
		dia('2019-'.'$mes-'.'12');
?>