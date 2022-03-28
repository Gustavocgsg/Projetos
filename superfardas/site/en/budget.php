        <!-- container -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Budget
                        <small>Perform here your quote</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
            
                <div class="col-md-8">
                  <h3>Budget</h3>
                  <form method="POST" action="?pages=email_budget" name="formContato" name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Applicant Name:</label>
                                <input type="sol" class="form-control" name="solicitante" id="solicitante" required data-validation-required-message="Escreva o nome do solicitante do orçamento">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>CGC:</label>
                                <input type="cgc" class="form-control" name="id_cgc" id="id_cgc" required data-validation-required-message="Escreva o CGC.">
                                <p class="help-block"></p>
                            </div>
                        </div>                
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Department:</label>
                              <input type="dep" class="form-control" name="departamento" id="departamento" required data-validation-required-message="Escreva o nome do departamento">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Address:</label>
                              <input type="end" class="form-control" name="endereco" id="Endereço" required data-validation-required-message="Escreva o dendereço da empresa.">
                              <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Zip code:</label>
                              <input type="cep" class="form-control" name="id_cep" id="id_cep" required data-validation-required-message="Informe o número do CEP.">
                              <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Telephone:</label>
                              <input type="tel" class="form-control" name="telefone" id="telefone" required data-validation-required-message="Informe o número de telefone.">
                              <p class="help-block"></p>
                            </div>
                        </div>  
                         <div class="control-group form-group">
                            <div class="controls">
                                <label>Fax:</label>
                              <input type="fax" class="form-control" name="fax" id="Fax" required data-validation-required-message="Informe o número para o Fax.">
                              <p class="help-block"></p>
                            </div>
                        </div>
                         <div class="control-group form-group">
                            <div class="controls">
                                <label>E-mail:</label>
                              <input type="mail" class="form-control" name="email" id="email" required data-validation-required-message="Informe o sei email.">
                              <p class="help-block"></p>
                            </div>
                        </div>
                         <!-- Service Tabs -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="page-header"><strong>Select the product to be budgeted</strong></h5>
                            </div>
                            <div class="col-lg-12">
                
                                <ul id="myTab" class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Pallets</a>
                                    </li>
                                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Boxes</a>
                                    </li>
                                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Screws</a>
                                    </li>
                                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Special</a>
                                    </li>
                                </ul>
                
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="service-one">
                                        <h4>Pallets</h4>
                                        <label class="checkbox-inline">
                                        	<input type="checkbox" id="ID1" value="ID1" name="produto">ID1
                                        </label>                                            
                                        <label class="checkbox-inline">    
                                            <input type="checkbox" id="ID2" value="ID2" name="produto">ID2
                                        </label>                                            
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID3" value="ID3" name="produto">ID3
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID4" value="ID4" name="produto">ID4
                                        </label>
                                        <label class="checkbox-inline">
                                        	<input type="checkbox" id="ID5" value="ID5" name="produto">ID5
                                        </label>                                            
                                        <label class="checkbox-inline">    
                                            <input type="checkbox" id="ID6" value="ID6" name="produto">ID6
                                        </label>                                            
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID7" value="ID7" name="produto">ID7
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID8" value="ID8" name="produto">ID8
                                        </label>
                                        <label class="checkbox-inline">
                                        	<input type="checkbox" id="ID9" value="ID9" name="produto">ID9
                                        </label>                                           
                                        <label class="checkbox-inline">    
                                            <input type="checkbox" id="ID10" value="ID10" name="produto">ID10
                                        </label>                                        
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID11" value="ID11" name="produto">ID11
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID12" value="ID12" name="produto">ID12
                                        </label>
                                        <br />
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID13" value="ID13" name="produto">ID13
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID14" value="ID14" name="produto">ID14
                                        </label>                         
                                    </div>
                                    <div class="tab-pane fade" id="service-two">
                                        <h4>Boxes</h4>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID15" value="ID15" name="produto">ID15
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID16" value="ID16" name="produto">ID16
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID17" value="ID17" name="produto">ID17
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="ID18" value="ID18" name="produto">ID18
                                        </label>
                                    </div>
                                    <div class="tab-pane fade" id="service-three">
                                        <h4>Screws</h4>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="PREGOS" value="PREGOS" name="produto">PREGOS
                                        </label>
                                    </div>
                                    <div class="tab-pane fade" id="service-four">
                                        <h4>Special</h4>
                                        <p>Conteudos ?</p>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                        <!-- Service List -->                
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>The amount:</label>
                                <input type="text" required class="form-control" name="quantidade" id="quantidade" data-validation-required-message="Informe a quantidade.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Dimensions:</label> (in millimeters)
                                <br/>
                                <label class="checkbox-inline">
                                    Length<input type="text" class="form-control" name="comprimento" id="comprimento" required data-validation-required-message="Informe a comprimento.">
                                </label>
                                <label class="checkbox-inline">
                                    Width<input type="text" class="form-control" name="largura" id="largura" required data-validation-required-message="Informe a largura.">
                                </label>
                                <label class="checkbox-inline">
                                    Height<input type="text" class="form-control" name="altura" id="altura" required data-validation-required-message="Informe a altura.">
                                </label>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>desired material:</label>
                                <br>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="pinus" value="PINOS" name="pinus">Pinus
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="mad_para" value="MADEIRA DO PARÁ" name="mad_para">Wood of Pará
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="outros" value="OUTROS" name="outros">Others
                                </label>
                                <label class="checkbox-inline">
                                    <input type="text" class="form-control" name="text_outros" id="text_outros" required data-validation-required-message="Informe a outros.">
                                </label>
                                <p class="help-block"></p>
                            </div>
                        </div>                         
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-default">Send</button>
                    </form>
                </div>
                <!-- mapa do brasil -->
                <div class="col-sm-4">
                	<img class="img-responsive img-center" src="../images/img_map_brasil.png" alt="">
                </div>
                <!-- /.mapa do brasil -->
                
                <!-- contato -->
                <div class="col-sm-4">
                    <img class="img-circle img-responsive img-center" src="../images/img_callcenter.png" alt="">
                    <h3 class="text-center">Contact</h3>
                    <p class="text-center">
                     	<strong>Phone</strong><br>
                        55-81-34391519<br>
                        55-81-34391534<br>
                        
                       	<strong>Fax</strong><br>
                        55-81-34391902
                  </p>
                </div>
                <!-- /.contato -->                
          </div>
            <!-- /.row -->
    
            <hr>
      
        </div>
        <!-- /.container -->