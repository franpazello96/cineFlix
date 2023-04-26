
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
                <input type="text" id="titulo" class="form-control"  placeholder="Título">
            </div>
            <div class="form-group m-3">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" class="form-control"  placeholder="Descrição">
            </div>
            <div class="form-group m-3">
                <label for="genero">Gênero</label>
                <input type="text" id="genero" class="form-control"  placeholder="Gênero">
            </div>
            <div class="form-group m-3">
                <label for="diretor">Diretor</label>
                <input type="text" id="diretor" class="form-control"  placeholder="Diretor">
            </div>
            <div class="form-group m-3">
                <label for="ano">Ano</label>
                <input type="number" id="ano" class="form-control"  placeholder="Ano">
            </div>
            <div class="form-group m-3">
                <label for="duracao">Duração (Horas)</label>
                <input type="number" id="duracao" class="form-control"  placeholder="Duração">
            </div>
            <div style="padding-bottom: 5%; padding-left: 40%">
                <a href="index.php" class="btn btn-secondary">Cancelar</a>	
                <button type="submit" class="btn btn-primary ">Cadastrar</button>
            </div>
        </form>
        </div>
        </div>
    </div>
    <?php require_once 'rodape.php'?>
</body>
</html>
