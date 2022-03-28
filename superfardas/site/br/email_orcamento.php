<?php
if (isset($_POST['btn-envia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	//ALTERAÇÃO PARA OBTER TODOS OS ITENS SELECIONADOS 
	//**********_by Fernando Grasselli_*****************
	//====================================================

	$ModeloFire = $_POST['modfire'];
    $ModeloBasic = $_POST['modbasic'];
    $ModeloPrime = $_POST['modprime'];
    $ModeloBrim = $_POST['modbrim'];
    
    $TecidoUniforte  = $_POST['tecuniforte'];
    $TecidoUnisafe = $_POST['tecunisafe'];
    $TecidoUnipar = $_POST['tecunipar'];
    $TecidoBasic = $_POST['tecbasic'];
    $TecidoPrime = $_POST['tecprime'];
    $TecidoBrim = $_POST['tecbrim'];
    
    $CorFire = $_POST['corfire'];
    $CorBasic = $_POST['corbasic'];
    $CorPrime = $_POST['corprime'];
    $CorBrim = $_POST['corbrim'];
    
    $DetBordado = $_POST['detbordado'];
    $DetSlik = $_POST['detslik'];
    $DetFita = $_POST['detfita'];
	
	$produto = "";

    if($ModeloFire){
	 //echo"<br>Modelo Fire</br>";
	 $produto .= "<br><b><u>Modelo Fire</u></b><br>";
     foreach($ModeloFire as $modfire){
	  //echo $modfire . "<br>";
	  $produto .= $modfire . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($ModeloBasic){
	  //echo"<br>Modelo Basic</br>";
	  $produto .= "<br><b><u>Modelo Basic</u></b><br>";
     foreach($ModeloBasic as $modbasic){
	  //echo $modbasic . "<br>";
	  $produto .= $modbasic . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($ModeloPrime){
	  //echo"<br>Modelo Prime</br>";
	  $produto .= "<br><b><u>Modelo Prime</u></b><br>";
     foreach($ModeloPrime as $modprime){
	  //echo $modprime . "<br>";
	  $produto .= $modprime . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($ModeloBrim){
	  //echo"<br>Modelo Brim</br>";
	  $produto .= "<br><b><u>Modelo Brim</u></b><br>";
     foreach($ModeloBrim as $modbrim){
	  //echo $modbrim . "<br>";
	  $produto .= $modbrim . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    
    if($TecidoUniforte){
	  //echo"<br>Tecido Uniforte</br>";
	  $produto .= "<br><b><u>Tecido Uniforte</u></b><br>";
     foreach($TecidoUniforte as $tecuniforte){
	  //echo $tecuniforte . "<br>";
	  $produto .= $tecuniforte . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($TecidoUnisafe){
	  //echo"<br>Tecido Unisafe</br>";
	  $produto .= "<br><b><u>Tecido Unisafe</u></b><br>";
     foreach($TecidoUnisafe as $tecunisafe){
	  //echo $tecunisafe . "<br>";
	  $produto .= $tecunisafe . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($TecidoUnipar){
	  //echo"<br>Tecido Unipar</br>";
	  $produto .= "<br><b><u>Tecido Unipar</u></b><br>";
     foreach($TecidoUnipar as $tecunipar){
	  //echo $tecunipar . "<br>";
	  $produto .= $tecunipar . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($TecidoBasic){
	  //echo"<br>Tecido Basic</br>";
	  $produto .= "<br><b><u>Tecido Basic</u></b><br>";
     foreach($TecidoBasic as $tecbasic){
	  //echo $tecbasic . "<br>";
	  $produto .= $tecbasic . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($TecidoPrime){
	  //echo"<br>Tecido Prime</br>";
	  $produto .= "<br><b><u>Tecido Prime</u></b><br>";
     foreach($TecidoPrime as $tecprime){
	  //echo $tecprime . "<br>";
	  $produto .= $tecprime . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($TecidoBrim){
	  //echo"<br>Tecido Brim</br>";
	  $produto .= "<br><b><u>Tecido Brim</u></b><br>";
     foreach($TecidoBrim as $tecbrim){
	  //echo $tecbrim . "<br>";
	  $produto .= $tecbrim . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    
    if($CorFire){
	  //echo"<br>Cor Fire</br>";
	  $produto .= "<br><b><u>Cor Fire</u></b><br>";
     foreach($CorFire as $corfire){
	  //echo $corfire . "<br>";
	  $produto .= $corfire . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($CorBasix){
	  //echo"<br>Cor Basic</br>";
	  $produto .= "<br><b><u>Cor Basic</u></b><br>";
     foreach($CorBasic as $corbasic){
	  //echo $corbasic . "<br>";
	  $produto .= $corbasic . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($CorPrime){
	  //echo"<br>Cor Prime</br>";
	  $produto .= "<br><b><u>Cor Prime</u></b><br>";
     foreach($CorPrime as $corprime){
	  //echo $corprime . "<br>";
	  $produto .= $corprime . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($CorBrim){
	  //echo"<br>Cor Brim</br>";
	  $produto .= "<br><b><u>Cor Brim</u></b><br>";
     foreach($CorBrim as $corbrim){
	  //echo $corbrim . "<br>";
	  $produto .= $corbrim . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    
    if($DetBordado){
	  //echo"<br>Detalhe Bordado</br>";
	  $produto .= "<br><b><u>Detalhe Bordado</u></b><br>";
     foreach($DetBordado as $detbordado){
	  //echo $detbordado . "<br>";
	  $produto .= $detbordado . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($DetSlik){
	  //echo"<br>Detalhe Slik</br>";
	  $produto .= "<br><b><u>Detalhe Slik</u></b><br>";
     foreach($DetSlik as $detslik){
	  //echo $detslik . "<br>";
	  $produto .= $detslik . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
    
    if($DetFita){
	  //echo"<br>Detalhe Fita</br>";
	  $produto .= "<br><b><u>Detalhe Fita</u></b><br>";
     foreach($DetFita as $detfita){
	  //echo $detfita . "<br>";
	  $produto .= $detfita . "<br>";
     }
	 //echo "<hr>";
	 $produto .= "<hr>";
    }
	//FIM DA ALTERAÇÃO



	$solicitante = $_POST['solicitante'];

	$id_cnpj = $_POST['id_cnpj']; 

	//$departamento = $_POST['departamento'];

	//$endereco = $_POST['endereco'];

	//$id_cep = $_POST['id_cep'];

	//$telefone = $_POST['telefone']; 

	$telefone_celular_whatsapp = $_POST['telefone_celular_whatsapp'];

	$email = $_POST['email']; 

	//$produto = $_POST['produto'];

	$quantidade = $_POST['quantidade']; 

	//$comprimento = $_POST['comprimento'];

	//$largura = $_POST['largura'];  

	//$altura = $_POST['altura'];  

	//$pinus = $_POST['pinus'];  

	//$mad_para = $_POST['mad_para'];  

	//$assunto = $_POST['outros'];  

	//$assunto = $_POST['text_outros'];
	
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "contato@superfardas.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "gustavocgsg@gmail.com, contato@superfardas.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Orçamento - superfardas.com.br"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	
	$email_conteudo = "<strong>Solicitante: </strong>$solicitante \n";

	$email_conteudo .= "<br><strong>Cnpj: (Opicional)</strong>$id_cnpj \n"; 

	//$email_conteudo .= "<br><strong>Departamento: </strong>$departamento \n";

	//$email_conteudo .= "<br><strong>Endereço: </strong>$endereco \n";

	//$email_conteudo .= "<br><strong>Cep: </strong>$id_cep \n";

	//$email_conteudo .= "<br><strong>Telefone: </strong>$telefone \n"; 

	$email_conteudo .= "<br><strong>Telefone | Celular | Whatapp: </strong>$telefone_celular_whatsapp \n";

	$email_conteudo .= "<br><strong>Email: </strong>$email \n"; 

	$email_conteudo .= "<br><strong>Produto: </strong>$produto \n";

	$email_conteudo .= "<br><strong>Quantidade: </strong>$quantidade \n"; 

	//$email_conteudo .= "<br><strong>Comprimento: </strong>$comprimento \n";

	//$email_conteudo .= "<br><strong>Largura: </strong>$largura \n";  

	//$email_conteudo .= "<br><strong>Altura: </strong>$altura \n"; 

	//$email_conteudo .= "<br><strong>Pinus: </strong>$pinus \n"; 

	//$email_conteudo .= "<br><strong>Mad_para: </strong>$mad_para \n"; 

	//$email_conteudo .= "<br><strong>Assunto: </strong>$assunto \n";

	//$email_conteudo .= "<br><strong>Assunto: </strong>$assunto \n";
	
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
			echo "
				<script language='javascript'>
					window.alert('Orçamento enviada com sucesso.');
					window.location = 'index.php?paginas=orcamento';
				</script>
				"; 
	}else{ 
			echo "
				<script language='javascript'>
					window.alert('Falha ao enviar seu orçamento.');
					window.location = 'index.php?paginas=orcamento';
				</script>
				"; 
	} 
	//====================================================
}
?>