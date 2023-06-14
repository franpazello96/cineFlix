<?php

require_once 'conexao.php';

$nome = $_POST['nome']; 
$cep = $_POST['cep']; 
$logradouro = $_POST['logradouro']; 
$numero = $_POST['numero']; 
$cidade = $_POST['cidade']; 
$uf = $_POST['uf']; 
$complemento = $_POST['complemento']; 
$bairro = $_POST['bairro'];
$email = $_POST['email']; 
$senha = $_POST['senha'];  
$cpf = $_POST['cpf']; 
$telefone = $_POST['telefone']; 
$imagem = $_POST['imagem'];
$arquivoNome = "";
$arquivo = $_FILES["imagem"]['name'];
$pasta_dir = "imagens/";
$arquivoNome = $pasta_dir . $arquivo;
move_uploaded_file($_FILES["imagem"]["tmp_name"], $arquivoNome);



$sql = "INSERT INTO usuario (nome, cep, logradouro, numero, cidade, uf, complemento, bairro, email, senha, cpf, telefone, nivel, situacao, imagem) 
VALUES ('$nome','$cep', '$logradouro', '$numero', '$cidade', '$uf', '$complemento', '$bairro', '$email', md5('$senha'), '$cpf', '$telefone', 'cliente', 'ativo', '$arquivoNome')";

$resultado = mysqli_query($conn,$sql);

if($resultado){
      header('Location:login.php');
  } else {
      echo "Erro na execução da consulta: " . mysqli_error($conn);
  }

?>