    <!DOCTYPE html>
<html lang="pt-br">
    <head>
    <?php require_once 'link.php';?>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

<!---
                            <li id="search" style="display: flex;">
                                <button onclick="Search()">
                                    <i class="bi-search"></i>
                                </button>
                                <input class="hidden visuallyhidden" id="input" type="text" placeholder="Search...">
                            </li>
--->

                            <li  class="nav-item">
                                <a href="index.php" class="nav-link">HOME</a>
                            </li>

                            

                            <li  class="nav-item divisor"></li>
                            
                          
                            
                           <li  class="nav-item">
                                <a href="login-cadastro.php" class="nav-link">INSCREVER-SE</a>
                            </li>
                            <li  class="nav-item divisor"></li>
                            <li  id='entrar' class="nav-item" style="display: flex; align-items: center;">
                                <a href="login.php" class="nav-link">ENTRAR</a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </nav>
        </header> 
    </body>
</html>

<script src="script/search.js"></script> 