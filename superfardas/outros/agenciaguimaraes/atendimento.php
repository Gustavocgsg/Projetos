<meta charset="utf-8">

<script language="JavaScript" >
	
	function enviardados(){

		if(document.formContato.nome.value=="" || document.formContato.nome.value.length < 8)
		{
		alert( "Preencha campo NOME corretamente!" );
		document.formContato.nome.focus();
		return false;
		}

		if(document.formContato.telefone.value=="" || document.formContato.telefone.value.length < 9)
		{
		alert( "Preencha campo TELEFONE corretamente!" );
		document.formContato.telefone.focus();
		return false;
		}	

		if( document.formContato.email.value=="" || document.formContato.email.value.indexOf('@')==-1 || document.formContato.email.value.indexOf('.')==-1 )
		{
		alert( "Preencha campo E-MAIL corretamente!" );
		document.formContato.email.focus();
		return false;
		}

		if (document.formContato.assunto.value=="")
		{
		alert( "Preencha o campo MENSAGEM!" );
		document.formContato.assunto.focus();
		return false;
		}

		if (document.formContato.assunto.value.length < 25 )
		{
		alert( "É necessario preencher o campo MENSAGEM com mais de 25 caracteres!" );
		document.formContato.assunto.focus();
		return false;
		}

		return true;
	}
 
</script>
                 
        <!-- container -->
        <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">-->        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/business-frontpage.css" rel="stylesheet" type="text/css">     
        <link href="css/personalization.css" rel="stylesheet" type="text/css">
        
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agência Guimarães - Atendimento
                        <small>Solicite um orçamento</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
				<div class="col-md-12">
                   
                    <!-- Embedded Google Map -->
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15800.03911587663!2d-34.89442136392155!3d-8.100483913031928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMDYnMDEuOCJTIDM0wrA1MycwOC40Ilc!5e0!3m2!1spt-BR!2sbr!4v1525957330169" width="100%" height="400" frameborder="0" style="border-radius: 10px;" allowfullscreen></iframe> -->
                    <!-- Embedded Google Map -->
				</div>                            
                <div class="col-md-8">

                  <form method="POST" action="email.php" name="formContato" name="sentMessage" id="formContato" onsubmit="return enviardados();" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Nome Completo:</label>
                                <input type="sol" class="form-control" name="nome" id="nome" required data-validation-required-message="Escreva o nome do solicitante do orçamento">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Telefone:</label>
                              <input type="tel" class="form-control" name="telefone" id="telefone" required data-validation-required-message="Informe o número de telefone.">
                              <p class="help-block"></p>
                            </div>
                        </div>  
                         <div class="control-group form-group">
                            <div class="controls">
                                <label>Email:</label>
                              <input type="mail" class="form-control" name="email" id="email" required data-validation-required-message="Informe o sei email.">
                              <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Mensagem:</label>
                                <textarea rows="10" cols="100" rows="10" class="form-control" name="assunto" id="assunto" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>                                           
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <!--<button type="submit" name="BTEnvia" class="btn btn-default">Enviar</button>-->
                        <input type="submit" class="btn btn-default" name="btn-envia" value="Enviar">
                    </form>
					<br>
                </div>
                <!-- mapa do google -->
                
                <div class="col-sm-4">
                <!-- mapa do brasil -->
                	<!--<img class="img-circle img-responsive img-center" src="../images/img_maps.png" alt="">-->
                    <!--<h3 class="text-center">Endereço</h3>-->
                    <!--<p class="text-center">Rua Marques Amorim, 314 <br> Boa Vista, Recife - PE <br> CEP: 50.070-395 <br></p>-->
                <!-- /.mapa do brasil -->
                
                <!-- contato -->
                    <img class="img-responsive img-center img-rounded" src="../images/img_callcenter.png" alt="">
                    <h3 class="text-center">Entre em Contato</h3><!--<span class="glyphicon glyphicon-earphone"></span>-->
                    <h2 class="text-center">
                     	<strong>Fone</strong><br>
                        <strong>(81) 9-9218-5304</strong><br>
                  </h2>
                </div>
                <!-- /.contato -->                  

          </div>
            <!-- /.row -->
    
            <!--<hr>-->
      
        </div>
        <!-- /.container -->      