<?php

$nome=$_POST['nomeTurma'];
$ano=$_POST['anoTurma'];

include('banco-turma.php');
insereTurma($nome,$ano);

?>