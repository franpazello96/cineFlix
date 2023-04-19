<?php

session_start();
require_once 'conexao.php';

if((isset($_POST['email'])) && (isset($_POST['senha']))){
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha); 
    $result_usuario = "SELECT * FROM usuario WHERE email = '$email' && senha = md5('$senha') LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    if($resultado_usuario->num_rows > 0){
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['email'] = $resultado['email'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['nivel'] = $resultado['nivel'];

        if($_SESSION['nivel'] == "usuario"){
            header("Location: meus-filmes.php");
        }elseif($_SESSION['nivel'] == "adm"){
            header("Location: adiciona-filme.php");
        }
    }

}
?>