	    <?php require_once("../control/conn.php"); ?>
		<?php
			$id = addslashes(trim($_GET["id"]));
			$tipo = addslashes($_GET["tipo"]);
			
			$consulta = $pdo->prepare("SELECT id, foto, descricao, especificacao, legenda FROM produtos WHERE id=:id");
			$consulta->bindParam(':id', $id, PDO::PARAM_STR);
			$consulta->execute();
			
			$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
			//$total = count($dados);
		?>
        
        <!-- container -->
        <div class="container">
            
            <!-- Portfolio Item Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Palletes</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            
            <!-- Portfolio Item Row -->
            <div class="row">
			<?php
                    //aqui eu mostro os valores de minha consulta
                    foreach($dados as $linha){
             ?>     
                <div class="col-md-8">
                    <a class="thumbnail" class="fancybox" id="fancybox-effects-a" href="<?php echo"../images/produtos/{$linha['foto']}"; ?>" title="<?php echo"{$linha['legenda']}"; ?>" >
                     <img class="img-responsive" class="fancybox" src="<?php echo"../images/produtos/{$linha['foto']}"; ?>" alt="<?php echo"{$linha['legenda']}"; ?>">
                    </a>         
                </div>

                <div class="col-md-4">
                    <h3>Product Description</h3>
                    <p><?php echo"{$linha['descricao']}";?></p>
                    <h3>Technical details</h3>
                    <ul>
                        <li><?php echo"{$linha['especificacao']}";?></li>
                    </ul>
                </div>
            <?php }?>
            </div><!-- /.row -->
 
            <!-- Related Projects Row -->
            <div class="row">
            <div class="esconder">
                 
                <div class="col-lg-12">
                    <h3 class="page-header">Learn more</h3>
                </div>
				<?php
					$id = addslashes(trim($_GET["id"]));
					$tipo = addslashes($_GET["tipo"]);
                    
					try{
                    
					if($tipo == 'palete'){
							$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='palete'");
						}elseif($tipo == 'caixa'){
							$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='caixa'");
							}elseif($tipo == 'prego'){
							$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='prego'");
								}elseif($tipo == 'especial'){
								$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='especial'");
								}
							
						$consulta->bindParam(':tipo', $tipo, PDO::PARAM_STR);
						$consulta->execute();
						
						$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
						$total = count($dados);
				?>
				<?php
						//aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
                 ?>
                <div class="col-sm-3 col-xs-6">
                    <a href="?pages=product-detail&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                        <img class="img-responsive portfolio-item" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                    </a>
                </div>
				<?php
                        }
                    }
                    catch(PDOExcception $erro){
                        echo $erro->getmessage();
                    }									
                ?>
                </div><!-- /.esconder -->
                </div><!-- /.row -->
                
            <!--<div class="row text-center">
                <div class="col-sm-12 col-xs-12">
                    <div id="ocultar">
                       <a id="revelar" class="btn btn-default" href="#">Mais produtos</a>
                    </div>   
                </div>   
            </div> -->
            <!-- /.row -->            
        </div><!-- /.container -->