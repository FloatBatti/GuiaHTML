<?php

$name = 'Agustin';
$number = 123;
$boolean = true;
$boolean = "ok";

$personas = ["Agustin", "Juan"];

define('PI', 3.14);


function sumar($param1, $param2){

    return $param1 + $param2;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    
<body>
<?php

/* 

    Comentario multilinea

*/

// Se concatena con el punto .

echo count($personas);
echo("<br>");
echo "Mi nombre es: " . $name;
echo("<br>");
echo ("La suma es: " . sumar(3,$number));

?>
    
</body>
</html>