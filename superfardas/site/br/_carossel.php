		<?php include_once "carossel.php";?>
        <!-- carossel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicadores -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
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
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Voltar</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Seguir</span>
          </a>
        </div>
        <!-- /.carossel -->