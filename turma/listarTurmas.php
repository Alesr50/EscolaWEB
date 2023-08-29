<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/form.css" rel="stylesheet" />
    <link href="css/css/bootstrap.css" rel="stylesheet" />
    <title>Listagem de Turmas</title>
</head>
<?php
//include do script que realizaççao as ações como banco  
     include("banco-turma.php"); 
      

// session_cache_expire(1);
//session_start();

//if ( !isset($_SESSION['usuario'])  ) {
    //Destrói
   // session_destroy();
    
    //Limpa
   // unset ($_SESSION['usuario']);
    //  unset ($_SESSION['senha']);
    
    //Redireciona para a página de autenticação
   // header('location:../util/login.html');
   // }
      ?>
      
<body>
<header>
    <!-- Include do cabeçalho , onde está o header do sistema-->
    <?php include('../util/cabecalho.php')?> 
</header>
<table class="table table-striped table-bordered">
    <?php
        //Array, vetor...matriz, com os dados vindo do banco de dados;
        //Aqui foi usado o foreach($array,$linhadoarray ), para percorrer o array, 
        $turmas = listarTurmas();
        foreach($turmas as $turma) :
        /*$aluno é cada item da array ($alunos); Se usa $linhadoarray['campodobancodedados'] , caso seja usado algum dado de banco
            para ser utilizado para ser passado como parametro , é concatenado junto com o html
        */
    ?> 
        <tr>
        <td><?= $turma['nomeTurma'] ?></td> 
        <td><?= $turma['anoTurma'] ?></td>
        <td><a class="btn btn-primary" href="formAlteraAluno.php?id=<?=$aluno['idAluno']?>">alterar</a></td>
        <td>
            <form action="removeAluno.php" method="post">
                <input type="hidden" name="id" value="<?=$turma['idTurma']?>" />
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>
</body>
</html>