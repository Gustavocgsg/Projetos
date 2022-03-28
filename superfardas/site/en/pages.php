<?php

//seleção para conteudo em inglês

$pages = isset( $_GET['pages'] ) ? $_GET['pages'] : null;

switch($pages)
{
	case 'home':
	include ("../en/home.php");
	break;
	
	case 'company':
	include("../en/company.php");
	break;

	case 'product';
	include("../en/product.php");
	break;
	
	case 'product-detail';
	include("../en/product-detail.php");
	break;
	
	case 'pallets';
	include("../en/pallets.php");
	break;
	
	case 'boxes';
	include("../en/boxes.php");
	break;
	
	case 'screws';
	include("../en/screws.php");
	break;
	
	case 'special';
	include("../en/special.php");
	break;
	
	case 'budget':
	include("../en/budget.php");
	break;

	case 'email_budget':
	include("../en/email_budget.php");
	break;	

	case 'contact';
	include("../en/contact.php");
	break;
	
	case 'email';
	include("../en/email.php");
	break;

	default:
	include("../en/home.php");
	break;
}
?>