<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header('location: http://localhost/Project_Aula1/autenticar/FormLogin.php');
}
?>
