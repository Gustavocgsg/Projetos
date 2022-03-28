<!DOCTYPE HTML>
<html lang="en">
    
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <link href="../images/x_icon.png" rel="shortcut icon" type="image/x-icon"/>
        <link href="../images/x_icon.png" rel="icon" type="image/x-icon"/>

        <title>Idemal - Index</title>
    
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom CSS -->
        <link href="../css/business-frontpage.css" rel="stylesheet">
        
        <!-- Personalization CSS -->
        <link href="../css/personalization.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Add jQuery library --><!-- JS ocultar e apresentar -->
        <script language="javascript" type="text/javascript" src="../js/jquery-1.12.0.min.js"></script>
		
        <!-- biblioteca on-line -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->    
        
        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
    
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    </head>
    
	<script type="text/javascript">
	
	/* efeito de revelar e esconder */
        $(document).ready(function(){
           $("#revelar").click(function(){
                $("#esconder").slideToggle("slow");
				$("#ocultar").css('display', 'none');
			});
        });

	/* efeito de galeria de imagens */
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});		 
		
	/* Alterar o tipo de título, velocidade sobreposição de encerramento */
		$("#fancybox-effects-a").fancybox({
			helpers: {
				title : {
				 type : 'outside'
				},
				overlay : {
					speedOut : 0
				}
			}
		});
		
    </script>  
    
    <body>
    
		<?php include_once "menu.php";?>
        <?php include_once "pages.php";?>
		<?php include_once "footer.php";?>
    
    </body>
</html>
