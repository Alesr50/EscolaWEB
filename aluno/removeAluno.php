<?php   
      include("banco-aluno.php");
$id = $_POST['id'];
removerAluno($id);
die();
?>
