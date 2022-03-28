<?php
if (isset($_POST['btn-envia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone']; 	
	$email = $_POST['email'];
	$mensagem = $_POST['assunto'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "contato@superfardas.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "gustavocgsg@gmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Agência Guimarães - agenciaguimaraes.com.br"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "<strong>Nome: </strong>$nome \n"; 
	$email_conteudo .= "<br><strong>Email: </strong>$email \n";
	$email_conteudo .= "<br><strong>Telefone: </strong>$telefone \n"; 
	$email_conteudo .= "<br><strong>Mensagem: </strong>$mensagem \n"; 
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
					window.alert('Mensagem enviada com sucesso.');
					window.location = 'atendimento.php';
				</script>
				"; 
	}else{ 
			echo "
				<script language='javascript'>
					window.alert('Falha ao enviar sua menssagem.');
					window.location = 'atendimento.php';
				</script>
				"; 
	} 
	//====================================================
}
?>