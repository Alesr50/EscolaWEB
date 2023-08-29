<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="css/form.css" rel="stylesheet" />


    <title>Cadastro de Turma</title>
</head>

<header>
    <?php include('../util/cabecalho.php');




    ?>
</header>
<div class="container">
    <form action="insereTurma.php" method="post">
        <p>Formulário de Cadastro de Turma</p>
        <div class="mb-3">
            <label class="form-label">Nome da turma</label>
            <input type="text" name="nomeTurma" id="nome" class="form-control" placeholder="Digite o nome da turma" required>
        </div>
       
        <div class="mb-3">
            <label class="form-label">Ano da turma</label>
            <input type="text" name="anoTurma" id="nome" class="form-control" placeholder="Digite o ano da turma" required>
        </div>
       
        <div>
        <button type="submit" id="button" class="btn btn-primary">Cadastrar</button>
                </div>
    </form>
</div>

</html>