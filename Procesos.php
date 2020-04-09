<?php 
$VALOR1=$_POST['N1'];
$VALOR2=$_POST['N2'];
$OPERACION=$_POST['OPERACION'];
$RESULTADO;
 
if ($OPERACION == 'SUMA')
{
	$RESULTADO=($VALOR1+$VALOR2);
}
if ($OPERACION == 'RESTA') 
{
    $RESULTADO=($VALOR1-$VALOR2);
}
if ($OPERACION == 'MULTIPLICACION')
{
   $RESULTADO=($VALOR1*$VALOR2);
}
if ($OPERACION == 'DIVISION')
{
   $RESULTADO=($VALOR1/$VALOR2);
}
?>

<html>
  
  <head>
   <link rel="stylesheet" type="text/css" href="Estilos.css" />
  </head>

  <body>
   <header>
          <div align="center" id="RESULTADO">
              <h1> RESULTADO </h1>
          </div>
   </header>

   <section>
          <div align="center" id="MOSTRAR">
              <p><?php echo $RESULTADO; ?> </p>
          </div>
   </section> 
  </body>
</html>







