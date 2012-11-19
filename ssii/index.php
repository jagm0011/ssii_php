<?
	require_once("controlador.php");
require_once("vista.php");
require_once("modelo.php");

$vista=new vista();
$modelo=new modelo();

$controlador=new controlador($vista,$modelo);
?>