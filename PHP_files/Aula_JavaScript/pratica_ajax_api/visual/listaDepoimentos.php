<?php
define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/pratica_ajax_api/');

require_once _BASE . '../MODELODAO/Conexao.php';
require_once _BASE . '../MODELODAO/Depoimento.php';
require_once _BASE . '../MODELODAO/DAODepoimento.php';

$daoDepoimento = new DaoDepoimento();
$lista = $daoDepoimento->getLista();

echo json_encode($lista);
