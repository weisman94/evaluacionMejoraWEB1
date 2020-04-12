<?php
echo "<br><b>Punto 1</b>";
echo "<br><br>Hacer un programa en PHP que permita calcular el salario mensual de un empleado que cobra $35000 por hora y trabaja 40 horas a la semana, tenga en cuenta que se hace un descuento del 8% para seguridad social al sueldo base, a demás de una deducción de $250000 para una deuda que este tiene con una entidad bancaria. <br>";

$horas=40;
$valorHora=35000;
$deduccionB= 250000;

$total= $horas * $valorHora;
$porcentaje= $total*8/100;
$totalD= $porcentaje + $deduccionB;
$totalN= $total - $totalD;

echo "<br> <b> La cantidad de horas trabajadas son: </b>". 40;
echo "<br> <b> Cada hora tiene un Valor de: </b>". $valorHora;
echo "<br> <b> La deduccion de salario por prestamos es: </b>". $deduccionB;
echo "<br> <b> El 8 porceiento de seguridad social descontado es: </b>". $porcentaje;
echo "<br> <b> El salario Bruto es: </b>". $total;
echo "<br> <b> El total Pagado es: </b>". $totalN;

/* ----------------------------------------------------------------------------------------------*/

echo "<br><br><br>";
echo "<br><b>Punto 2</b>";
echo "<br><br>El ministerio de salud necesita un programa en PHP que permita regular el riesgo de una persona a contraer coronavirus, para ello considera el número de contactos que la persona sostiene en un día guardando la relación: <br>

•Número de Contactos <= 10 : Bajo Riesgo <br>
•10 Número de Contactos<=15: Riego Moderado <br>
•Número de contactos >15: Riesgo alto <br>";

$contacto= 6;

if ($contacto<=10) {
	echo "<br><br>Numero de contactos: ". $contacto;
	echo "<br>Nivel de Riesgo: Bajo Riesgo";
}if ($contacto >10 and $contacto <= 15) {
	echo "<br><br>Numero de contactos: ". $contacto;
	echo "<br>Nivel de Riesgo: Riesgo Moderado";
}if ($contacto > 15) {
	echo "<br><br>Numero de contactos: ". $contacto;
	echo "<br>Nivel de Riesgo: Riesgo Alto";
}else{
	
}
/* ----------------------------------------------------------------------------------------------*/

echo "<br><br><br>";
echo "<br><b>Punto 3</b>";
echo "<br><br>Hacer un programa en PHP para la tienda D1 que permita almacenar en 3 arreglos asociativos (Enlatados, frutas, aseo) información de 5 productos de cada categoría. Muestre en pantalla toda la información almacenada en los 3 arreglos y asigne las claves que usted desee a cada elemento. <br><br>";

echo "Los productos en la tienda D1 son: <br><br>";

$enlatado=array("productos"=>"Frijoles","productos1"=>"Ensalada","productos2"=>"Atun","productos3"=>"Maiz","productos4"=>"Sardina");
$fruta=array("productos"=>"Mora","productos1"=>"Manzana","productos2"=>"Piña","productos3"=>"Sandia","productos4"=>"Banano");
$aseo=array("productos"=>"Escoba","productos1"=>"trapera","productos2"=>"jabon","productos3"=>"limpido","productos4"=>"colgate");

print_r($enlatado);
echo "<br>";
print_r($fruta);
echo "<br>";
print_r($aseo);



/* ----------------------------------------------------------------------------------------------*/

echo "<br><br><br>";
echo "<br><b>Punto 4</b>";
echo "<br><br>Definir y probar una función en PHP que permita calcular el área de los siguientes triángulos: <br>
•Triangulo 1: Altura= 30cm Base=60cm <br>
•Triangulo 2: Altura= 25cm Base=25cm <br>";


function triangulo($base1,$altura1){
	$area=$base1*$altura1/2;
	return $area;
}
echo "<br>";
echo "el area del triangulo #1 es ".triangulo(60,30)." Cm<br>";
echo "el area del triangulo #2 es ".triangulo(25,25)." Cm<br>";


/* ----------------------------------------------------------------------------------------------*/

echo "<br><br><br>";
echo "<br><b>Punto 5</b>";
echo "<br><br>Bancafé contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar información de nombre, teléfono, dirección, email y salario de 5 usuarios de una sucursal llamada sucursal A. Utilice un arreglo multidimensional para almacenar esta información y preséntela en pantalla utilizando ciclos foreach. <br>";



?>

<?php


$SucursalA[]=array("nombre"=>"Carlos Navales","telefono"=>"234542","direccion"=>"Calle 15 # 4","email"=>"car@gmail.com","salario"=>2500000);
$SucursalA[]=array("nombre"=>"Jose Cardenas","telefono"=>"3445434","direccion"=>"calle 43 # 2","email"=>"joc@gmail.com","salario"=>938000);
$SucursalA[]=array("nombre"=>"Andres Osorio","telefono"=>"234323","direccion"=>"calle 45 # 6","email"=>"ano@gmail.com","salario"=>1200000);
$SucursalA[]=array("nombre"=>"Carolina Manco","telefono"=>"354564","direccion"=>"calle 21 # 3","email"=>"CaM@gmail.com","salario"=>1000000);
$SucursalA[]=array("nombre"=>"Juan Gallego","telefono"=>"23543","direccion"=>"calle 33 # 1","email"=>"h¡juang@gmail.com","salario"=>1400000);

foreach ($SucursalA as $clavearreglosucursal => $arreglosucursal) {
	echo ($clavearreglosucursal."<br>");
	foreach ($arreglosucursal as $key => $value) {
		echo ($value)."<br>";
	}
}
echo "<br>";

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>evaluacionMejoraWEB1 </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<h1 align="center">Listado Empleados Bancafe</h1>

<div class="container">
		<div class="row"> 
				<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>nombre</th>
						<th>telefono</th>
						<th>direccion</th>
						<th>email</th>
						<th>salario</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($SucursalA as $fila){?>
						<tr>
							<td><?php echo $fila["nombre"]?></td>
							<td><?php echo $fila["telefono"]?></td>
							<td><?php echo $fila["direccion"]?></td>
							<td><?php echo $fila["email"]?></td>
							<td><?php echo $fila["salario"]?></td>
						</tr>
					<?php } ?>
				</tbody>
				</table>
		</div>
</div>
</body>
</html>






