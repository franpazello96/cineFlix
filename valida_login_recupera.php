<?php
require_once 'conexao.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    $result_usuario = "UPDATE usuario SET senha = '$senha' WHERE email = '$email' LIMIT 1";

    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if ($resultado_usuario) {
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['id'] = $email;
            $_SESSION['senha'] = $senha;
            
            $query = "SELECT * FROM usuario WHERE email = '$email' LIMIT 1";
            $resultado = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($resultado);
            
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['senha'] = $row['senha'];
            $_SESSION['nivel'] = $row['nivel'];

            if ($_SESSION['nivel'] == "cliente") {
                header("Location: index-logado.php");
                exit();
            } elseif ($_SESSION['nivel'] == "adm") {
                header("Location: administrador.php");
                exit();
            }
        } else {
            ?>
            <script>
                alert('Erro');
                location.href = 'index.php';
            </script>
            <?php
        }
    } else {
        echo "Erro na consulta ao banco de dados: " . mysqli_error($conn);
    }
} else {
    echo "Usuário ou senha inválido";
    header("location: index.php");
}

