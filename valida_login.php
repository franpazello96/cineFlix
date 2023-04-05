<?php

session_start();
require_once 'conexao.php';

if((isset($_POST['email'])) && (isset($_POST['senha']))){
    $email = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
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

        if($_SESSION['nivel'] == "usuario"){
            header("Location: adiciona-filme.php");
        }elseif($_SESSION['nivel'] == "adm"){
            header("Location: administrador.php");
        }
    }else{    
        //Váriavel global recebendo a mensagem de erro
        // echo "Usuário ou senha Inválido";
        // header("location: login.php");
        ?>
<script>
    alert('Erro'); 
    location.href='login.php';
</script>
        <?php	
    }
}else{
    echo  "Usuário ou senha inválido";
    header("location: login.php");
}
?>