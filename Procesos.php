<?php 
$VALOR1=$_POST['N1'];
$VALOR2=$_POST['N2'];
$OPERACION=$_POST['OPERACION'];

if ($OPERACION == 'SUMA') {
	echo "LA SUMA ES: ".($VALOR1+$VALOR2);
}
if ($OPERACION == 'RESTA') {
	echo "LA RESTA ES: ".($VALOR1-$VALOR2);
}

?>