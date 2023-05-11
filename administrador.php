
<?php   
session_start();
require_once 'conexao.php';
require_once 'link.php';
require_once 'menu-adm.php';

 $query = "select * from usuario";  
 $run = mysqli_query($conn,$query);  
 ?>  


<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <!--Inicio Outros-->
        <section id="conteudo">
            <div class="container mt-5">
                <div  class="row">
                <h2 class="mt-5">TELA ADM:  </h2>    
                <table class="table table-hover table-bordered">
                    <thead class="table-danger">
                            <tr>
                                <th>ID</th>
                          
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Nivel</th>
                                <th>Situação</th>
                                <th>Ação</th>
                            </tr>
                            <?php   
                            $i=1;  
                            if ($num = mysqli_num_rows($run)>0) {  
                                while ($result = mysqli_fetch_assoc($run)) {  
                                    echo "  
                                        <tr class='data'>  
                                        <td>".$i++."</td>  
                                            <td>".$result['cidade']."</td>  
                                            <td>".$result['uf']."</td>  
                                            <td>".$result['email']."</td> 
                                            <td>".$result['telefone']."</td> 
                                            <td>".$result['nivel']."</td> 
                                            <td>".$result['situacao']."</td> 
                                            <td><a href='login-edita-adm.php?id=".$result['id']."' id='btn' class='btn btn-danger'>Editar</a> </td>  

                                            </tr>  
                                    ";  
                                }  
                             }  
                           ?>  
                        </thead>
                        </tbody>
                        <tfoot class="table-danger">
                            <tr>
                                <th>ID</th>
                                
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Nivel</th>
                                <th>Situação</th>
                                <th>Ação</th>
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
