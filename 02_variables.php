<?php
/* ----------- PHP Data Types ----------- */
/*  
- String    Series of characters surrounded by quotes
- Integer   Whole numbers
- Float     Decimal numbers
- Boolean   true or false
- Array     Special variables, which can hold more that one value.
- Object    A class
- NULL      Empty variable.
- Resource  Special variable that holds a resource.
*/

/* ----------- PHP ----------- */
/*  
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character.
- Variables can't start with a number.
- Variables can only contain alpha-numberic characters and underscore (A-z, 0-9, and _)
- Varaibles are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Tomás'; // String
$age = 43; // Int
$hasKids = true; // Boolean
$cash_on_hand = 20.75; 


// echo $name;
// echo $age;
// var_dump($hasKids);
// var_dump($cash_on_hand);

// echo $name . ' is ' . $age . ' years old.';

// echo "${name} is ${age} years old";

// echo 5 + 5;
// echo '5' + '5';

// $additionFive = '5' + '5';

// var_dump($additionFive);

// echo 3 + 2;
// echo 10 - 5;
// echo 5 * 1;
// echo 25 / 5;
// echo 21 % 8;

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;



