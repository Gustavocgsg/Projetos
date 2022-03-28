<?php
  if($_POST['id_cnpj']){
    
   
  }
?>

<script language="JavaScript" >
	
	function enviardados(){

		if(document.formContato.solicitante.value=="" || document.formContato.solicitante.value.length < 8)
		{
		alert( "Preencha campo SOLICITANTE corretamente!" );
		document.formContato.solicitante.focus();
		return false;
		}
		
		//if(document.formContato.id_cnpj.value=="" || document.formContato.id_cnpj.value.length < 14)
		//{
		//alert( "Preencha campo CNPJ corretamente!" );
		//document.formContato.id_cnpj.focus();
		//return false;
		//}
		
		if(document.formContato.telefone_celular_whatsapp.value=="" || document.formContato.telefone_celular_whatsapp.value.length < 9)
		{
		alert( "Preencha campo TELEFONE | CELULAR | WHATSAPP  corretamente!" );
		document.formContato.telefone_celular_whatsapp.focus();
		return false;
		}	

		if( document.formContato.email.value=="" || document.formContato.email.value.indexOf('@')==-1 || document.formContato.email.value.indexOf('.')==-1 )
		{
		alert( "Preencha campo E-MAIL corretamente!" );
		document.formContato.email.focus();
		return false;
		}
		
		if(document.formContato.quantidade.value=="" || document.formContato.quantidade.value.length < 1)
		{
		alert( "Preencha campo QUANTIDADE  corretamente!" );
		document.formContato.quantidade.focus();
		return false;
		}
		

    
//	// essa função recebe o nome "comum" ao checkboxes e a quantidade dos mesmos
//    function verificar( nome, quantidade ) {
//		saida = "Os checkboxes checados são:";
//	
//		// itera baseado na quantidade de elementos
//		for ( i = 0; i < quantidade; i++ ) {
//		
//			// obtém cada elemento pelo id
//		    checkBox = document.getElementById( nome + ( i + 1 ) );
//		    
//			// se o checkbox estiver marcado, adiciona mais uma linha na string de saida.
//		    if ( checkBox.checked ) {
//		        saida += "\n" + checkBox.value;
//		    }
//		}
//		// mostra a saída
//		alert( saida );
//	}

		
		
		
		//if (document.formContato.assunto.value=="")
//		{
//		alert( "Preencha o campo MENSAGEM!" );
//		document.formContato.assunto.focus();
//		return false;
//		}
//
//		if (document.formContato.assunto.value.length < 25 )
//		{
//		alert( "É necessario preencher o campo MENSAGEM com mais de 25 caracteres!" );
//		document.formContato.assunto.focus();
//		return false;
//		}

		return true;
	}
 
</script>
        <!-- container -->
        <div class="container">     
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Orçamento
                        <small>Realize aqui sua cotação</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
            <!--?paginas=email_orca-->
                <div class="col-md-8">
                  <h3>Orçamento</h3>
                  <form method="POST" action="?paginas=email_orca" name="formContato" name="sentMessage" id="formContato" onsubmit="return enviardados();" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Nome do Solicitante:</label>
                                <input type="sol" class="form-control" name="solicitante" id="solicitante" required data-validation-required-message="Escreva o nome do solicitante do orçamento">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>CNPJ: (Opicional)</label>
                                <!--<input type="cgc" class="form-control" name="id_cgc" id="id_cgc" required data-validation-required-message="Escreva o CGC.">-->
                                <input type="cnpj" class="form-control" name="id_cnpj" id="id_cnpj" required data-validation-required-message="Escreva o CNPJ.">
                                <p class="help-block"></p>
                            </div>
                        </div>                
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Departamento:</label>
                              <input type="dep" class="form-control" name="departamento" id="departamento" required data-validation-required-message="Escreva o nome do departamento">
                                <p class="help-block"></p>
                            </div>
                        </div>-->
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Endereço:</label>
                              <input type="end" class="form-control" name="endereco" id="Endereço" required data-validation-required-message="Escreva o dendereço da empresa.">
                              <p class="help-block"></p>
                            </div>
                        </div>-->
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Cep:</label>
                              <input type="cep" class="form-control" name="id_cep" id="id_cep" required data-validation-required-message="Informe o número do CEP.">
                              <p class="help-block"></p>
                            </div>
                        </div>-->
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Telefone:</label>
                              <input type="tel" class="form-control" name="telefone" id="telefone" required data-validation-required-message="Informe o número de telefone.">
                              <p class="help-block"></p>
                            </div>
                        </div>-->  
                         <div class="control-group form-group">
                            <div class="controls">
                                <label>Telefone | Celular | Whatsapp:</label>
                              <input type="telefone_celular_whatsapp" class="form-control" name="telefone_celular_whatsapp" id="telefone_celular_whatsapp" required data-validation-required-message="Informe o número para o Telefone | Celular | Whatsapp.">
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
                         <!-- Service Tabs -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="page-header"><strong>Selecione o produto a ser orçado</strong></h5>
                            </div>
                            <div class="col-lg-12">
								<strong>Vizualize os modelos</strong>
								<br><br>								
								<a class="btn btn-default" class="fancybox" id="fancybox-effects-a" href="../images/painel_orcamento_superfardas.png" title="">
								 <!--<img class="" class="fancybox" src="" alt="Vizualizar modelos">-->
									<i class="fancybox" href="">Visualizar</i>
								</a>
								<br><br>                             	
                            </div>                           
                            <div class="col-lg-12">
                
                                <ul id="myTab" class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Modelo</a>
                                    </li>
                                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Tecido</a>
                                    </li>
                                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Cor</a>
                                    </li>
                                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Detalhes</a>
                                    </li>
                                </ul>
                
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="service-one">
                                       	<h4>Modelo</h4>
										<div class="col-lg-6">
											<strong>FIRE</strong>
											<br>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_profissional_retardante_a_chamas" value="camisa_profissional_retardante_a_chamas" name="modfire[]">Camisa Profissional Retardante a chamas
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="calca_pijama_retardante_a_chamas" value="calca_pijama_retardante_a_chamas" name="modfire[]">Calça Pijama Retardante a chamas
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="calca_profissional_retardante_a_chamas" value="calca_profissional_retardante_a_chamas" name="modfire[]">Calça Profissional Retardante a chamas
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="balaclava" value="balaclava" name="modfire[]">Acessório Balaclava
											</label>										
											<br>
											<strong>BASIC</strong>
											<br>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_polo_masculina" value="camisa_polo_masculina" name="modbasic[]">Camisa polo masculina
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_polo_feminina" value="camisa_polo_feminina" name="modbasic[]">Camisa polo feminina
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_gola_careca" value="camisa_gola_careca" name="modbasic[]">Camisa gola careca
											</label>
											<br>
											<strong>PRIME</strong>
											<br>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_social_masculina" value="camisa_social_masculina" name="modprime[]">Camisa social masculina
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_social_feminina" value="camisa_social_feminina" name="modprime[]">Camisa social feminina
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="calca_social_masculina" value="calca_social_masculina" name="modprime[]">Calça social masculina
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="calca_social_feminina" value="calca_social_feminina" name="modprime[]">Calça social feminina
											</label>
											
										</div>
										<div class="col-lg-6">
											<strong>BRIM</strong>
											<br>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_gola_v" value="camisa_gola_v" name="modbrim[]">Camisa gola V
											</label>                                            
											<label class="checkbox-inline">    
												<input type="checkbox" id="camisa_profissional" value="camisa_profissional" name="modbrim[]">Camisa profissional
											</label>                                            
											<label class="checkbox-inline">
												<input type="checkbox" id="bata_curta" value="bata_curta" name="modbrim[]">Bata curta
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bata_media" value="bata_media" name="modbrim[]">Bata media
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bata_longa" value="bata_longa" name="modbrim[]">Bata longa
											</label>                                            
											<label class="checkbox-inline">    
												<input type="checkbox" id="bata_curta_gola_padre" value="bata_curta_gola_padre" name="modbrim[]">Bata curta gola padre
											</label>                                            
											<label class="checkbox-inline">
												<input type="checkbox" id="bata_media_gola_padre" value="bata_media_gola_padre" name="modbrim[]">Bata media gola padre
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bata_longa_gola_padre" value="bata_longa_gola_padre" name="modbrim[]">Bata longa gola padre
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="camisa_gola_italiana" value="camisa_gola_italiana" name="modbrim[]">Camisa gola italiana
											</label>                                           
										
										</div>
										<div class="col-lg-4">
											<label class="checkbox-inline">    
												<input type="checkbox" id="calca_profissional" value="calca_profissional" name="modbrim[]">Calça profissional
											</label>                                   
											<label class="checkbox-inline">
												<input type="checkbox" id="calca_profissional_½_elastico" value="calca_profissional_½_elastico" name="modbrim[]">Calça profissional ½ elástico
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="calca_tradicional" value="calca_tradicional" name="modbrim[]">Calça tradicional
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="calca_tradicional_½_elastico" value="calca_tradicional_½_elastico" name="modbrim[]">Calça tradicional ½ elástico
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bermuda_pijama" value="bermuda_pijama" name="modbrim[]">Bermuda pijama
											</label>
											<label class="checkbox-inline">    
												<input type="checkbox" id="bermuda_profissional" value="bermuda_profissional" name="modbrim[]">Bermuda profissional
											</label>                                        
											<label class="checkbox-inline">
												<input type="checkbox" id="macacao" value="macacao" name="modbrim[]">Macacão
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="avental" value="avental" name="modbrim[]">Avental
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="gorro" value="gorro" name="modbrim[]">Gorro
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="touca" value="touca" name="modbrim[]">Touca
											</label>
																													
										</div>																				
									</div>
                                    <div class="tab-pane fade" id="service-two">
										<h4>Tecido</h4>
										<div class="row">
											<div class="col-lg-6">
												<strong>FIRE</strong>
												<br>
												<strong>Uniforte</strong>
												<br>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_laranja_1012" value="uniforte_laranja_1012" name="tecuniforte[]">Uniforte laranja 1012
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_azul_celeste_1003" value="uniforte_azul_celeste_1003" name="tecuniforte[]">Uniforte azul celeste 1003
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_azul_royal_1014" value="uniforte_azul_royal_1014" name="tecuniforte[]">Uniforte azul royal 1014
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_cinza_1009" value="uniforte_cinza_1009" name="tecuniforte[]">Uniforte cinza 1009
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_areia_1010" value="uniforte_areia_1010" name="tecuniforte[]">Uniforte areia 1010
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_caqui_1021" value="uniforte_caqui_1021" name="tecuniforte[]">Uniforte caqui 1021
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_verde_petrobras_1155" value="uniforte_verde_petrobras_1155" name="tecuniforte[]">Uniforte verde petrobras 1155
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uniforte_azul_marinho_1018" value="uniforte_azul_marinho_1018" name="tecuniforte[]">Uniforte azul marinho 1018
												</label>
												<br>
												<strong>Unisafe</strong>
												<br>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uinisafe_azul_celeste_1003" value="uinisafe_azul_celeste_1003" name="tecunisafe[]">Uinisafe azul celeste 1003
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uinisafe_azul_royal_1014" value="uinisafe_azul_royal_1014" name="tecunisafe[]">Uinisafe azul royal 1014
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uinisafe_cinza_1009" value="uinisafe_cinza_1009" name="tecunisafe[]">Uinisafe cinza 1009
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="uinisafe_laranja_1234" value="uinisafe_laranja_1234" name="tecunisafe[]">Uinisafe laranja 1234
												</label>
												<br>
												<strong>Unipar</strong>
												<br>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unipar_azul_royal_1014" value="unipar_azul_royal_1014" name="tecunipar[]">Unipar azul royal 1014
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unipar_cinza_1009" value="unipar_cinza_1009" name="tecunipar[]">Unipar cinza 1009
												</label> 
												<label class="checkbox-inline">
												   <input type="checkbox" id="unipar_areia_1010" value="unipar_areia_1010" name="tecunipar[]">Unipar areia 1010
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unipar_caqui_1010" value="unipar_caqui_1010" name="tecunipar[]">Unipar caqui 1010
												</label>

											</div><!-- /.col-lg-6 -->                                                                                                                                                   
											<div class="col-lg-6">
												<strong>BASIC</strong>
												<br>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_azul_royal" value="fio_de_escocia_azul_royal" name="tecbasic[]">Fio de escocia azul royal
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_azul_marinho" value="fio_de_escocia_azul_marinho" name="tecbasic[]">Fio de escocia azul marinho
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_vermelho" value="fio_de_escocia_vermelho" name="tecbasic[]">Fio de escocia vermelho
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_verde_bandeira" value="fio_de_escocia_verde_bandeira" name="tecbasic[]">Fio de escocia verde bandeira
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_laranja" value="fio_de_escocia_laranja" name="tecbasic[]">Fio de escocia laranja
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_cinza_escuro" value="fio_de_escocia_cinza_escuro" name="tecbasic[]">Fio de escocia cinza escuro
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_cinza_claro" value="fio_de_escocia_cinza_claro" name="tecbasic[]">Fio de escocia cinza claro
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_de_escocia_amarelo_canario" value="fio_de_escocia_amarelo_canario" name="tecbasic[]">Fio de escocia amarelo canario
												</label>											
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_azul_royal" value="fio_30_azul_royal" name="tecbasic[]">Fio 30 azul royal
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_azul_marinho" value="fio_30_azul_marinho" name="tecbasic[]">Fio 30 azul marinho
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_azul_vermelho" value="fio_30_azul_vermelho" name="tecbasic[]">Fio 30 azul vermelho
												</label>											
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_verde_bandeira" value="fio_30_verde_bandeira" name="tecbasic[]">Fio 30 verde bandeira
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_laranja" value="fio_30_laranja" name="tecbasic[]">Fio 30 laranja
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_cinza_escuro" value="fio_30_cinza_escuro" name="tecbasic[]">Fio 30 cinza escuro
												</label>											
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_cinza_claro" value="fio_30_cinza_claro" name="tecbasic[]">Fio 30 cinza claro
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="fio_30_amarelo_canario" value="fio_30_amarelo_canario" name="tecbasic[]">Fio 30 amarelo canario
												</label>

											</div><!-- /.col-lg-6 -->
                                    	</div><!-- /.row -->
                                    	<hr>
                                    	<div class="row">
											<div class="col-lg-6">
												<strong>PRIME</strong>
												<br>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unioffice_camisaria_azul_mescla_3004" value="unioffice_camisaria_azul_mescla_3004" name="tecprime[]">Unioffice camisaria azul mescla 3004
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unioffice_camisaria_azul_celeste_3017" value="unioffice_camisaria_azul_celeste_3017" name="tecprime[]">Unioffice camisaria azul celeste 3017
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unioffice_camisaria_cinza_3002" value="unioffice_camisaria_cinza_3002" name="tecprime[]">Unioffice camisaria cinza 3002
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unioffice_camisaria_verde_mescla_3013" value="unioffice_camisaria_verde_mescla_3013" name="tecprime[]">Unioffice camisaria verde mescla 3013
												</label>
												<label class="checkbox-inline">
												   <input type="checkbox" id="unioffice_camisaria_branca" value="unioffice_camisaria_branca" name="tecprime[]">Unioffice camisaria branca
												</label>                                       		

											</div><!-- /.col-lg-6 -->
											<div class="col-lg-6">
											   <strong>BRIM</strong>
											   <br>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_azul_royal_1014" value="brim_uniforte_azul_royal_1014" name="tecbrim[]">Brim Uniforte azul royal 1014
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_laranja_1012" value="brim_uniforte_laranja_1012" name="tecbrim[]">Brim uniforte laranja 1012
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_cinza_1009" value="brim_uniforte_cinza_1009" name="tecbrim[]">Brim uniforte cinza 1009
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_vermelho_1013" value="brim_uniforte_vermelho_1013" name="tecbrim[]">Brim uniforte vermelho 1013
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_verde_bandeira_1015brim_uniforte_verde_bandeira_1015" value="" name="tecbrim[]">Brim uniforte verde bandeira 1015
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_azul_marinho_1018" value="brim_uniforte_azul_marinho_1018" name="tecbrim[]">Brim uniforte azul marinho 1018
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_vinho_1164" value="brim_uniforte_vinho_1164" name="tecbrim[]">Brim uniforte vinho 1164
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_azul_celeste_1003" value="brim_uniforte_azul_celeste_1003" name="tecbrim[]">Brim uniforte azul celeste 1003
											   </label>
											   <label class="checkbox-inline">
												   <input type="checkbox" id="brim_uniforte_branco_1001" value="brim_uniforte_branco_1001" name="tecbrim[]">Brim uniforte branco 1001
											   </label>
											   											
											</div><!-- /.col-lg-6 -->                                    	
                                    	</div><!-- /.row -->                                     	

                                    </div>
                                    
                                    <div class="tab-pane fade" id="service-three">
                                        <h4>Cor</h4>
                                        <div class="row">
											<div class="col-lg-6">
												<strong>FIRE</strong>
												<br>
												<label class="checkbox-inline">
													<input type="checkbox" id="laranja_1012" value="laranja_1012" name="corfire[]">Laranja 1012
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_celeste_1003" value="azul_celeste_1003" name="corfire[]">Azul celeste 1003
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_royal_1014" value="azul_royal_1014" name="corfire[]">Azul royal 1014
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="cinza_1009" value="cinza_1009" name="corfire[]">Cinza 1009
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="areia_1010" value="areia_1010" name="corfire[]">Areia 1010
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="caqui_1021" value="caqui_1021" name="corfire[]">Caqui 1021
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="verde_petrobras_1155" value="verde_petrobras_1155" name="corfire[]">Verde petrobras 1155
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_marinho_1018" value="azul_marinho_1018" name="corfire[]">Azul Marinho 1018
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="laranja_1234" value="laranja_1234" name="corfire[]">Laranja 1234
												</label>

											</div><!-- /.col-lg-6 -->
											<div class="col-lg-6">
												<strong>BASIC</strong>
												<br>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_royal_1014" value="azul_royal_1014" name="corbasic[]">Azul royal 1014
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_marinho" value="azul_marinho" name="corbasic[]">Azul marinho
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="vermelho" value="vermelho" name="corbasic[]">Vermelho
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="verde_bandeira" value="verde_bandeira" name="corbasic[]">Verde bandeira
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="laranja" value="laranja" name="corbasic[]">Laranja
												</label>                                                                                
												<label class="checkbox-inline">
													<input type="checkbox" id="cinza_1009" value="cinza_1009" name="corbasic[]">Cinza 1009
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="laranja_1234" value="laranja_1234" name="corbasic[]">Laranja 1234
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="cinza_escuro" value="cinza_escuro" name="corbasic[]">Cinza escuro
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="cinza_claro" value="cinza_claro" name="corbasic[]">Cinza claro
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="amarelo_canario" value="amarelo_canario" name="corbasic[]">Amarelo canário
												</label>

											</div><!-- /.col-lg-6 -->
                                        </div><!-- /.row -->                                           

                                        <div class="row">
											<div class="col-lg-6">
												<strong>PRIME</strong>
												<br>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_mescla_3004" value="azul_mescla_3004" name="corprime[]">Azul mescla 3004
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_celeste_3017" value="azul_celeste_3017" name="corprime[]">Azul celeste 3017
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="cinza_3002" value="cinza_3002" name="corprime[]">Cinza 3002
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="verde_mescla_3013" value="verde_mescla_3013" name="corprime[]">Verde mescla 3013
												</label>
                                      		 
                                       		</div><!-- /.col-lg-6 -->
                                       		
											<div class="col-lg-6">
												<strong>BRIM</strong>
												<br>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_royal_1014" value="azul_royal_1014" name="corbrim[]">Azul Royal 1014
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="laranja_1012" value="laranja_1012" name="corbrim[]">Laranja 1012
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="cinza_1009" value="cinza_1009" name="corbrim[]">Cinza 1009
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="vermelho_1013" value="vermelho_1013" name="corbrim[]">Vermelho 1013
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="verde_bandeira_1015" value="verde_bandeira_1015" name="corbrim[]">Verde bandeira 1015
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_marinho_1018" value="azul_marinho_1018" name="corbrim[]">Azul Marinho 1018
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="vinho_1164" value="vinho_1164" name="corbrim[]">Vinho 1164
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="azul_celeste_1003" value="azul_celeste_1003" name="corbrim[]">Azul celeste 1003
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" id="branco_1001" value="branco_1001" name="corbrim[]">Branco 1001
												</label>
                                       		</div><!-- /.col-lg-6 -->                                         		                                        	
										</div><!-- /.row -->
                                                                                
                                    </div>                                                                              

                                    <div class="tab-pane fade" id="service-four">
                                        <h4>Detalhes</h4>
                                        <div class="col-lg-4">
											<strong>BORDADO</strong>
											<br>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_bolso" value="bordado_bolso" name="detbordado[]">Bordado bolso
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_peito" value="bordado_peito" name="detbordado[]">Bordado peito
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_maga_direita" value="bordado_maga_direita" name="detbordado[]">Bordado maga direita
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_maga_esquerda" value="bordado_maga_esquerda" name="detbordado[]">Bordado maga esquerda
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_perna_direita" value="bordado_perna_direita" name="detbordado[]">Bordado perna direita
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_perna_esquerda" value="bordado_perna_esquerda" name="detbordado[]">Bordado perna esquerda
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_bolso_traseiro" value="bordado_bolso_traseiro" name="detbordado[]">Bordado bolso traseiro
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="bordado_bolso_lateral" value="bordado_bolso_lateral" name="detbordado[]">Bordado bolso lateral
											</label>
                                       
                                        </div><!-- /.col-lg-4 -->
                                        <div class="col-lg-4">
											<strong>SLIK</strong>
											<br>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_bolso" value="silk_bolso" name="detslik[]">Silk bolso
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_peito" value="silk_peito" name="detslik[]">Silk peito
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_maga_direita" value="silk_maga_direita" name="detslik[]">Silk maga direita
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_maga_esquerda" value="silk_maga_esquerda" name="detslik[]">Silk maga esquerda
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_perna_direita" value="silk_perna_direita" name="detslik[]">Silk perna direita
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_perna_esquerda" value="silk_perna_esquerda" name="detslik[]">Silk perna esquerda
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_bolso_traseiro" value="silk_bolso_traseiro" name="detslik[]">Silk bolso traseiro
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="silk_bolso_lateral" value="silk_bolso_lateral" name="detslik[]">Silk bolso lateral
											</label>
                                       
                                        </div><!-- /.col-lg-4 -->
                                        <div class="col-lg-4">
											<strong>FITA</strong>
											<br>
											<label class="checkbox-inline">
												<input type="checkbox" id="fita_refletiva_2_cm" value="fita_refletiva_2_cm" name="detfita[]">Fita refletiva 2cm
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" id="fita_refletiva_5_cm" value="fita_refletiva_5_cm" name="detfita[]">Fita refletiva 5cm
											</label>
                                        </div><!-- /.col-lg-4 -->                                                                                

                                    </div>
                                </div><!-- /.myTabContent -->
                
                            </div><!-- /.col-lg-12 -->
                        </div>
                        <!-- Service List -->                
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Quantidade:</label>
                                <input type="text" required class="form-control" name="quantidade" id="quantidade" data-validation-required-message="Informe a quantidade.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Dimenssões:</label> (em milimetro)
                                <br/>
                                <label class="checkbox-inline">
                                    Comprimento<input type="text" class="form-control" name="comprimento" id="comprimento" required data-validation-required-message="Informe a comprimento.">
                                </label>
                                <label class="checkbox-inline">
                                    Largura<input type="text" class="form-control" name="largura" id="largura" required data-validation-required-message="Informe a largura.">
                                </label>
                                <label class="checkbox-inline">
                                    Altura<input type="text" class="form-control" name="altura" id="altura" required data-validation-required-message="Informe a altura.">
                                </label>
                                <p class="help-block"></p>
                            </div>
                        </div>-->
                        <!--<div class="control-group form-group">
                            <div class="controls">
                                <label>Material desejado:</label>
                                <br>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="pinus" value="pinus" name="pinus">Pinus
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="mad_para" value="mad_para" name="mad_para">Madeira do pará
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="outros" value="outros" name="outros">Outros
                                </label>
                                <label class="checkbox-inline">
                                    <input type="text" class="form-control" name="text_outros" id="text_outros" required data-validation-required-message="Informe a outros.">
                                </label>
                                <p class="help-block"></p>
                            </div>
                        </div>-->                        
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <!--<button type="submit" class="btn btn-default">Enviar</button>-->
                        <!--<input type="submit" class="btn btn-default" name="btn-envia" value="Enviar" onclick="verificar( 'item', 9 )">-->
                        <input type="submit" class="btn btn-default" name="btn-envia" value="Enviar">
                    </form>
                </div>
                <!-- contato -->
                <div class="col-sm-4">
                    <img class="img-responsive img-center img-rounded" src="../images/img_capa_catalogo_pdf.png" alt="">

                    <h3 class="text-center">Catálogo completo de produtos</h3>
                    <p class="text-center">
						<a class="btn btn-default" href="../pdf/catalogo_superfardas_download.pdf">Baixar catálogo</a></a><br>
                        
                       	<!--<strong>Fax</strong><br>
                        55-81-34391902-->
                  </p>                    
                    <img class="img-responsive img-center img-rounded" src="../images/img_callcenter.png" alt="">
                    <h3 class="text-center">Entre em Contato</h3>
                    <h2 class="text-center">
                     	<strong>Fone</strong><br>
                        <strong>(81) 3877.8451</strong><br>
                        
                       	<!--<strong>Fax</strong><br>
                        55-81-34391902-->
                  </h2>
                </div>
                <!-- /.contato -->                
          </div>
            <!-- /.row -->
    
            <hr>
      
        </div>
        <!-- /.container -->