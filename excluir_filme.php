<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM filme WHERE id = '$id'";
    $run = mysqli_query($conn, $query);
    if ($run) {
        header("location: filmes_cadastrados.php?erro=conta-inativa");
        die();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
