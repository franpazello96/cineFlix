<?php
session_start();

require_once 'conexao.php';

if((isset($_POST['email'])) && (isset($_POST['senha']))){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha); 
        
    $result_usuario = "SELECT * FROM usuario WHERE email = '$email' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if($resultado_usuario->num_rows > 0){
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['nivel'] = $resultado['nivel'];
        $_SESSION['situacao'] = $resultado['situacao'];

        if($_SESSION['nivel'] == "cliente" &&  $_SESSION['situacao'] == "ativo" ){
            header("Location: index-logado.php");
        }elseif($_SESSION['nivel'] == "adm" &&  $_SESSION['situacao'] == "ativo"){
            header("Location: administrador.php");
        }else{    
            echo  "Usuário Inativo! Favor entrar em contato com o suporte!";
            header("location: index.php");
        }
    }else{    
        ?>
<script>
    alert('Erro'); 
    location.href='index.php';
</script>
        <?php	
    }
}else{
    echo  "Usuário ou senha inválido";
    header("location: index.php");
}
?>