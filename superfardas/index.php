<?php
   $dominio = $_SERVER['HTTP_HOST'];

	if($dominio == "www.superfardas.com.br" || $dominio == "superfardas.com.br"){
		header('location: http://www.superfardas.com.br/site/br');
	}
?>