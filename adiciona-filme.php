
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once 'link.php';?>
    <?php require_once 'menu.php';?>
    <link rel="stylesheet" href="css/layout.css" type="text/css">
</head>

<body>
    <div class="content">
        <div class="container aling-self-center">
        <div style="padding-top: 15%;">
        <form method="POST" action="adiciona-filme-grava.php" name="adiciona-filme-grava" id="adiciona-filme-grava" class="col-md-12" style="background-color: #dbdbdb; border-radius: 30px;">
            <div class="form-group m-3" style="padding-top: 5%;">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título" required>
            </div>
            <div class="form-group m-3">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" class="form-control" name="descricao" placeholder="Descrição" required>
            </div>
            <div class="form-group m-3">
                <label for="genero">Gênero</label>
                <input type="text" id="genero" class="form-control" name="genero" placeholder="Gênero" required>
            </div>
            <div class="form-group m-3">
                <label for="diretor">Diretor</label>
                <input type="text" id="diretor" class="form-control" name="diretor" placeholder="Diretor" required>
            </div>
            <div class="form-group m-3">
                <label for="ano">Ano</label>
                <input type="number" id="ano" class="form-control" name="ano" placeholder="Ano" required>
            </div>
            <div class="form-group m-3">
                <label for="duracao">Duração (Horas)</label>
                <input type="number" id="duracao" class="form-control" name="duracao" placeholder="Duração" required>
            </div>
            <div style="padding-bottom: 5%; padding-left: 40%">
                <a href="index.php" class="btn btn-secondary">Cancelar</a>	
                <button type="submit" onclick="validaAno()" class="btn btn-primary ">Cadastrar</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    <?php require_once 'rodape.php'?>
</body>
<script>
    function validaAno(){
        const anoAtual = new Date().getFullYear();
        const ano = document.getElementById("ano").value;

        if(ano < 1900 || ano > anoAtual){
            document.getElementById("ano").value = null;
            alert("Ano invalido");
        }

    }
</script>
</html>
