

<?php 

$smarty = new Template();


$smarty->assign('BANNER', Rotas::get_ImagePasta());


$smarty->display('home.tpl');

include_once Rotas::get_Pasta_Controller() .'/produtos.php';

 ?>