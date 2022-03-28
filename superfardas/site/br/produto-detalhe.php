        <!-- container -->
        <div class="container">
		<?php
			$id = addslashes(trim($_GET["id"]));
			$tipo = addslashes($_GET["tipo"]);
			
			$consulta = $pdo->prepare("SELECT id, foto, descricao, especificacao, legenda FROM produtos WHERE id=:id");
			$consulta->bindParam(':id', $id, PDO::PARAM_STR);
			$consulta->execute();
			
			$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
			//$total = count($dados);
		 ?>            
            <!-- Portfolio Item Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Produtos
                        <small>Fardamentos Profissionais</small>
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
                    <h3>Descrição do produto</h3>
                    <p><?php echo"{$linha['descricao']}";?></p>
                    <h3>Detalhes técnicos</h3>
                    <ul>
                        <li><?php echo"{$linha['especificacao']}";?></li>
                    </ul>
                </div>
            <?php }?>
            </div><!-- /.row -->
 
            <!-- Related Projects Row -->
            <div class="row">
            
                 
                <div class="col-lg-12">
                    <h3 class="page-header">Conheça mais</h3>
                </div>
				<?php
					$id = addslashes(trim($_GET["id"]));
					$tipo = addslashes($_GET["tipo"]);
                    
					try{
                    
					if($tipo == 'fire'){
							$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='fire'");
						}elseif($tipo == 'basic'){
							$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='basic'");
							}elseif($tipo == 'brim'){
							$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='brim'");
								}elseif($tipo == 'prime'){
								$consulta = $pdo->prepare("SELECT * FROM produtos WHERE tipo='prime'");
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

                    <a href="?paginas=produto-detalhes&id=<?php echo"{$linha['id']}";?>&tipo=<?php echo"{$linha['tipo']}";?>" class="thumbnail">
                        <img class="img-responsive portfolio-item" src="<?php echo"../images/produtos/{$linha['foto']}";?>" alt="<?php echo"{$linha['legenda']}";?>">
                    </a>
					<p class="legenda"><strong><?php echo"{$linha['legenda']}"; ?></strong></p>
                </div>
				<?php
                        }
                    }
                    catch(PDOExcception $erro){
                        echo $erro->getmessage();
                    }									
                ?>

                </div><!-- /.row -->        
        </div><!-- /.container -->