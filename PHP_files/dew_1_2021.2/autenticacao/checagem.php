<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header('location: http://localhost/dew_1_2021.2/autenticacao/formLogin.php');
}