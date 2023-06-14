<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
    require_once 'link.php';?>
    <?php require_once 'menu.php';?>
    <?php

  

    // Set the default session name
    $s_name = session_name();

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
        // Last request was more than 20 seconds ago
        session_unset();     // Unset $_SESSION variable for the run-time
        session_destroy();   // Destroy session data in storage
        echo "Session expired at " .  gmdate("H:i:s", time()) .  "<br/>";
        echo '<meta http-equiv="refresh" content="1;url=index.php">';
        echo '<script>alert("Sessão expirada");</script>';
    
    
    }
    

    $_SESSION['LAST_ACTIVITY'] = time(); // Update last activity time stamp
    echo "Session created for $s_name, at " . gmdate("H:i:s", time()) .  "<br/>";
    ?>
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


