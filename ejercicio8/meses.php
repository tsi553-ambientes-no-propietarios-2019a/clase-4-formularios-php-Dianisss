<!DOCTYPE html>
<html>
<head>
	<h1>Days Of Year</h1>
</head>
<body>

</body>
</html>


	$fecha = rand(1,365);
	$mes = 0;
	echo "Número: ".$fecha;
	echo "<br>";


	if($fecha <= 31){
			$mes = '01';
            echo '<p class="enero"</p>';
            echo "Mes: Enero<br>"; 
            echo "$mes <br>";
        }else if($fecha <= 59){
        	$mes = '02';
            echo '<p class="febrero"</p>';
            echo "Mes: Febrero<br>"; 
            echo "$mes <br>";      
        }else if($fecha <= 90){
        	$mes = '03';
            echo '<p class="marzo"</p>';
             echo "Mes: Marzo<br>";
             echo "$mes <br>";
        }else if($fecha <= 120){
        	$mes = '04';
            echo '<p class="abril"</p>';
             echo "Mes: Abril<br>";
            echo "$mes <br>";
        }else if($fecha <= 151){
        	$mes = '05';
            echo '<p class="mayo"</p>';
             echo "Mes: Mayo<br>";
            echo "$mes <br>";
        }else if($fecha <= 181){
        	$mes = '06';
            echo '<p class="junio"</p>';
             echo "Mes: Junio<br>";
            echo "$mes <br>";
        }else if($fecha <= 212){
        	$mes = '07';
            echo '<p class="julio"</p>';
             echo "Mes: Julio<br>";
            echo "$mes <br>";
        }else if($fecha <= 243){
        	$mes = '08';
            echo '<p class="agosto"</p>';
             echo "Mes: Agosto<br>";
            echo "$mes <br>";
        }else if($fecha <= 273){
        	$mes = '09';
            echo '<p class="septiembre"</p>';
        	echo "Mes: Septiembre<br>";
            echo "$mes <br>";
        }else if($fecha <= 304){
        	$mes = '10';
            echo '<p class="octubre"</p>';
        	echo "Mes: Octubre<br>";
            echo "$mes <br>";
        }else if($fecha <= 334){
        	$mes = '11';
            echo '<p class="noviembre"</p>';
        	echo "Mes: Noviembre<br>";
            echo "$mes <br>";
        }else if($fecha <= 365){
        	$mes = '12';
            echo '<p class="diciembre"</p>';
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