<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once 'link.php';?>
    <?php require_once 'menu.php';?>
</head>
<body>

    <section id="login" >
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
        <div class="container aling-self-center"> 
            <div class="row">
                <div class="col-md-12">
                <img src="imagens/perfil.png"  witdh="15%" height="15%" class="imagem mt-5"> 
                         <form action="valida_login.php" method="POST" name="valida_login" id="valida_login">
                            <div class="form-group m-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail:" required>
                            </div>
                            <div class="form-group m-3">
                                <input type="password" class="form-control mb-2"   name="senha" id="senha" placeholder="Senha:" required>
                                <p >Não tem uma conta? <a href="login-cadastro.php">Cadastre-se</a><p>
                                <p ><a href="login_recupera_senha.php" style="font-size: 12px;">Esqueceu sua senha?</a><p>
                            </div>
                            <div>
                                <a href="index.php" class="btn btn-secondary">Voltar</a>	
                                <button type="submit" class="btn btn-primary" >Entrar</button>
                            </div>
                            
                        </form>
                        
        </section>

</body>
</html>



