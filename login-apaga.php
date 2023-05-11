<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM usuario WHERE id = '$id'";
    $run = mysqli_query($conn, $query);
    if ($run) {
        header("location: login.php?erro=conta-inativa");
        die();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
