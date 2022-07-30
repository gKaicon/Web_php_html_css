<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header('location: http://localhost/PHP_Files/Project_Aula1/autenticar/FormLogin.php');
}
?>
