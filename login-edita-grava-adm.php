<?php

    require_once 'conexao.php';
    
    if(isset($_POST['id']))
    {
      $id = $_POST['id']; 
      $situacao = $_POST['situacao']; 
      $nivel = $_POST['nivel']; 

        $sql = "UPDATE usuario SET situacao='$situacao', nivel='$nivel' WHERE id = '$id'"; 
        
        $resultado = mysqli_query($conn,$sql);

        if($resultado){
              header('Location:administrador.php');
          } else {
              echo "Erro na execução da consulta: " . mysqli_error($conn);
          }


    }  else {
      echo "Erro na execução da consulta: " . mysqli_error($conn);
  }