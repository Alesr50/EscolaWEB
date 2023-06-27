<?php

$nome=$_POST['nomeAluno'];
$cpf=$_POST['cpfAluno'];
$idade=$_POST['idadeAluno'];
include('banco-aluno');
insereAluno($nome,$cpf,$idade);

?>