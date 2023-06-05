
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    session_start();
    require_once 'link.php';
    require_once 'menu.php';
    $s_name = session_name();

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
        // Last request was more than 1 second ago
        session_unset();     // Unset $_SESSION variable for the run-time
        session_destroy();   // Destroy session data in storage
        echo "Session expired at " .  gmdate("H:i:s", time()) .  "<br/>";
        echo '<meta http-equiv="refresh" content="1;url=index.php">';
        echo '<script>alert("Sessão expirada");</script>';
    }

    $_SESSION['LAST_ACTIVITY'] = time(); // Update last activity timestamp
    echo "Session created for $s_name, at " . gmdate("H:i:s", time()) .  "<br/>";
    ?>
    
</head>
<body>

<section id="login">
  <?php
    if(isset($_GET['erro'])){
        $erro = $_GET['erro'];
        switch($erro){
            case 'credenciais-invalidas':
                echo '<div class="alert alert-danger" role="alert">Credenciais inválidas. Por favor, verifique seu email, senha e CNPJ e tente novamente.</div>';
                break;
            case 'conta-inativa':
                echo '<div class="alert alert-danger" role="alert">Sua conta foi removida!</div>';
                break;
            default:
                break;
        }
    }
    ?>

    <div class="container align-self-center">
        <div class="row">
            <div class="col-md-12">
                <img src="imagens/perfil.png" width="15%" height="15%" class="imagem mt-5">
                <form action="valida_login.php" method="POST" name="valida_login" id="valida_login">
                    <div class="form-group m-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group m-3">
                        <input type="password" class="form-control mb-2" name="senha" id="senha" placeholder="Senha" required>
                        <p>Não tem uma conta? <a href="login-cadastro.php">Cadastre-se</a></p>
                        <p><a href="login_recupera_senha.php" style="font-size: 12px;">Esqueceu sua senha?</a></p>
                    </div>
                    <div>
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>
