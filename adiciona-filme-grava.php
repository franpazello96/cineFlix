<?php

require_once 'conexao.php';

$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
$genero = mysqli_real_escape_string($conn, $_POST['genero']);
$diretor = mysqli_real_escape_string($conn, $_POST['diretor']);
$ano = $_POST['ano'];
$duracao = $_POST['duracao'];
$imagem = $_FILES['imagem'];
$arquivoNome = "";

$sql = "";

if (isset($_FILES["imagem"])) {
    $arquivo = $_FILES["imagem"]['name'];
    $pasta_dir = "imagens/";
    $arquivoNome = $pasta_dir . $arquivo;
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $arquivoNome);

    $sql = "INSERT INTO filme (titulo, descricao, imagem, genero, diretor, ano, duracao)
    VALUES ('$titulo', '$descricao', '$arquivoNome', '$genero', '$diretor', $ano, $duracao)";
    $resultado = mysqli_query($conn, $sql);
} else {
    $sql = "INSERT INTO filme (titulo, descricao, genero, diretor, ano, duracao)
    VALUES ('$titulo', '$descricao', '$genero', '$diretor', $ano, $duracao)";
    $resultado = mysqli_query($conn, $sql);
}

if ($resultado) {
    header('Location:index-adm.php');
} else {
    echo "Erro na execução da consulta: " . mysqli_error($conn);
}
?>
