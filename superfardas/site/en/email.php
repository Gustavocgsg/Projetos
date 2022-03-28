<?php 
//1 – Definimos Para quem vai ser enviado o email 

//$para = "gustavocgsg@gmail.com;"."idemal@idemal.com.br";

$para = "idemal@idemal.com.br";

//2 - resgatar o nome digitado no formulário e grava na variavel 

$nome = $_POST['name'];

$phone = $_POST['phone']; 

$email = $_POST['email'];

$assunto = $_POST['assunto']; 


//4 – Agora definimos a mensagem que vai ser enviado no e-mail 
$mensagem = "<strong>CONTACT FORM IN ENGLISH</strong>";
$mensagem .= "<br><br><strong>Full name: </strong>".$nome;
$mensagem .= "<br><br><strong>Telephone: </strong>".$phone;
$mensagem .= "<br><br><strong>E-Mail: </strong>".$email;
$mensagem .= "<br><br><strong>Message: </strong>".$assunto; 

//5 – agora inserimos as codificações corretas e tudo mais. 

$headers = "Content-Type:text/html; charset=UTF-8\n"; 
$headers .= "From: idemal.com.br IN ENGLISH <idemal@idemal.com.br>\n"; // Titulo de apresentação
//$headers .= "Cc: gustavocgsg@gmail.com\n"; //Copias de email

//Vai ser mostrado que o email partiu deste email e seguido do nome 

$headers .= "X-Sender: <idemal@idemal.com.br>\n"; //email do servidor que enviou 
$headers .= "X-Mailer: PHP v".phpversion()."\n"; 
$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
//$headers .= "Return-Path: <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para este email.

$headers .= "MIME-Version: 1.0\n"; mail($para, $assunto, $mensagem, $headers); //função que faz o envio do email.

// Página que será redirecionada

if($headers == true){
	echo "
	<script language='javascript'>
		window.alert('Message sent successfully.');
		window.location = 'index.php?pages=contact.php';
	</script>
	 "; 
}
?>