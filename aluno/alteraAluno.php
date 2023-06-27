<?php

$nome=$_POST['nome_aluno'];
$cpf=$_POST['cpfAluno'];
$idade=$_POST['idade'];
$id = $_POST['id_aluno'];
include('banco-aluno.php');
alteraAluno($nome,$cpf,$idade,$id);

?>