<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once 'link.php';?>
    <?php require_once 'menu.php';?>
</head>
<body>

    <section id="login" >
          <div class="container aling-self-center"> 
            <div class="row">
                <div class="col-md-12">
                <img src="imagens/perfil.png"  witdh="15%" height="15%" class="imagem mt-5"> 
                         <form action="valida_login_recupera.php" method="POST" name="valida_login" id="valida_login">
                            <div class="form-group m-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail:" required>
                            </div>
                            <div class="form-group m-3">
                                <input type="password" class="form-control mb-2"   name="senha" id="senha" placeholder="Senha:" required>
                               
                            </div>
                            <div>
                                <a href="index.php" class="btn btn-secondary">Voltar</a>	
                                <button type="submit" class="btn btn-primary" >Entrar</button>
                            </div>
                            
                        </form>
                        
        </section>

</body>
</html>

