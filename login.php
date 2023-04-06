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
                         <form onsubmit="return false" action="login_valida.php" method="POST" name="login_valida" id="login_valida">
                            <div class="form-group m-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail:" required>
                            </div>
                            <div class="form-group m-3">
                                <input type="password" class="form-control mb-2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*]).{6,10}"  name="senha" id="senha" placeholder="Senha:" required>
                                <p >Não tem uma conta? <a href="login-cadastro.php">Cadastre-se</a><p>
                                <p ><a href="" style="font-size: 12px;">Esqueceu sua senha?</a><p>
                            </div>
                            <div>
                                <a href="index.php" class="btn btn-secondary">Voltar</a>	
                                <button id="logar" class="btn btn-primary" >Entrar</button>
                            </div>
                        </form>
        </section>

</body>
</html>

<script type="module">
    import { logIn } from './script/firebase/firebaseAuth.js';

    const logar = document.getElementById("logar");
    logar.addEventListener("click", async event => {
        console.log('runing login');
        const email = document.getElementById("email");
        const senha = document.getElementById("senha");
        const logged = await logIn(email.value, senha.value)
        console.log(logged);
        if (logged) {
            window.location.replace('index.php?logged=' + true)
        }
    });
</script>
