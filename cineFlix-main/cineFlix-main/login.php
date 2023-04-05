<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once 'link.php';?>
    <?php require_once 'menu.php';?>
    
</head>
<body>
    <form method="GET" action="form_action.html">
        <section id="login" >
            <div class="container aling-self-center"> 
                <div class="row">
                    <div class="col-md-12">
                    <img src="imagens/perfil.png"  witdh="15%" height="15%" class="imagem mt-5"> 
                            <form action="login_valida.php" method="POST" name="login_valida" id="login_valida">
                                <div class="form-group m-3">
                                <input type=text name="Email" pattern="^[A-Za-z0-9_.-]+@([A-Za-z0-9_]+\.)+[A-Za-z]{2,4}$" placeholder="Insira um email válido"  title="Deve coonter o nome do email seguido com o @.Ex:nomeemail@email.com" required>
                                </div>
                                <div class="form-group m-3">
                                <input type=password pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*]).{6,10}" name="Senha" placeholder="Insira uma senha válida"  title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 6 ou mais caracteres." required>
                                
                                    <p>Não tem uma conta? <a href="login-cadastro.php">Cadastre-se</a></p>
                                    
                                </div>
                                <div>
                                <a href="index.php" class="btn btn-secondary">Voltar</a>	
                                <button type="submit" class="btn btn-primary " >Entrar</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>
