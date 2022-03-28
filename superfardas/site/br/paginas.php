<?php

$paginas = isset( $_GET['paginas'] ) ? $_GET['paginas'] : null;

switch($paginas)
{
	case 'home':
	include ("../br/home.php");
	break;
	
	case 'empresa':
	include("../br/empresa.php");
	break;
		
	case 'novidade':
	include("novidade.php");
	break;		
	
	case 'novidade-detalhe';
	include("novidade-detalhe.php");
	break;		
		
	case 'produto';
	include("produto.php");
	break;
	
	case 'produto-detalhes';
	include("produto-detalhe.php");
	break;
	
	case 'paletes';
	include("../br/paletes.php");
	break;
	
	case 'caixas';
	include("../br/caixas.php");
	break;
	
	case 'parafusos';
	include("../br/parafusos.php");
	break;
	
	case 'especiais';
	include("../br/especiais.php");
	break;
	
	case 'orcamento':
	include("../br/orcamento.php");
	break;
	
	case 'atendimento';
	include("atendimento.php");
	break;

	case 'email';
	include("../br/email.php");
	break;

	case 'email_orca';
	include("../br/email_orcamento.php");
	break;

	default:
	include("../br/home.php");
	break;
}
?>