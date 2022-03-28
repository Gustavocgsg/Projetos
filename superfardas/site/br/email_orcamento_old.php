<?php
if (isset($_POST['btn-envia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$solicitante = $_POST['solicitante'];

	$id_cnpj = $_POST['id_cnpj']; 

	//$departamento = $_POST['departamento'];

	//$endereco = $_POST['endereco'];

	//$id_cep = $_POST['id_cep'];

	//$telefone = $_POST['telefone']; 

	$telefone_celular_whatsapp = $_POST['telefone_celular_whatsapp'];

	$email = $_POST['email']; 

	$produto = $_POST['produto'];

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
	$email_destinatario = "gustavocgsg@gmail.com, fernando.grasselli@gmail.com, contato@superfardas.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Orçamento - superfardas.com.br"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	
	$email_conteudo = "<strong>Solicitante: </strong>$solicitante \n";

	$email_conteudo .= "<br><strong>Cnpj: </strong>$id_cnpj \n"; 

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