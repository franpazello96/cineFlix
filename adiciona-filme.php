<?php
//require_once 'conexao.php';
//session_start();

$id = $_SESSION['id'];
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once 'link.php';?>
    <?php require_once 'menu.php';?>
    <link rel="stylesheet" href="css/layout.css" type="text/css">
</head>

<?php
    if (isset($_SESSION['id']))
    {
        $id = $_SESSION['id']; 
        $sql = "SELECT * FROM usuario WHERE id = '$id' "; 
        $resultado = $conn->query($sql);
        if($resultado->num_rows > 0){
            while($registro = $resultado->fetch_assoc()){  
    ?>
                <h5 style="font-size: 1em;" class="mt-4 text-left">Usuario: <?=$registro ["email"] ?></h5>
    <?php
        }
    }
}
?>

<body>
    <div class="content">
        <div class="container aling-self-center">
        <div style="padding-top: 15%;">
        <form method="POST" action="login_grava.php" name="login_grava" id="login_grava" class="col-md-12" style="background-color: #dbdbdb; border-radius: 30px;">
            <div class="form-group m-3" style="padding-top: 5%;">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" placeholder="Título">
            </div>
            <div class="form-group m-3">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" placeholder="Descrição">
            </div>
            <div class="form-group m-3">
                <label for="genero">Gênero</label>
                <input type="text" class="form-control" id="genero" placeholder="Gênero">
            </div>
            <div class="form-group m-3">
                <label for="diretor">Diretor</label>
                <input type="text" class="form-control" id="diretor" placeholder="Diretor">
            </div>
            <div class="form-group m-3">
                <label for="tipo">Tipo (Filme, Serie, etc...)</label>
                <input type="text" class="form-control" id="tipo" placeholder="Tipo">
            </div>
            <div class="form-group m-3">
                <label for="ano">Ano</label>
                <input type="number" class="form-control" id="ano" placeholder="Ano">
            </div>
            <div class="form-group m-3">
                <label for="duracao">Duração (Horas)</label>
                <input type="number" class="form-control" id="duracao" placeholder="Duração">
            </div>
            <div style="padding-bottom: 5%; padding-left: 40%">
                <a href="index.php" class="btn btn-secondary">Cancelar</a>	
                <button type="submit" class="btn btn-primary ">Cadastrar</button>
            </div>
        </form>
        </div>
        </div>
    </div>
</body>
</html>
