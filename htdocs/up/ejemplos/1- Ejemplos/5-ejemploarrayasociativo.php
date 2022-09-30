<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Ejemplo array asociativo</title>
</head>

<body>
<?php

$precios["TV"] = 700;
$precios["Telefono"] = 150;
$precios["Computadora"] = 1900;
echo "El precio de la computadora es: ";
echo $precios["Computadora"]; //Muestra '1900'

?>
<br/><br/>
<?php

$precios = array("TV"=>1500, "Telefono"=>150, "Computadora"=> 1900, 900);
echo "El precio de la computadora es: ";
echo $precios["Computadora"]; //Muestra '1900'
echo "<br><br>";

echo ($precios["TV"] + $precios["Telefono"]);
echo "<br><br>";
$precioFinal = $precios["TV"] + $precios["Telefono"];
echo "Precio final: " . $precioFinal;
$precios[] = 'Nuevo agregado';
$precios['Lavarropas'] = 9000;
$precios[] = 'nuevo agregado volumen 2';
print_r($precios);
?>
<br/><br/>
<?php

$un_array = array(4,8,15,16,23,42);
echo "El array contiene: ";
echo count($un_array); //Muestra 6
echo " números";

?>


</body>
</html>
