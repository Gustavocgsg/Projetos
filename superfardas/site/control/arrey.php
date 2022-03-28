<?php
	require_once("conn.php");
	
	try{
	
		function Produtos(){ 
			
			$consulta = $pdo->query("SELECT * FROM produtos ORDER BY id DESC"); 
			
			$total = $consulta->fetchAll(PDO::FETCH_ASSOC); 
			$geral = count($total); 
			
			$retorno = array(); 
			
			foreach($total as $linha) { 
				$retorno[] = new Produtos($linha['id'], $linha['tipo'], $linha['titulo'], $linha['subtitulo'], $linha['resumo'], $linha['descricao'], $linha['especificacao'], $linha['foto'], $linha['legenda']); 
				
			} 
		
		return $geral;


	}
	
	// fechando a conexão
	$pdo = null;
	
	}
	catch(PDOExcception $erro){
		echo $erro->getmessage();
	}
?>