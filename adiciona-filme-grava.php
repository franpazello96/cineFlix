<?php

require_once 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$genero = $_POST['genero'];
$diretor = $_POST['diretor'];
$ano = $_POST['ano'];
$duracao = $_POST['duracao'];

$sql = "INSERT INTO filme (titulo, descricao, genero, diretor, ano, duracao)
VALUES ('$titulo','$descricao', '$genero', '$diretor', $ano, '$duracao')";

$resultado = mysqli_query($conn,$sql);

if($resultado){
    header('Location:index.php');
} else {
    echo "Erro na execução da consulta: " . mysqli_error($conn);
}
?>