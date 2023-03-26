<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php require_once 'link.php';?>
    </head>
    <body>
        <header>
            <!---Inicio Navbar--->
            <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
                <div class="container">
                  <a href="index.php" class="navbar-brand text-white" style="font-size: 3em;  font-weight: 700; letter-spacing: -0.05em; ">CineFlix</a>
                  <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars text-white"></i>
                  </button>
        
                    <div class="collapse navbar-collapse" id="nav-principal">
                        <ul class="navbar-nav ml-auto">
                            <li  class="nav-item">
                                <a href="index.php" class="nav-link">HOME</a>
                            </li>
  
                            <li  class="nav-item">
                                <a href="doar.php" class="nav-link">CATEGORIAS</a>
                            </li>
                            <li  class="nav-item">
                                <a href="contato.php" class="nav-link">FAQ</a>
                            </li>
                            <li  class="nav-item divisor"></li>
                           <!-- <li  class="nav-item">
                                <a href="login-cadastro.php" class="nav-link">INSCREVER-SE</a>
                            </li>-->
                            <li  class="nav-item">
                                <a href="login.php" class="nav-link">ENTRAR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header> 
    </body>
</html>