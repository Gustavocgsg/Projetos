<?php
//header('Content-Type: text/html; charset=UTF-8');
/*Local do servidor de banco de dados*/

//Conexao ao banco de dados

$servico = true;

if($servico == false){

	// LOCAL
	$local='localhost';
	$banco='db_superfardas';  
	$usuario='root'; 
	$senha=''; 
	
}
elseif($servico == true){
		
	// SERVIDOR
	$local='mysql.superfardas.com.br';
	$banco='superfardas07';  
	$usuario='superfardas07'; 
	$senha='SuperF1rd1s123456'; 
	
};

//VALIDADOR

//function conectar(){
	try
	{
		//força a utilização de codificação UTF8.
		$validation = "mysql:host=$local;dbname=$banco;charset=utf8";
		
		
		$encode = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
		);
		
		$pdo = new PDO($validation, $usuario, $senha, $encode);
		
	}
	
	//FALHA
	catch(PDOExcception $erro)
	{
	
		echo 'Falha no acesso ao banco de dados! -> MySQL: ' . $erro->getMessage();
	
	}
	//return $pdo;
//}