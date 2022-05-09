<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$mysqli = $mysqli = new mysqli($host, $user, $password, $database );

if (empty($_POST['email']) OR empty($_POST['senha'])) {
    header("Location: login.html");
    exit;
}

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$sql = "SELECT `email`, `senha` FROM `dados` WHERE (`email` = '" . $email . "') AND (`senha` = '" . $senha . "')";
$query = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($query)!= 1) {
    echo "Login inválido!";
    exit;
}else {
    $resultado = mysqli_fetch_assoc($query);

     if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioNome'] = $resultado['email'];
      $_SESSION['UsuarioNivel'] = $resultado['senha'];

      // Redireciona o visitante
      header("Location: index.html"); exit;
}