<?php
   $dominio = $_SERVER['HTTP_HOST'];

	if($dominio == "www.superfardas.com.br" || $dominio == "superfardas.com.br"){
		header('location: http://www.superfardas.com.br/site/br');
		
	}else{
		if($dominio == "www.superfardas.com.br/loja" || $dominio == "superfardas.com.br/loja"){
			header('location: https://www.viasolpraia.com.br/');

		}
	}
?>
