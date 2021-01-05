<?php
/* Smarty version 3.1.36, created on 2020-10-10 15:38:06
  from 'C:\xampp2\htdocs\tccpets\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f81ff8e9e3549_87016539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1952395e93b4c40b5a17cfc6530444304e6599' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tccpets\\view\\index.tpl',
      1 => 1602354751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f81ff8e9e3549_87016539 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/styles/responsive.css">


</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">ENCONTRE AQUI SEU NOVO MELHOR AMIGO</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

		
								</li>
								<li class="account">
									<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
">
										Minha conta
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrar</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#"><span>ADOTA PETS</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">início</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">adote</a></li>

				
												
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIA']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRARANIMAL']->value;?>
">cadastrar animal</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ANUNCIE']->value;?>
">anuncie</a></li>									
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_QUEMSOMOS']->value;?>
">quem somos</a></li>							
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">contato</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
"><i class="fa fa-user" aria-hidden="true"></i></a></li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

                   
                     
                       
  		

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_MINHACONTA']->value;?>
">
						Minha conta
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrar</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">início</a></li>
				<li class="menu_item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADOTE']->value;?>
">adote</a></li>
				<li class="menu_item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">cadastrar animal</a></li>
				<li class="menu_item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_QUEMSOMOS']->value;?>
">quem somos</a></li>
				<li class="menu_item"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">contato</a></li>

			</ul>
			


		</div>
	</div>



 

	<br></br><br></br>

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
				
					<div class="section_title new_arrivals_title">
					
					</div>
				</div>
			</div>
<br></br>
			<?php 

			Rotas::get_Pagina();
		
			?>
		



	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-smile-o " aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>FELICIDADE</h6>
							<p>Imagina a felicidade do seu novo melhor amigo ao perceber que foi escolhido?</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-users" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>LEVE FELICIDADE</h6>
							<p>Foi comprovado que os animais trazem ainda mais felicidade as famílias</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>DÊ UM LAR</h6>
							<p>Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>NÃO PERCA TEMPO</h6>
							<p>Adote agora mesmo seu novo melhor amigo</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Notificações</h4>
						<p>Inscreva-se e receba notificação a cada animal incluido</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="http://www.facebook.com/adotapets"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="http://www.twitter.com/adotapets"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="http://www.instagram.com/adotapets"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="http://www.pinterest.com/adotapets"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

	</footer>

</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/styles/bootstrap4/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/styles/bootstrap4/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/plugins/Isotope/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/plugins/OwlCarousel2-2.2.1/owl.carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/plugins/easing/easing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/custom.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
