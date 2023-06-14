<?php
require_once 'conexao.php';
require_once 'link.php';
require_once 'menu-adm.php';


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


 
      
 

if (isset($_GET['id'])) {  
      $id = $_GET['id'];  

      $sql = "SELECT * FROM usuario WHERE id = $id";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();





?>
            <!DOCTYPE html>
            <html lang="pt-br">

            <head>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>


            </head>

            <body>
                  <!-- <script>
    var crypt = {
        secret: "THESECRET",
        encrypt: function (senha) {
            var cipher = CryptoJS.AES.encrypt (senha, this.secret);
            cipher = cipher.toString();
            return cipher;
        },
        decrypt: function (cipher) {
            var decipher = CryptoJS.AES.decrypt (cipher, crypt.secret);
            decipher = decipher.toString (CryptoJS.enc. Utf8);
            return decipher;
        }
    }

    function handleForm(event) {
        var senha = document.getElementById("senha")
        var cipher = crypt.encrypt(senha.value);
        console.log(cipher);
        senha.value = cipher
        
    } 
</script> -->
                  <section id="conteudo">
                        <div class="container mt-5">
                              <div class="row ">
                                    <div class="col-md-6">
                                          <div class="col-md-12 m-3">
                                                <h2 class="mt-5 ml-2 mb-2" style="font-size: 40px;"> Dados</h2>
                                                <form method="POST" action="login-edita-grava-adm.php" name="login-edita-grava-adm" id="login-edita-grava-adm">
                                                      <div class="form-group">
                                                            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="nome" name="nome" placeholder="Nome: " value="<?php echo $row['nome']; ?>" disabled>
                                                            <input class="form-control m-2 col-12" type="email" id="email" name="email" placeholder="E-mail:  " value="<?php echo $row['email']; ?>" disabled>


                                                            <select class="form-control m-2 col-12" id="nivel" name="nivel">
                                                            <option value="cliente" <?php echo ($row['nivel'] == 'cliente') ? 'selected' : ''; ?>>Cliente</option>
                                                            <option value="adm" <?php echo ($row['nivel'] == 'adm') ? 'selected' : ''; ?>>Administrativo</option>
                                                            </select>

                                                            <select class="form-control m-2 col-12" id="situacao" name="situacao">
                                                            <option value="ativo" <?php echo ($row['situacao'] == 'ativo') ? 'selected' : ''; ?>>Ativo</option>
                                                            <option value="inativo" <?php echo ($row['situacao'] == 'inativo') ? 'selected' : ''; ?>>Inativo</option>
                                                            </select>



                                                            <a href="administrador.php" class="btn btn-secondary ml-2">Voltar</a>
                                                            <button type="submit" class="btn btn-danger ">Editar</button>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 100px;">
                                          <div class="col-md-12 m-3">
                                                <img id="img" src="imagens/logo_red.png" width="100%" height="70%">
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </section>
      <?php


      }
}

require_once 'rodape.php' ?>
            </body>

            </html>