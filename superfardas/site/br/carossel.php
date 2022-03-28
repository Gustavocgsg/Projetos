		<?php //include_once "carossel.php";?>
	<div class="row">       
        <!-- carossel -->
        <div id="banner-full" class="carousel slide" data-ride="carousel">
          <!-- Indicadores -->
          <ol class="carousel-indicators">
            <li data-target="#banner-full" data-slide-to="0" class="active"></li>
            <li data-target="#banner-full" data-slide-to="1"></li>
            <li data-target="#banner-full" data-slide-to="2"></li>
          </ol>
    
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="../images/banner_01.png" alt="...">
            </div>
            <div class="item">
              <img src="../images/banner_02.png" alt="...">
            </div>
            <div class="item">
              <img src="../images/banner_03.png" alt="...">
            </div>
          </div><!-- carousel-inner -->
          
          <!-- Controls -->
          <a class="left carousel-control" href="#banner-full" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Voltar</span>
          </a>
          <a class="right carousel-control" href="#banner-full" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Seguir</span>
          </a>
        </div>
        <!-- /.carossel -->
	</div>
    <!-- /.row -->     
	<script>
		/*================================================
				Tempo de execução de cada slide
		================================================*/
		$(document).ready(function(){
			$('.carousel').carousel({
				interval:9000,
				keyboard:true
			});
		});
		/*================================================
				Tempo de execução de cada slide
		================================================*/ 	
	</script>