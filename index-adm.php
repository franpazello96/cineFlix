<!DOCTYPE html>


<html lang="pt-br">
    <?php require_once 'conexao.php';?>
    <?php require_once 'link.php';?>
    <?php require_once 'menu-adm.php';?>
    <body>

        <!--Inicio Principal-->
        <section id="home" class="d-flex">

            <div class="container align-self-center">
                <div class="row">
                    <div class="col-md-12 capa">
                        <h1 >Filmes, séries e muito mais. Sem limites.</h1>
                        <h6 >Assista onde quiser. </h6>		
                    </div>
                </div>
            </div>
        </section>

        <!--Fim Principal-->
        <!--Inicio Conteudo-->
        <section id="conteudo">
            <div class="container">
                <div class="row">
           
                <div class="row albuns">
                  
                    <?php
$sql = "SELECT * FROM filme";
$run = mysqli_query($conn, $sql);
if (mysqli_num_rows($run) > 0) {
    while ($result = mysqli_fetch_assoc($run)) {
        echo '
        <div class="col-md-3">
                     <img src="' . $result['imagem'] . '" class="img-fluid d-none d-md-block">
                     <p style="color: white;"><strong style="color: darkred;">"' . $result['genero'] . '"</strong></p>
                     </div>';
    }
}
?>
</div>
                </div>
            </div>
        </section>

<?php require_once 'rodape.php'?>
<!---- JavaScript ----->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
