        
        <section id="conteudo">
    <div class="container">
        <div class="row">
            <form action="" method="POST" class="col-md-12 mt-3 mt-sm-5">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control" name="buscar" id="buscar" value="<?php if (isset($_POST['buscar'])) echo $_POST['buscar'] ?>" placeholder="Digite o nome da empresa" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="submit" class="btn btn-danger">Pesquisar</button>
                </div>
            </form>

            <div class="row albuns">
                <?php
                // Verifica se o formulário foi enviado
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Obtém o valor digitado no campo de busca
                    $termoBusca = $_POST['buscar'];

                    // Constrói a consulta SQL com o filtro de busca
                    $sql = "SELECT * FROM filme WHERE titulo LIKE '%$termoBusca%'";

                    // Executa a consulta e exibe os resultados
                    $run = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($run) > 0) {
                        while ($result = mysqli_fetch_assoc($run)) {
                            echo '
                            <div class="col-md-3">
                                <img src="' . $result['imagem'] . '" class="img-fluid d-none d-md-block">
                                <p style="color: white;"><strong style="color: darkred;">"' . $result['genero'] . '"</strong></p>
                            </div>';
                        }
                    } else {
                        echo "Nenhum resultado encontrado.";
                    }
                } else {
                    // Consulta padrão quando o formulário ainda não foi enviado
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
                }
                ?>
            </div>
        </div>
    </div>
</section>