<?php 

include("..\conexao\conexao.php");

function listaMaterias(){
   $pdo = conectar();
    $sql = "SELECT * FROM `tblmateria`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    $materias = array();
    
    while ($materia = $stmt->fetch(PDO::FETCH_ASSOC)) {   
        array_push($materias, $materia);
    }     
    return $materias;
}     


?>