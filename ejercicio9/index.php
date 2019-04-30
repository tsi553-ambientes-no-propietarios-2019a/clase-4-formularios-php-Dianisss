<?php
/*
- Escribir una página en PHP que presente un calendario del mes actual.
- Utlizar HTML y CSS para darle color y estilo al calendario. El día actual debe ser resaltado en negrita y con la celda de diferente color.
- Pista: utilizar la función date(). Entre otros parámetros la función date puede recibir: ‘Y’, ‘m’, ‘d’, ‘N’. Investigar sobre la función date si es necesario utilizar otros parámetros (http://php.net/manual/es/function.date.php).
- Pista: Utilizar tablas HTML para presentar el calendario.
*/
?>

<?php

$mes =
[
    [
        'L' => 'Lu',
        'M' => 'Ma',
        'Mi' => 'Mi',
        'J' => 'Ju',
        'V' => 'Vi',
        'S' => 'Sa',
        'D' => 'Do',
    ],
    
    [
        'Lunes' => '1',
        'Martes' => '2',
        'Miercoles' => '3',
        'Jueves' => '4',
        'Viernes' => '5',
        'Sabado' => '6',
        'Domingo' => '7',
    ],
    [
        'Lunes' => '8',
        'Martes' => '9',
        'Miercoles' => '10',
        'Jueves' => '11',
        'Viernes' => '12',
        'Sabado' => '13',
        'Domingo' => '14',
    ],
    [
        'Lunes' => '15',
        'Martes' => '16',
        'Miercoles' => '17',
        'Jueves' => '18',
        'Viernes' => '19',
        'Sabado' => '20',
        'Domingo' => '21',
    ],
    [
        'Lunes' => '22',
        'Martes' => '23',
        'Miercoles' => '24',
        'Jueves' => '25',
        'Viernes' => '26',
        'Sabado' => '27',
        'Domingo' => '28',
    ],
    [
        'Lunes' => '29',
        'Martes' => '30',
    ]
];
?>

<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Dias del año</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
 
<body>

    <div class = "container">
        <h1 class = 'page-header'>Mes de Abril</h1>
        
        
        <table border = "1">

        <?php
        foreach($mes as $d)
        {
        ?>
        <tr>
        <?php
            foreach($d as $dia)
            {
            ?>
                
                <td><?php echo $dia;?> </td>
                
            <?php
                if($dia==date("d"))
                {
            ?>
                <td bgcolor="pink"><b> <?php echo $dia;?></b></td>
            <?php
                }
            }
            ?>
        </tr>
        <?php
        }    
        ?>
        </table>    
    </div>


</body>
</html>
