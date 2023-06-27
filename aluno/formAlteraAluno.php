<?php include("..\util\cabecalho.php");
     include("banco-aluno.php");
$id = $_GET['id'];
$aluno= buscaAluno( $id);



// session_cache_expire(1);
// session_start();

//if ( !isset($_SESSION['usuario'])  ) {
    //Destrói
    //session_destroy();
    
    //Limpa
    //unset ($_SESSION['usuario']);
    //  unset ($_SESSION['senha']);
    
    //Redireciona para a página de autenticação
    //header('location:../util/login.html');
  //  }
?>

<h1>Alterando produto</h1>
<form action="alteraAluno.php" method="post">
    <input type="hidden" name="id_aluno" value="<?=$aluno['idAluno']?>" />
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome_aluno" value="<?=$aluno['NomeAluno']?>" /></td>
        </tr>
        <tr>
            <td>CPF</td>
            <td><input class="form-control" type="text" name="cpfAluno" value="<?=$aluno['CpfAluno']?>" /></td>
        </tr>
        <tr>
            <td>Idade</td>
            <td><input class="form-control" type="text" name="idade" value="<?=$aluno['IdadeAluno']?>" /></td>
        </tr> 
        <tr>    
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

