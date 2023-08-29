<?php
     include("..\conexao\conexao.php");
     function listarAlunos(){
        $pdo = conectar();
         $sql = "SELECT * FROM `tblalunos`";
             $stmt = $pdo->prepare($sql);
             $stmt->execute();
         $alunos = array();
         
         while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {   
             array_push($alunos, $aluno);
         }     
         return $alunos;
     }     

function insereAluno($NomeAluno, $CpfAluno, $IdadeAluno, $cepAluno, $lograAluno, $numAluno, $cidadeAluno, $ufAluno, $bairroAluno, $complAluno, $idTurma) {
    $pdo = conectar();    
    $query = "insert into tblalunos (NomeAluno, CpfAluno, IdadeAluno, cepAluno, lograAluno, numAluno, cidadeAluno, ufAluno, bairroAluno, complAluno, idTurma)
        values (?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(1, $NomeAluno);
$stmt->bindParam(2, $CpfAluno);
$stmt->bindParam(3, $IdadeAluno);
$stmt->bindParam(4, $cepAluno);
$stmt->bindParam(5, $lograAluno);
$stmt->bindParam(6, $numAluno);
$stmt->bindParam(7, $cidadeAluno);
$stmt->bindParam(8, $ufAluno);
$stmt->bindParam(9, $bairroAluno);
$stmt->bindParam(10, $complAluno);
$stmt->bindParam(11, $idTurma);





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
    $sql = "select * from tblalunos where idAluno = {$id}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(); 
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


?>