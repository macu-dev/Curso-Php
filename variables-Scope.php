<!-- PHP variables can be declared anywhere in the script.
The scope of a variable is the part of the script in which the variable can be referenced or used.

PHP's most used variable scopes are local, global.
A variable declared outside a function has a global scope.
A variable declared within a function has a local scope, and can only be accessed within that function. -->

<?php
// $name = "david";

// function getName() {
//   echo $name;
// }

// getName();

//error

#The global Keyword
// The global keyword is used to access a global variable from within a function.
// To do this, use the global keyword within the function, prior to the variables.

//global var
$name = 'David';

function getName() {
  global $name;
  echo $name;
}

getName();

//output "david"
?>
