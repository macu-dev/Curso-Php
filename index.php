<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
//PHP se considera un lenguaje interpretado, recibe el codigo, necesitas instalar em tu pc el interprete de php, (ngnx o apache), lenguaje multiplataforma (windows,mac,linux)
//no es recomendable usar PHp para app de escritorio (pero si se puede), xampp es un entorno para desarrollo de aplicaciones no para produccion
//php procesa instrucciones para que html cree las cosas que debe de crear, php nos permite ejecutar codigo html
/*comentario multilinea*/
#comentario con hash
//echo funcion para escribir codigo
  print("<h1>HOLA MUNDO PHP <br></h1>");
  echo "<h2>TITULO CON PHP PERO CON ECHO</h2>"; 
?>
<body>

<!-- se puede agregar distintos bloques de PHP -->

<?php
  echo "<p>Lorem ipsum dolor sit am</p>"
?>

  
</body>
</html>