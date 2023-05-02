<?php
session_start();
require_once 'conexao.php';
require_once 'link.php';
require_once 'menu.php';

$user_id = $_SESSION['id'];


if (isset($user_id)) {

      $sql = "SELECT * FROM usuario WHERE id = $user_id";
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
                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="col-md-12 m-3">
                                                <h2 class="mt-5 ml-2" style="font-size: 40px;">Olá <?php echo $row['nome'] ?></h2>
                                                <form method="POST" action="login-cadastro-grava.php" name="login-cadastro-grava" id="login-cadastro-grava">
                                                      <div class="form-group">
                                                            <input class="form-control m-2 col-12" type="text" id="nome" name="nome" placeholder="Nome: " value="<?php echo $row['nome']; ?>">
                                                            <input class="form-control m-2 col-12" type="email" id="email" name="email" placeholder="E-mail:  " value="<?php echo $row['email']; ?>">
                                                            <input class="form-control m-2 col-12" type="password" id="senha" name="senha" placeholder="Senha:  " value="<?php echo $row['senha']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="cpf" name="cpf" placeholder="CPF: " value="<?php echo $row['cpf']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="cep" name="cep" placeholder="CEP: " value="<?php echo $row['cep']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="logradouro" name="logradouro" placeholder="Logradouro: " value="<?php echo $row['logradouro']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="numero" name="numero" placeholder="Número: " value="<?php echo $row['numero']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="complemento" name="complemento" placeholder="Complemento: " value="<?php echo $row['complemento']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="bairro" name="bairro" placeholder="Bairro: " value="<?php echo $row['bairro']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="cidade" name="cidade" placeholder="Cidade: " value="<?php echo $row['cidade']; ?>">
                                                            <input class="form-control m-2 col-12" type="text" id="uf" name="uf" placeholder="Estado: " value="<?php echo $row['uf']; ?>">
                                                            <input class="form-control m-2 col-12" type="tel" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}" id="telefone" name="telefone" placeholder="Telefone: " value="<?php echo $row['telefone']; ?>">>
                                                            <a href="index.php" class="btn btn-secondary ml-2">Voltar</a>
                                                            <button type="submit" class="btn btn-primary ">Cadastrar</button>
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