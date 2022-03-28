<?php
   $dominio = $_SERVER['HTTP_HOST'];

	if($dominio != "www.agenciaguimaraes.com.br" || $dominio != "agenciaguimaraes.com.br"){
		header('location: http://superfardas.com.br/agenciaguimaraes/atendimento.php');

	}
?>
