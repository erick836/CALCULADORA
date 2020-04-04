<?php 
$VALOR1=$_POST['N1'];
$VALOR2=$_POST['N2'];

$OPERACION=$_POST['OPERACION'];

if($OPERACION =='SUMA')
{
echo "La suma es:".($VALOR1+$VALOR2);
}
else if($OPERACION =='RESTA')
{
echo "La resta es:".($VALOR1-$VALOR2);
}
else if($OPERACION =='MULTIPLICACION')
{
echo "La multiplicacion es:".($VALOR1*$VALOR2);
}
else if($OPERACION =='DIVISION')
{
echo "La division es:".($VALOR1/$VALOR2);
}
?>