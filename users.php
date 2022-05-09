<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$mysqli = $mysqli = new mysqli($host, $user, $password, $database );

if (empty($_POST['pesquisa'])) {
    header("Location: users.html");
    exit;
}

$pesquisa = mysqli_real_escape_string($mysqli, $_POST['pesquisa']);

$sql = "SELECT `nome`, `sobrenome`, `email`, `cpf`, `rg` FROM `dados` WHERE (`nome`, `sobrenome`, `email`, `cpf`, `rg` = '" . $pesquisa . "')";
$query = mysqli_query($mysqli, $sql);
