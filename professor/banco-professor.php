<?php
include("..\conexao\conexao.php");

function listarProfessores(){
   $pdo = conectar();
    $sql = "SELECT * FROM `tblprofessor`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    $professores = array();
    
    while ($professor = $stmt->fetch(PDO::FETCH_ASSOC)) {   
        array_push($professores, $professor);
    }     
    return $professores;
}  

function insereProfessor( $nome, $cpf,$idade) {
    $pdo = conectar();    
    $query = "insert into tblalunos (nome_aluno, cpfaluno,data_nascimento)
        values (?,?,?,?)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $cpf);
$stmt->bindParam(3, $idade);

if ($stmt->execute()) {
  echo "Registro Cadastrado";
  header("Location:listarAlunos.php");
}
}

function alteraAluno($nome,$cpf,$idade,$id){
$pdo=conectar();
$query= "UPDATE `tblalunos` SET `nome_aluno`='?',`cpfAluno`='?',`data_nascimento`='?' WHERE id_aluno=?";
$stmt= $pdo->prepare($query);
$stmt->bindParam(1,$nome);
$stmt->bindParam(2, $cpf);
$stmt->bindParam(3, $idade);
$stmt->bindParam(4, $id);

if ($stmt->execute()) {
    echo "Registro Cadastrado";
    header("Location:listarAlunos.php");
  }

}


function removerAluno($id){
    $pdo=conectar();
    $query="UPDATE tblalunos SET 'ativo'=0 WHERE id_aluno=?";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $id);

    
if ($stmt->execute()) {
    echo "Registro Cadastrado";
    header("Location:listarAlunos.php");
  }
}

function buscaAluno( $id) {
    $pdo = conectar();     
    $sql = "select * from tblalunos where id_aluno = {$id}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(); 
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>