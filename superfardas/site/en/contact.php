        <!-- container -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact
                        <small>Our location</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
         
                <div class="col-md-8">

                    <!-- Embedded Google Map -->
                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                    <!-- Embedded Google Map -->

                  <form method="POST" action="?pages=email" name="formContato" name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full name:</label>
                                <input type="sol" class="form-control" name="name" id="name" required data-validation-required-message="Escreva o nome do solicitante do orçamento">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Telephone:</label>
                              <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Informe o número de telefone.">
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
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" name="assunto" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>                                           
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-default">Send</button>
                    </form>
                </div>
                <!-- mapa do google -->
                <div class="col-sm-4">
                	<img class="img-circle img-responsive img-center" src="../images/img_maps.png" alt="">
                    <h3 class="text-center">Address</h3>
                    <p class="text-center">Street Carmela <br> Dutra, 623 <br> People's Village - PE<br></p>
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