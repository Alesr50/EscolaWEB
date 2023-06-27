<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="css/form.css" rel="stylesheet" />


    <title>Cadastro de Alunos</title>
</head>

<header>
    <?php include('../util/cabecalho.php');

    ?>
                <script>
                    function buscarEndereco() {
                    const cep = document.getElementById('cep').value;

                    if (cep.length !== 8) {
                        alert('O CEP deve ter 8 dígitos.');
                        return;
                    }

                    fetch(`https://viacep.com.br/ws/${cep}/json/`)
                        .then(response => response.json())
                        .then(data => {
                        document.getElementById('log').value = data.logradouro;
                        document.getElementById('bairro').value = data.bairro;
                        document.getElementById('cidade').value = data.localidade;
                        document.getElementById('estado').value = data.uf;
                        })
                        .catch(error => console.log(error));
                    }
                    </script>

</header>
<div class="container">
    <form action="insereAluno.php" method="post">
        <p>Formulário de Cadastro de Alunos</p>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nomeAluno" id="nome" class="form-control" placeholder="Digite seu nome" required>
        </div>
        <div class="mb-3">
            <label class="form-label">CPF</label>
            <input type="text" name="cpfAluno" id="cpf" class="form-control" placeholder="Digite seu CPF" oninput="mascara(this)" maxlength="11" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Idade</label>
            <input type="number" name="idadeAluno" id="idade" class="form-control" placeholder="Digite a idade" min="1" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="cep">CEP</label>
            <input type="text" id="cep" name="cep" class="form-control-sm" required>
            <button type="button" onclick="buscarEndereco()">Buscar Endereço</button> <br>
      </div>
      
      <div class="mb-3" >
            <div class="row align-items-start">
                    <div class="col">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" id="log" name="log" class="form-control"  required>
                    </div >

                    <div class="col">
                        <label for="numero">Número</label>
                        <input type="text" id="num" name="num" class="form-control" required> 
                    </div>
                </div>
      </div>

   
                <div class="mb-3">
                <label for="cidade">Cidade</label>
      <input type="text" id="cidade" name="cidade" class="form-control" required>
                </div>


      <div class="mb-3">
         <label for="estado">Estado</label>
      <input type="text" id="estado" name="estado" class="form-control" required>
                </div>


      <div class="mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro"  class="form-control" required>
       <div>

      <div class="mb-3">
                <label for="complemento">Complemento</label>
                <input type="text" id="com" name="com" class="form-control">
      </div>
         

                <div class="mb-3">
                    <select class="form-control" name="idturma">
                    <option value="">Selecione a Turma</option>
                        <?php include("../turma/banco-turma.php");
                        $turmas = listaTurmas();
                        foreach ($turmas as $turma) : ?>
                            <option value="<?= $turma['idTurma'] ?>"><?= $turma['nome'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>       

        <div>
        <button type="submit" id="button" class="btn btn-primary">Cadastrar</button>
                </div>
    </form>
</div>

</html>