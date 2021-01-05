<?php 


date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
	session_start();
	
}

/*
if(!isset($_SESSION['PED']['pedido'])){
	$_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
}

if(!isset($_SESSION['PED']['ref'])){
	$_SESSION['ref'] = date('ymdHms');
}
*/

require './lib/autoload.php';


$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();


//valores para o template
$smarty->assign('NOME', 'ISABELLA SANTOS DE SOUZA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_QUEMSOMOS', Rotas::pag_QuemSomos());
$smarty->assign('PAG_LOGIN', Rotas::pag_ClienteLogin());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('CATEGORIA', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRARANIMAL', Rotas::pag_CadastrarAnimal());
$smarty->assign('PAG_ANUNCIE', Rotas::pag_Anuncie());

if(Login::Logado()){
	$smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
	
}


$smarty->display('index.tpl');
 ?>