<!DOCTYPE html>
<html lang="pt-br">
    <?php require_once 'conexao.php';?>
    <?php require_once 'link.php';?>
    <?php require_once 'menu-logado.php';?>
    <body>
        <section id="home" class="d-flex">
            <div class="container align-self-center">
                <div class="row">
                    <div class="col-md-12 capa">
                        <h1>Filmes, séries e muito mais. Sem limites.</h1>
                        <h6>Assista onde quiser.</h6>
                        <a href="filmes-favoritos.php" class="btn btn-azul btn-lg btn-custom">Favoritos.</a>
                        <a href="filmes-lista.php" class="btn btn-branco btn-lg btn-custom">BUSCAR FILME</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="conteudo">
    <div class="container">
        <div class="row albuns">
        <?php
$sql = "SELECT * FROM filme";
$result = mysqli_query($conn, $sql);

while ($filme = mysqli_fetch_assoc($result)) {
    echo '<div class="filmeBox col-12">
        <a href="assistir_filme.php?id=' . $filme['id'] . '">
            <img class="image" src="' . $filme['imagem'] . '" class="img-fluid d-none d-md-block">
        </a>
    </div>';
}
?>
        </div>
    </div>
</section>


        <?php require_once 'rodape.php'?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

<style>
.image {
    height: 270px;
    width: 200px;
    box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
}

.filmeBox {
    flex-direction: column;
    display: flex;
    align-items: center;
    margin: 15px 40px 10px;
    max-width: 200px;
}

.filmeBox span {
    color: white;
}
</style>
