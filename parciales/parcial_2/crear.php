<?php
include('class/factorial.php');
$id = $_GET['id'] ?? null;
$n = $_POST['number'];



$ins = new factorial();


$factorial = $ins->obtenerfactorial($n);
$sumatoria = $ins->sumatoria($n);

// echo $factorial . '<br>';
// echo $sumatoria;



// if ($id = null) {
$ins->insert($n, $factorial, $sumatoria);
header("Location: formulario.php");
// }
