<?php

	include("client-class.php");

	$tempCliente = new Client();
	$tempCliente->nameBaby = "WESLEY";
	$tempCliente->nameResponsible = "Dusbley";
	$tempCliente->cellphone= 99999999;
 
 	echo "<br/>Nome do baby :".$tempCliente->nameBaby;
	echo "<br/>Nome do pai : ".$tempCliente->nameResponsible;
	echo "<br/>Nome do pai : ".$tempCliente->cellphone;
 
 ?>