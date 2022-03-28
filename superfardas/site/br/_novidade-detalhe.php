        <!-- container -->
        <div class="container">
		<?php

			$id = addslashes(trim($_GET["id"]));
			$caderno = addslashes($_GET["caderno"]);

		try{
			$consulta = $pdo->prepare("SELECT * FROM noticia WHERE id=:id");
			$consulta->bindParam(':id', $id, PDO::PARAM_STR);
			$consulta->execute();

			$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
			//$total = count($dados);

			foreach($dados as $linha){

		?>	           
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo"{$linha['materia']}";?>
                        <small></small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3">
					<a href="?paginas=produto"><img class="img-responsive" style="border-radius: 10px;" src="../images/noticias/img_fire.png"></a>
                </div>
				<div class="row">			
					<div class="col-md-9 col-sm-9">
						<img class="img-responsive secundaria" src="<?php echo "../images/noticias/{$linha['img_secundaria']}" ?>" alt="...">
						<h3>
							<?php echo"{$linha['submateria']}";?>
						</h3>
						<p><?php echo"{$linha['conteudo']}";?></p>
						<p>Autor: <?php echo"{$linha['autor']}";?></p>
						<p>Publicação: <strong><?php echo"{$linha['publicacao']}";?></strong></p>
					</div>
					<!-- /.col-md-4 col-sm-4 -->

				</div><!-- /.row --> 
				<hr> 
            </div>
            <!-- /.row --> 
		<?php
				}
			}
			catch(PDOExcception $erro){
				echo $erro->getmessage();
			}									
		?>                         
        </div><!-- /.container -->