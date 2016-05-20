<!doctype html>
<!--[if lt IE 7 ]> <html> <![endif]-->
<!--[if IE 7 ]>    <html> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); if(is_home()||is_page('inicio')) { echo ' | '; bloginfo('description'); } ?></title>
	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php endwhile; endif; elseif(is_home()) : ?>
	<meta name="description" content="" />
	<?php else: ?>
	<meta name="description" content=""> 
	<?php endif; ?>
	<meta name="keywords" content="" />	
	<?php if(is_home() || is_single() || is_page()) { echo '<meta name="robots" content="index,follow" />'; } else { echo '<meta name="robots" content="noindex,follow" />'; } ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<!-- styles / fonts -->
	<link href='https://fonts.googleapis.com/css?family=Exo:400,700,600,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,600,300' rel='stylesheet' type='text/css'>
	<!-- styles / fonts -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" media="screen" />
	<!--[if lt IE 9]>
	    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<![endif]-->
<?php wp_head();?>
</head>

<body <? if(!(is_front_page()) || is_page() && !is_page('inicio') || is_category()) { ?>id="generica" <? } ?><?php body_class(); ?>>
	<div id="wrapper">
		<!--header-->
		<header id="header" class="header clearfix">
			<nav id="top-menu" class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="row">
						<div class="informacion clearfix">
							<p class="breaking">
								<span>i</span>
								Breang News:
							</p>
							<div class="alerta">
								<?php do_action('show_bnt'); ?>
							</div>
						</div>
						<div class="collapse navbar-collapse colapsables">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php bloginfo('wpurl'); ?>" class="active">ES</a></li>
						        <li><a href="<?php bloginfo('wpurl'); ?>/en/">EN</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>

			<nav id="menu-principal" class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="row clearfix">
						<div class="nav-toggler-movil">
							<div id="logotipo" class="navbar-header">
								<a class="clearfix" href="<?php bloginfo('wpurl'); ?>/">
									<img src="<?php bloginfo('template_directory'); ?>/img/logo.png">								
								</a>
							</div>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".colapsables">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>	
						</div>	

						<div class="collapse navbar-collapse colapsables">
							<?php wp_nav_menu( array('menu' => 'Menu Principal', 'menu_class' => 'nav navbar-nav', 'walker' => new wp_bootstrap_navwalker())); ?>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!--/header-->