        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Novidades
                        <small></small>
                    </h1>
                </div><!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">           
				<?php

					try{
						$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' ORDER BY id DESC LIMIT 4");
						$consulta->bindParam(':caderno', $_GET['caderno'], PDO::PARAM_STR);
						$consulta->execute();

						$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
						$total = count($dados);

						//aqui eu mostro os valores de minha consulta
						foreach($dados as $linha){
				?>                    
				<div class="row">
				
					<div class="col-md-4 col-sm-4">
						<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>">
							<img class="img-responsive primaria" src="<?php echo "../images/noticias/{$linha['img_primaria']}";?>" alt="...">
						</a>
					</div><!-- /.col-md-4 col-sm-4 -->
					<div class="col-md-8 col-sm-8">
						<h2>
							<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['materia']}";?></a>
							<small><?php echo"{$linha['caderno']}";?></small>
						</h2>
						<p><a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['chamada']}";?></a></p>
						<p>Publicação: <strong><?php echo"{$linha['publicacao']}";?></strong></p>
					</div><!-- /.col-md-8 col-sm-8 -->

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
				<!-- ocultar -->
				<div id="ocultar">
				<div class="row text-center">
					<div class="col-md-12 col-sm-12">
						   <a id="revelar" class="btn btn-default" href="#">Mais produtos</a>
					</div>   
				</div> 
				</div>
				<!-- ocultar -->


				<!-- esconder -->
				<div id="esconder">
					<div class="row">           
						<?php

							try{
								$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' ORDER BY id DESC LIMIT 20 OFFSET 4");
								$consulta->bindParam(':caderno', $_GET['caderno'], PDO::PARAM_STR);
								$consulta->execute();

								$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
								$total = count($dados);

								//aqui eu mostro os valores de minha consulta
								foreach($dados as $linha){
						?>                    
						<div class="row">

							<div class="col-md-4 col-sm-4">
								<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>">
									<img class="img-responsive primaria" src="<?php echo "../images/noticias/{$linha['img_primaria']}";?>" alt="...">
								</a>
							</div><!-- /.col-md-4 col-sm-4 -->
							<div class="col-md-8 col-sm-8">
								<h2>
									<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['materia']}";?></a>
									<small><?php echo"{$linha['caderno']}";?></small>
								</h2>
								<p><a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['chamada']}";?></a></p>
								<p>Publicação: <strong><?php echo"{$linha['publicacao']}";?></strong></p>
							</div><!-- /.col-md-8 col-sm-8 -->

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
					</div><!-- /.row -->  
				</div>
				<!-- esconder -->                                 
            </div>
            <!-- /.row -->            
        </div><!-- /.container -->