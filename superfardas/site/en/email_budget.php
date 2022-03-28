<?php 
//1 – Definimos Para quem vai ser enviado o email 

//$para = "gustavocgsg@gmail.com;"."idemal@idemal.com.br";

$para = "idemal@idemal.com.br";

//2 - resgatar o nome digitado no formulário e grava na variavel 

$solicitante = $_POST['solicitante'];

$id_cgc = $_POST['id_cgc']; 

$departamento = $_POST['departamento'];

$endereco = $_POST['endereco'];

$id_cep = $_POST['id_cep'];

$telefone = $_POST['telefone']; 

$fax = $_POST['fax'];

$email = $_POST['email']; 

$produto = $_POST['produto'];

$quantidade = $_POST['quantidade']; 

$comprimento = $_POST['comprimento'];

$largura = $_POST['largura'];  

$altura = $_POST['altura'];  

$pinus = $_POST['pinus'];  

$mad_para = $_POST['mad_para'];  

$assunto = $_POST['outros'];  

$assunto = $_POST['text_outros'];  

//4 – Agora definimos a mensagem que vai ser enviado no e-mail 
$mensagem = "<strong>BUDGET FORM IN ENGLISH</strong>";

$mensagem .= "<br><br><strong>Requester:</strong>".$solicitante; 

$mensagem .= "<br><br><strong>CGC:</strong>".$id_cgc;

$mensagem .= "<br><br><strong>Department:</strong>".$departamento;

$mensagem .= "<br><br><strong>Address:</strong>".$endereco;

$mensagem .= "<br><br><strong>Zip code:</strong>".$id_cep;

$mensagem .= "<br><br><strong>Telephone:</strong>".$telefone; 

$mensagem .= "<br><br><strong>Fax:</strong>".$fax;

$mensagem .= "<br><br><strong>E-mail:</strong>".$email;

$mensagem .= "<br><br><strong>Product:</strong>".$produto; 

$mensagem .= "<br><br><strong>Amount:</strong>".$quantidade; 

$mensagem .= "<br><br><strong>Length:</strong>".$comprimento; 

$mensagem .= "<br><br><strong>Width:</strong>".$largura;

$mensagem .= "<br><br><strong>Height:</strong>".$altura;

$mensagem .= "<br><br><strong>Pinus:</strong>".$pinus;

$mensagem .= "<br><br><strong>Wood of Pará:</strong>".$mad_para;   

$mensagem .= "<br><br><strong>Others:</strong>".$outros;

$mensagem .= "<br><br><strong>Others2:</strong>".$text_outros; 


//5 – agora inserimos as codificações corretas e tudo mais. 

$headers = "Content-Type:text/html; charset=UTF-8\n"; 
$headers .= "From: idemal.com.br BUDGET FORM IN ENGLISH<idemal@idemal.com.br>\n"; // Titulo de apresentação
//$headers .= "Cc: gustavocgsg@gmail.com\n"; //Copias de email

//Vai ser mostrado que o email partiu deste email e seguido do nome 

$headers .= "X-Sender: <idemal@idemal.com.br>\n"; //email do servidor que enviou 
$headers .= "X-Mailer: PHP v".phpversion()."\n"; 
$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
//$headers .= "Return-Path: <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para este email.

$headers .= "MIME-Version: 1.0\n"; mail($para, $solicitante, $mensagem, $headers); //função que faz o envio do email.

// Página que será redirecionada

if($headers == true){
	echo "
	<script language='javascript'>
		window.alert('Message sent successfully.');
		window.location = 'index.php?pages=budget.php';
	</script>
	 "; 
}
?>