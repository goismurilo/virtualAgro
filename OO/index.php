<?php

include('teste.php');

class Vitor extends minhaClasse{

	public function doNothing(){

		echo "IPHONE 8";
	}





}

$varTeste = new Vitor();

$varTeste -> imprimir();
$varTeste -> doNothing();

?>