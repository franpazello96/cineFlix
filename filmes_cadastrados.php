
<?php   

require_once 'conexao.php';
require_once 'link.php';
require_once 'menu-adm.php';
 
// Set the default session name
$s_name = session_name();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
    // Last request was more than 1 second ago
    session_unset();     // Unset $_SESSION variable for the run-time
    session_destroy();   // Destroy session data in storage
    echo "Session expired at " .  gmdate("H:i:s", time()) .  "<br/>";
    echo '<meta http-equiv="refresh" content="1;url=index.php">';
    echo '<script>alert("Sessão expirada");</script>';
    exit();
}

$_SESSION['LAST_ACTIVITY'] = time(); // Update last activity timestamp
echo "Session created for $s_name, at " . gmdate("H:i:s", time()) .  "<br/>";

$query = "SELECT * FROM filme";  
$run = mysqli_query($conn, $query);  
?>


<!DOCTYPE html>
<html lang="pt-br">
    <body>

        <section id="conteudo">
            
            <div class="container mt-5 mb-5">

                <div  class="row">
                <div class="col-12 mt-5">            <?php
    if(isset($_GET['erro'])){
        $erro = $_GET['erro'];
        switch($erro){
            case 'conta-inativa':
                echo '<div class="alert alert-success" role="alert">Filme removido!</div>';
                break;
            default:
                break;
        }
    }
    ?></div>
                <h2 class="mt-5">TELA ADM:  </h2>    
                <table class="table table-hover table-bordered">
                    <thead class="table-danger">
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th>Genêro</th>
                                <th>Diretor</th>
                                <th>Ano</th>
                                <th>Duração</th>

                                <th>Link</th>
                                <th>Avaliação</th>
                                <th>Ações</th>
                            </tr>
                            <?php   
$i = 1;  
if ($num = mysqli_num_rows($run) > 0) {  
    while ($result = mysqli_fetch_assoc($run)) {  
        echo "<tr class='data'>  
            <td>".$i++."</td>  
            <td>".$result['titulo']."</td>  
            <td>".$result['descricao']."</td>  
            <td>".$result['genero']."</td> 
            <td>".$result['diretor']."</td> 
            <td>".$result['ano']."</td> 
            <td>".$result['duracao']."</td> 
            <td>".$result['link']."</td> 
            <td>".$result['avaliacao']."</td> 
            <td>
                <a href='excluir_filme.php?id=".$result['id']."' id='btn' class='btn btn-danger'>Excluir</a>
            </td>
        </tr>";  
    }  
}  
?>

                        </thead>
                        </tbody>
                        <tfoot class="table-danger">
                            <tr>
                            <th>ID</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th>Genêro</th>
                                <th>Diretor</th>
                                <th>Ano</th>
                                <th>Duração</th>
                           
                                <th>Link</th>
                                <th>Avaliação</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                 </table>
                </div>
            </div>
        </section>
        <!--Fim Outros-->
    <script src="https://kit.fontawesome.com/6ce6e892dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
