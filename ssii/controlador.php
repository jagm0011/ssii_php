<?
require_once("modelo.php");
require_once("vista.php");
require_once("KNN.php");


class controlador{
	private  $vista;
	private  $modelo;
	private $KNN;
	
	public function controlador($vista, $modelo){
		$this->vista=$vista;
		$this->modelo=$modelo;
		$aux=array();	
		$this->KNN=new KNN($aux,1);
		$this->vista->show();
	}	
	
}



?>