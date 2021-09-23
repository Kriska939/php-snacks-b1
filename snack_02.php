<?php 

/* Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. */

// DATA

$students = [
    ['name' =>'Maria', 'lastname' => 'Bianchi', 'grades' => [
        10, 5, 8, 6],],
    ['name' =>'Carlo', 'lastname' => 'Verdi', 'grades' => [
        8, 5, 4, 3],],
    ['name' =>'Paola', 'lastname' => 'Rossi', 'grades' => [
        10, 10, 2, 6],],
    ['name' =>'Sandro', 'lastname' => 'Neri', 'grades' => [
            4, 4, 7, 9],],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <ul>
        <?php foreach($students as $student) {?>
            <li>
            <?php echo $student['name'] . '</br> '. $student['lastname']. '</br> '. ' Media dei voti: ' ?> 
            <?php echo $mean = ceil( array_sum($student['grades']) / 4 ) ?>
            </li>
            <?php }?>
    </ul>
    </body>
</html>
