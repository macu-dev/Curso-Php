
# Curso de PHP

![](https://cdn.iconscout.com/icon/free/png-256/php-27-226042.png)

**Contenidos**

- Sintaxis Básica
- Variables
- Operadores Aritmeticos
- Arreglos

# Sintaxis Básica

## Introducción a PHP
El preprocesador de hipertexto ( PHP ) es un lenguaje de programación de código abierto, gratuito y muy popular. Los scripts PHP se ejecutan en el servidor . Solo una breve lista de lo que PHP es capaz de hacer: - Generar contenido de página dinámico - Crear, abrir, leer, escribir, eliminar y cerrar archivos en el servidor - Recopilar datos de formularios - Agregar, eliminar y modificar información almacenada en su base de datos - controlando el acceso de los usuarios , encriptando datos , ¡y mucho más!

## Sintaxis PHP
Un script PHP comienza con `<?php `y termina con `?>`

    <?php
      echo "Hola Mundo";
    ?>

A continuación se muestra un ejemplo de un archivo PHP simple. El script PHP usa una función incorporada llamada ` echo` para generar el texto **"Hola mundo!"** a una página web.

    <!DOCTYPE html>
	<html>
	  <head>
	    <title>MI primera pagina con php </title>
	  </head>
		<body>
		  <?php echo "Hola Mundo";?>
		</body>
	</html>
	
## Echo
PHP tiene una función de `echo` incorporada, que se utiliza para generar texto.
En realidad, no es una función; es una **construcción del lenguaje** . Como tal, no requiere paréntesis. **Imprimamos un texto**.

    <? php echo "me encanta php"; ?>

## Declaraciones PHP
Cada declaración de PHP debe terminar con un punto y coma `;`

	<?php
      echo "A";
	  echo "B";
	  echo "C";
    ?>
## Comentarios
En el código PHP, un **comentario** es una línea que no se ejecuta como parte del programa. Puede utilizar los comentarios para comunicarse con los demás para que comprendan lo que está haciendo o como un recordatorio de lo que hizo. Un comentario de una** sola línea** comienza con `//`:

	<?php
    //echo "A";
	  echo "B";
	  echo "C";
    ?>

## Comentarios de varias líneas
Los comentarios de varias líneas se utilizan para redactar comentarios que ocupan más de una línea. Un comentario de una sola línea comienza con `//`:
Un comentario de varias líneas comienza con `/ *` y termina con`* /`.

	<?php
    /*echo "A";
	 echo "B";
	 echo "C";*/
    ?>


# Variables
## Variables
Las variables se utilizan como** "contenedores"** en los que almacenamos información.
Una variable PHP comienza con un signo de dólar `$`, seguido del nombre de la variable.

`$ nombre_variable = valor;`

Reglas para variables de PHP:
- El nombre de una variable debe comenzar con una letra o un guión bajo
- El nombre de una variable no puede comenzar con un número
- El nombre de una variable solo puede contener caracteres alfanuméricos y guiones bajos (Az, 0-9 y _)
- Los nombres de las variables distinguen entre mayúsculas y minúsculas ($ name y $ NAME serían dos variables diferentes) **Por ejemplo:**


	  <?php
        $nombre = 'Juan';
	    $edad = 25;
	    echo "$nombre;
	   //output: Juan
      ?>

En el ejemplo anterior, observe que no tuvimos que decirle a PHP qué tipo de datos es la variable.
PHP convierte automáticamente la variable al tipo de datos correcto, según su valor.

## Constantes
Las** constantes** son similares a las variables, excepto que no se pueden cambiar o dejar de definir una vez definidas.
Empiece el nombre de su constante con una letra o un guión bajo.
Para crear una constante, use la función` define () `:

`define (nombre, valor, no distingue entre mayúsculas y minúsculas)`

Parámetros:
**nombre :** especifica el nombre de la constante;
**valor **: especifica el valor de la constante;
**no distingue entre mayúsculas y minúscula**s : especifica si el nombre de la constante no debe distinguir entre mayúsculas y minúsculas. El valor predeterminado es falso; El siguiente ejemplo crea una constante con un nombre que distingue entre mayúsculas y minúsculas :

	<? php
      define("NOMBRE", Macu);
	  echo NOMBRE;
    //output: Macu
	?>
	

El siguiente ejemplo crea una constante con un nombre que **no distingue entre mayúsculas y minúsculas** :

	<? php
      define("NOMBRE", Macu, true);
	  echo nombre;
     //output: Macu
	?>
	


## Tipos de datos
Las variables pueden almacenar una variedad de tipos de datos.
Tipos de datos soportados por PHP: **String , Integer , Float , Boolean , Array , Object , NULL, Resource.**

### Cadena PHP

Una **cadena **es una secuencia de caracteres, como "¡Hola mundo!"
Una cadena puede ser cualquier texto dentro de un conjunto de **comillas** simples o dobles .

	<? php
 	  $ string1 = "¡Hola mundo!"; // comillas dobles
 	  $ string2 = '¡Hola mundo!'; // comillas simples
	?>
> Puede unir dos cadenas mediante el operador de concatenación de punto (.). Por ejemplo:` echo $ s1. $ s2`

### Entero PHP

Un **entero** es un número entero (sin decimales) que debe cumplir con los siguientes criterios:
- No puede contener comas ni espacios en blanco
- No debe tener punto decimal
- Puede ser positivo o negativo


	  <? php
	    $ int1 = 42; // número positivo
 	    $ int2 = -42; // número negativo
	  ?>

>Las variables pueden almacenar una variedad de tipos de datos.

### PHP flotante
Un** flotador** , o número de punto flotante, es un número que incluye un punto decimal.

	<? php
 	  $ x = 42.168;
	?>

## PHP booleano
Un **booleano** representa dos estados posibles: **VERDADERO** o **FALSO**. simples o dobles

	<? php
  	  $ x = verdadero; 
	  $ y = falso;
	?>

La mayoría de los tipos de datos se pueden utilizar en combinación entre sí. En este ejemplo, la **cadena **y el** entero** se juntan para determinar la suma de dos números.

	<? php
  	  $ str = "10"; 
	  $ int = 20;
	  $suma = $ str + $ int;
	  echo $ str + $ int;
	  echo $ suma //30
	?>

PHP convierte automáticamente cada variable al tipo de datos correcto, de acuerdo con su valor. Es por eso que la variable **$ str** se trata como un número en la suma.


