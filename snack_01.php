<?php 

/* SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina. */

$randomArray = [];

for ($i = 0; $i < 10; $i++) {
     $randomNumber = rand(1,10);

     array_push($randomArray, $randomNumber);
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
    <p> Array di valori randomici:
<?php
 foreach ($randomArray as $n) {
    echo $n, "\n";
}
?>
    </p>
</body>
</html>