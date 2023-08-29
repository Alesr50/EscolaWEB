<?php

$nome=$_POST['nomeAluno'];
$cpf=$_POST['cpfAluno'];
$idade=$_POST['idadeAluno'];
$cep=$_POST['cepAluno'];
$logra=$_POST['lograAluno'];
$num=$_POST['numAluno'];
$cidade=$_POST['cidadeAluno'];
$uf=$_POST['ufAluno'];
$bairro= $_POST['bairroAluno'];   
$compl=$_POST['complAluno'];
$idTurma=$_POST['idTurma'];

include('banco-aluno.php');
insereAluno($nome, $cpf, $idade, $cep, $logra, $num, $cidade, $uf, $bairro, $compl, $idTurma);

?>