<?
require_once("modelo.php");
require_once("vista.php");

class controlador{
	private  $vista;
	private  $modelo;
	
	public function controlador($vista, $modelo){
		$this->vista=$vista;
		$this->modelo=$modelo;	
		$this->vista->show();
	}	
	
}



?>