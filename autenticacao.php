<?php
session_start();

if (!isset($_SESSION['nivel']) || !isset($_SESSION['situacao'])) {
    echo "You must log in first!";
    header("location: login.php"); // or wherever your login page is
    exit();
}

if ($_SESSION['nivel'] == "cliente" &&  $_SESSION['situacao'] == "ativo" ){
    header("Location: index-logado.php");
    exit();
} elseif ($_SESSION['nivel'] == "adm" &&  $_SESSION['situacao'] == "ativo"){
    header("Location: administrador.php");
    exit();
} else {    
    echo  "Usuário Inativo! Favor entrar em contato com o suporte!";
    header("location: index.php");
    exit();
}
?>
