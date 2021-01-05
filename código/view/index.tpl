<!DOCTYPE html>
<html lang="en">
<head>
<title>{$TITULO_SITE}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/styles/bootstrap4/bootstrap.min.css">
<link href="{$GET_TEMA}/tema/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/styles/responsive.css">


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
									<a href="{$PAG_LOGIN}">
										Minha conta
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="{$PAG_LOGIN}"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a></li>
										<li><a href="{$PAG_CADASTRO}"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrar</a></li>
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
								<li><a href="{$GET_SITE_HOME}">início</a></li>
								<li><a href="{$PAG_PRODUTOS}">adote</a></li>

				
												
				{foreach from=$CATEGORIA item=C}
							{/foreach}
			                	<li><a href="{$PAG_CADASTRARANIMAL}">cadastrar animal</a></li>
								<li><a href="{$PAG_ANUNCIE}">anuncie</a></li>									
								<li><a href="{$PAG_QUEMSOMOS}">quem somos</a></li>							
								<li><a href="{$PAG_CONTATO}">contato</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="{$PAG_LOGIN}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
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
					<a href="{$GET_MINHACONTA}">
						Minha conta
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="{$PAG_MINHACONTA}"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a></li>
						<li><a href="{$PAG_MINHACONTA}"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrar</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">início</a></li>
				<li class="menu_item"><a href="{$PAG_ADOTE}">adote</a></li>
				<li class="menu_item"><a href="{$PAG_CONTATO}">cadastrar animal</a></li>
				<li class="menu_item"><a href="{$PAG_QUEMSOMOS}">quem somos</a></li>
				<li class="menu_item"><a href="{$PAG_CONTATO}">contato</a></li>

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
			{php}

			Rotas::get_Pagina();
		
			{/php}
		



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

<script src="{$GET_TEMA}/tema/js/jquery-3.2.1.min.js"></script>
<script src="{$GET_TEMA}/tema/styles/bootstrap4/popper.js"></script>
<script src="{$GET_TEMA}/tema/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{$GET_TEMA}/tema/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="{$GET_TEMA}/tema/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{$GET_TEMA}/tema/plugins/easing/easing.js"></script>
<script src="{$GET_TEMA}/tema/js/custom.js"></script>
</body>

</html>
