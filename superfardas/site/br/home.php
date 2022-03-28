		<?php include_once "../br/carossel.php";?>
        <!-- Page Content -->
        <div class="container">
        
        	<br>
 
			<?php
				//$id = addslashes(trim($_GET["id"]));

				//try{
					//$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' ORDER BY data DESC LIMIT 1");
					//$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' AND id='37'");
					//$consulta->bindParam(':caderno', $_GET['caderno'], PDO::PARAM_STR);
					//$consulta->execute();

					//$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
					//$total = count($dados);

					//aqui eu mostro os valores de minha consulta
					//foreach($dados as $linha){
			?>

			<!--<div class="row">

				<div class="col-md-4 col-sm-4">
					<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>">
						<img class="img-responsive primaria" src="<?php echo "../images/noticias/{$linha['img_primaria']}";?>" alt="...">
					</a>
				</div>
				<div class="col-md-8 col-sm-8">
					<h2><?php echo $id;?>
						<a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['materia']}";?></a>
						<small><?php echo"{$linha['caderno']}";?></small>
					</h2>
					<p><a href="?paginas=novidade-detalhe&id=<?php echo"{$linha['id']}";?>&caderno=<?php echo"{$linha['caderno']}";?>"><?php echo"{$linha['chamada']}";?></a></p>
					<p>Publicação: <strong><?php echo"{$linha['publicacao']}";?></strong></p>
				</div>

			</div>-->
			<!-- /.row -->
			<hr>
			<?php
					//}
				//}
				//catch(PDOExcception $erro){
					//echo $erro->getmessage();
				//}									
			?>  
 			<div class="row">
				<div class="col-sm-12 col-md-12">
					<a href="https://www.viasolrecife.com.br/superfardas" target="_blank"><img class="img-responsive img-center img-rounded" src="../images/banner_loja_superfardas_site_v2.png" alt=""></a>
				</div>      	
			</div>
                      
            <hr>
            
            <div class="row">
                <div class="col-sm-4">
                    <a href="?paginas=produto"><img class="img-responsive img-center img-rounded" src="../images/img_linha_fire.png" alt=""></a>
                    <a href="?paginas=produto"><h2 class="text-center">Linha Fire</h2></a>
                    <p class="text-center">Há 20 anos atuando no ramo de Confecção e Comercialização de Uniformes Profissionais em Pernambuco, a SuperFardas se destaca por sua inovação e da qualidade de seus produtos e serviços.</p>
                    <p class="text-center">
                        <a class="btn btn-default" href="?paginas=produto">Ver Detalhes</a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <a href="?paginas=produto"><img class="img-responsive img-center img-rounded" src="../images/img_lista_produtos.png" alt=""></a>
                    <a href="?paginas=produto"><h2 class="text-center">Produtos</h2></a>
                    <p class="text-center">Nossa empresa conta com a melhor materia prima disponivel no mercado, confira alguns de nosso produtos.</p>
                    <p class="text-center">
                        <a class="btn btn-default" href="?paginas=produto">Ver Detalhes</a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <a href="?paginas=orcamento"><img class="img-responsive img-center img-rounded" src="../images/img_solicitar_orcamento.png" alt=""></a>
                    <a href="?paginas=orcamento"><h2 class="text-center">Orçamentos</h2></a>
                    <p class="text-center">Não perca mais tempo, faça agora mesmo um orçamento sem compromisso, e descubra o que a Super Fardas pode lhe oferecer.</p>
                    <p class="text-center">
                        <a class="btn btn-default" href="?paginas=orcamento">Ver Detalhes</a>
                    </p>
                </div>
            </div>
            <!-- /.row -->
    
            <hr>
                 
 			<div class="row">
				<div class="col-sm-12 col-md-12">
				    <a href="https://www.viasolpraia.com.br/" target="_blank"><img class="img-responsive img-center img-rounded" src="../images/banner_loja_viasol_site_novo_v5.png" alt=""></a>
				</div>      	
			</div>      
            
            <hr>
			<?php
				$id = addslashes(trim($_GET["id"]));
			
				try{
					$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' ORDER BY id DESC LIMIT 2");
					//$consulta = $pdo->prepare("SELECT * FROM noticia WHERE caderno='Novidades' AND id='36'");
					$consulta->bindParam(':caderno', $_GET['caderno'], PDO::PARAM_STR);
					$consulta->execute();

					$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
					$total = count($dados);

					
					//$consulta_ultimas  = $conecta->prepare($sql_ultimas);
					//$consulta_ultimas->execute(array($id));		
					//$resultado_ultimas = $consulta_ultimas->fetchALL(PDO::FETCH_ASSOC);					
					
					
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
            
            <hr>      
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
				    <h2>Vídeo</h2>
				    <p>Teste oficial realizado diretamente na Espanha, com um de nossos fardamentos retardantes a chama.</p>
				    <iframe width="100%" height="480" src="https://www.youtube.com/embed/us35-i_hLTc" style="border-radius: 10px;" frameborder="0" gesture="media" allowfullscreen></iframe>
				</div>
			</div>                    
            
            <hr>
            
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2>Localização</h2>
					<!-- Embedded Google Map -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.376327068947!2d-34.89324598468739!3d-8.06304199419452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18c42e0b412b%3A0x335a2af423e295d4!2sRua+Marques+Amorim%2C+314+-+Boa+Vista%2C+Recife+-+PE%2C+50070-330!5e0!3m2!1spt-BR!2sbr!4v1503319878213" width="100%" height="400" frameborder="0" style="border-radius: 10px;" allowfullscreen></iframe>					
					<!-- Embedded Google Map -->
				</div>      	
			</div>
          
           <hr>              
            
            <div class="row">
                <div class="col-sm-12">
                    <h2>Parceiros</h2>
                </div>
                <div class="col-sm-12">
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/santanense.png" alt=""><br>                 
					</div>
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/cedro.png" alt=""><br>          
					</div>
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/farbe.png" alt=""><br>                 
					</div>
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/coats.png" alt=""><br>                
					</div>
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/ykk.png" alt=""><br>                  
					</div>
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/matesa.png" alt=""><br>                  
					</div>
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/ita.png" alt="">                  
					</div>
					<div class="col-sm-3">
						<img class="img-responsive img-center img-rounded" src="../images/viasol.png" alt="">                  
					</div>                                                     
                </div>                       
            </div>
            <!-- /.row -->            
        </div>
        <!-- /.container -->