<?php
   $dominio = $_SERVER['HTTP_HOST'];

	if($dominio != "www.superfardas.com.br/loja" || $dominio != "superfardas.com.br/loja"){
		header('location: http://www.viasolpraia.com.br');
	}
?>
