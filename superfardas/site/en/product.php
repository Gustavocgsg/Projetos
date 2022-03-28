        <!-- container -->
        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Best sellers</small>
                </h1>
			</div>
        </div>
        <!-- /.row -->
        <!-- Service Tabs -->
        <div class="row">
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
                	<?php require_once("../control/conn.php"); ?>
					<?php
                    
                        try{
                            $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='palete' LIMIT 8");
                            $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                            $consulta->execute();
                            
                            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                            $total = count($dados);
                    ?>
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Pallets</h4>
					<?php
					
					
					
						//aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
							
							//for($i=0; $total < 5; $i++){
					?>
                    
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-7">
                                <a href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                    <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>See details</i></a>
                            </div>
                        </div><!-- /.row -->
                        <hr>
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
                    <div id="ocultar">
                        <div class="row text-center">
                            <div class="col-sm-12 col-xs-12">
                                   <a id="revelar" class="btn btn-default" href="#">More products</a>
                            </div>   
                        </div> 
                    </div>
                    
                    <div id="esconder">
                        <div class="row">
						<?php
                        
                            try{
                            
                                $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='palete' LIMIT 8 OFFSET 8");
                                $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                                $consulta->execute();
                                
                                $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                                $total = count($dados);
                         ?>              
    
                        <?php
                            //aqui eu mostro os valores de minha consulta
                            foreach($dados as $linha){
                        ?>
                                <div class="col-md-7">
                                    <a href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                        <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <h3><?php echo"{$linha['titulo']}";?></h3>
                                    <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                    <p><?php echo"{$linha['resumo']}";?></p>
                                    <a class="btn btn-default" href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>See details</i></a>
                                </div>      
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
					<?php
                    
                        try{
                        
                            $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='caixa'");
                            $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                            $consulta->execute();
                            
                            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                            $total = count($dados);
                     ?>
                      <h4>Boxes</h4>
						<?php
                        //aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
						?>              
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-7">
                                <a href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                    <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>See details</i></a>
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
					<?php
                    
                        try{
                        
                            $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='prego'");
                            $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                            $consulta->execute();
                            
                            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                            $total = count($dados);
                     ?>
                        <h4>Screws</h4>
						<?php
                        //aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
						?>
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-7">
                                <a href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                                    <img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>See details</i></a>
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
					<?php
                    
                        try{
                        
                            $consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='especial'");
                            $consulta->bindParam(':tipo', $_GET['tipo'], PDO::PARAM_STR);
                            $consulta->execute();
                            
                            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
                            $total = count($dados);
                            
                     ?> 
                        <h4>Special</h4>
						<?php
                        //aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
						?>
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-7">
                                <a href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
									<img class="img-responsive img-hover" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3><?php echo"{$linha['titulo']}";?></h3>
                                <h4><?php echo"{$linha['subtitulo']}";?></h4>
                                <p><?php echo"{$linha['resumo']}";?></p>
								<a class="btn btn-default" href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>"><i>See details</i></a>
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
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row --> 
        <!-- /.Service List -->        
        </div>
        <!-- /.container -->