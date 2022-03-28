        <!-- container -->
        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Produtos
                    <small>Conheça nossa linha de uniformes</small>
                </h1>
			</div>
        </div>
        <!-- /.row -->
        <!-- Service Tabs -->
        <div class="row">               
        
			<!-- linhas -->
			<div class="col-md-4 col-sm-4">
                <ul id="myTab" class="supertab nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab">Linha Fire</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab">Linha Basic</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab">Linha Prime</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab">Linha Brim</a>
                    </li>
                </ul>
                <br>
				<div class="row">
					<?php

						try{
							$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' AND id='19'");
							$consulta->bindParam(':caderno', $_GET['caderno'], PDO::PARAM_STR);
							$consulta->execute();

							$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
							$total = count($dados);

							//aqui eu mostro os valores de minha consulta
							foreach($dados as $linha){
					?>   				
						
						<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>">
							<img class="img-responsive primaria" src="<?php echo "../images/noticias/{$linha['img_primaria']}";?>" alt="...">
						</a>
						<h4>
							<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['materia']}";?></a>
							<small><?php echo"{$linha['caderno']}";?></small>
						</h4>
						<p><a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['chamada']}";?></a></p>

					<?php
							}
						}
						catch(PDOExcception $erro){
							echo $erro->getmessage();
						}									
					?>
				</div>
				<!-- /.row -->
				<hr>                
				<div class="row">
					<?php

						try{
							$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' AND id='34'");
							$consulta->bindParam(':caderno', $_GET['caderno'], PDO::PARAM_STR);
							$consulta->execute();

							$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
							$total = count($dados);

							//aqui eu mostro os valores de minha consulta
							foreach($dados as $linha){
					?>   				
						
						<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>">
							<img class="img-responsive primaria" src="<?php echo "../images/noticias/{$linha['img_primaria']}";?>" alt="...">
						</a>
						<h4>
							<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['materia']}";?></a>
							<small><?php echo"{$linha['caderno']}";?></small>
						</h4>
						<p><a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['chamada']}";?></a></p>

					<?php
							}
						}
						catch(PDOExcception $erro){
							echo $erro->getmessage();
						}									
					?>
				</div>
				<!-- /.row -->
            </div>
			<!-- /.col-md-4 col-sm-4 -->
            
			<!-- /.linhas -->              
            <div class="col-lg-8">
            
                <!--<ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Basic</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Brim</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Fire</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Prime</a>
                    </li>
                </ul>-->
            
                <div id="myTabContent" class="tab-content">
                	<?php //require_once("../control/conn.php"); ?>
					<?php
                    
                        try{
                            $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='fire' LIMIT 8");
                            $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                            $consulta->execute();
                            
                            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                            $total = count($dados);
                    ?>
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Linha Fire</h4>
                        
                         <div class="row">
                            <div class="col-md-12">
								<iframe width="100%" height="380" src="https://www.youtube.com/embed/us35-i_hLTc" style="border-radius: 10px;" frameborder="0" gesture="media" allowfullscreen></iframe>
                            	<br><br>
                            </div>
						</div>
					<?php
						//aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
							
							//for($i=0; $total < 5; $i++){
					?>
                    
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-5">
                                <a href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                    <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>Ver detalhes</i></a>
                            </div>
                        </div><!-- /.row -->
                        
					<?php
								//break;
								//}
							}
                        }
                        catch(PDOExcception $erro){
                            echo $erro->getmessage();
                        }									
					?> 
                        
                    <!-- /----------------------------------------------------------------------/ -->
                    <!--<div id="ocultar">
                        <div class="row text-center">
                            <div class="col-sm-12 col-xs-12">
                                   <a id="revelar" class="btn btn-default" href="#">Mais produtos</a><br><br>
                            </div>   
                        </div> 
                    </div>-->
                    
                    <div id="esconder">
                        <div class="row">
						<?php
                        
						try{

							$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='fire' LIMIT 8 OFFSET 8");
							$consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
							$consulta->execute();

							$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
							$total = count($dados);

                            //aqui eu mostro os valores de minha consulta
                            foreach($dados as $linha){
                        ?>
                        <div class="row">
                            <div class="col-md-5">
                                <a href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                    <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>Ver detalhes</i></a>
                            </div>
                        </div><!-- /.row -->    
                        <?php
                                
                                }
                            }
                            catch(PDOExcception $erro){
                                echo $erro->getmessage();
                            }									
                        ?> 
                        </div><!-- row -->
                        
                    </div><!-- esconder -->
                    <!-- /----------------------------------------------------------------------/ -->
                                     
                    </div>
                    <!-- /.service-one -->
                    <div class="tab-pane fade" id="service-two">
                    	<h4>Linha Basic</h4>
						<?php
                    
                        try{
                        
                            $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='basic'");
                            $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                            $consulta->execute();
                            
                            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                            $total = count($dados);
  
                        //aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
							
						?>              
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-5">
                                <a href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                    <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>Ver detalhes</i></a>
                            </div>
                        </div>
                        <!-- /.row -->
                      	<hr>
						<?php
							}
                        }
                        catch(PDOExcception $erro){
                            echo $erro->getmessage();
                        }									
                        ?>
                        <hr>
                    </div>
                    <!-- /.service-two -->
                    <div class="tab-pane fade" id="service-three">
                    	<h4>Linha Prime</h4>
						<?php
                    
                        try{
                        
                            $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='prime'");
                            $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                            $consulta->execute();
                            
                            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                            $total = count($dados);

                        //aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
							
						?>
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-5">
                                <a href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                    <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>Ver detalhes</i></a>
                            </div>
                        </div>
                        <!-- /.row -->
						<?php
							}
                        }
                        catch(PDOExcception $erro){
                            echo $erro->getmessage();
                        }									
                        ?> 
                    </div>
                    <!-- /.service-three -->
                    <div class="tab-pane fade" id="service-four">
						<h4>Linha Brim</h4>
							<?php

							try{

								$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='brim'");
								$consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
								$consulta->execute();

								$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
								$total = count($dados);

								//aqui eu mostro os valores de minha consulta
								foreach($dados as $linha){

							?>
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-5">
                                <a href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
									<img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>Ver detalhes</i></a>
                            </div>
                        </div>
                        <!-- /.row -->
						<?php
							}
                        // fechando a conexão
                        $pdo = null;
                        }
                        catch(PDOExcception $erro){
                            echo $erro->getmessage();
                        }									
                        ?>  
                        <hr>
                    </div>
                    <!-- /.service-four-->
                </div>
            
            </div>
            <!-- /.col-lg-9 -->           
        </div>
        <!-- /.row --> 
        <!-- /.Service List -->        
        </div>
        <!-- /.container -->