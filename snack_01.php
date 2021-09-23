<?php 

/* SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina. */

$randomArray = [];

function randomNumber($array){
for ($i = 0; $i < 10; $i++) {
   return $array[] = rand(1,10);
}
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <p><?= randomNumber($randomArray);?></p>
</body>
</html>