<?php
	require_once("conn.php");
	
	try{
	
	$consulta = $pdo->prepare("SELECT * FROM produtos");
	$consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
	$consulta->execute();
	
	$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
	foreach($dados as $linha){
	
	   echo "id: {$linha['id']} - Tipo: {$linha['tipo']} - Titulo: {$linha['titulo']} - Subtitulo: {$linha['subtitulo']} - Resumo: {$linha['resumo']}  - Descricao: {$linha['descricao']} - Especificacao: {$linha['especificacao']} - Foto: {$linha['foto']}  - Legenda: {$linha['legenda']}<br />";	
	
	}
	
	/*
	//aqui eu mostro os valores de minha consulta
	while ($linha = $consulta->fetch(PDO::FETCH_BOTH)) {
	      
	   echo "id: {$linha['id']} - Tipo: {$linha['tipo']} - Titulo: {$linha['titulo']} - Subtitulo: {$linha['subtitulo']} - Resumo: {$linha['resumo']}  - Descricao: {$linha['descricao']} - Especificacao: {$linha['especificacao']} - Foto: {$linha['foto']}  - Legenda: {$linha['legenda']}<br />";
	   
	   echo "<img src='../images/produtos/{$linha['foto']}'><br />";
	}
	*/
	// fechando a conexão
	$pdo = null;
	
	}
	catch(PDOExcception $erro){
		echo $erro->getmessage();
	}
?>