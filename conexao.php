<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$dbname = "cineflix";
$conn =  new mysqli($servidor, $usuario, $senha, $dbname);
$conn->set_charset("utf8");
if($conn->connect_error){
    die("Erro ao conectar! ". $conn->connect_error); 
}
?>