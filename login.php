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
                                <input type="email" class="form-control" id="email" name="email"  title="O email aceita apenas outlook ou gmail sempre acompanhados com o @" placeholder="E-mail:" required>
                            </div>
                            <div class="form-group m-3">
                                <input type="password" title="A senha precisa conter uma maiscula e com um mínimo de 8 digítos" class="form-control mb-2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*]).{6,10}"  name="senha" id="senha" placeholder="Senha:" required>
                                <p >Não tem uma conta? <a href="login-cadastro.php">Cadastre-se</a><p>
                                <p ><a href="" style="font-size: 12px;">Esqueceu sua senha?</a><p>
                            </div>
                            <div>
                                <a href="index.php" class="btn btn-secondary">Voltar</a>	
                                <button type="submit" id="logar" class="btn btn-primary" >Entrar</button>
                            </div>

                        </form>
    </section>
 <script>
     function validarEmail(email) {
        const outlookRegex = /@outlook\.(com|com\.br)$/;
        const gmailRegex = /@gmail\.(com|com\.br)$/;
        
        if (outlookRegex.test(email) || gmailRegex.test(email)) {
            return true;
        } else {
            return false;
        }
    }
    const form =document.querySelector("#login_valida")
    form.addEventListener('submit',(event)=> {
        
        const emails=document.querySelector('#email').value;
        if(!validarEmail(emails)){
            alert("Por favor insira um email válido.")
            event.preventDefault();
            
        } 
    });
           
 </script> 
</body>
</html>




