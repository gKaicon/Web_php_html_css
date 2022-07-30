<?php
define('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/pratica_ajax_api/');

require_once _BASE . ('../MODELODAO/Conexao.php');
require_once _BASE . ('../MODELODAO/Depoimento.php');
require_once _BASE . ('../MODELODAO/DAODepoimento.php');

$resposta = ['status'=>'erro'];

$codigoIbge = $_POST['codigoIbge'];
$nomeIbge = $_POST['nomeIbge'];
$comentario = $_POST['comentario'];

$depoimento = new Depoimento();
$depoimento->setCodigoIbge($codigoIbge);
$depoimento->setNomeIbge($nomeIbge);
$depoimento->setComentario($comentario);

$daoDepoimento = new DaoDepoimento();
if($daoDepoimento->incluir($depoimento))
{
    $resposta = ['status'=>'ok'];
}

echo json_encode($resposta);
?>