<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?>  <?php bloginfo( 'description' ); ?></title>
		<meta charset=<?php bloginfo('charset'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	    <!-- <link rel='stylesheet' id='google-font-open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' type='text/css' media='all' />-->
	</head>
	<?php wp_head(); ?>
	<body id="homePage" data-spy="scroll" data-target=".navbar" data-offset="50">
			<div class='row'>
				<div class='col-sm-9 div-logo'>
					<a href="http://localhost/wp/"><img src='<?php echo get_bloginfo('template_directory');?>/images/logo1.png' class='concept-logo img img-responsive' /></a>				
				</div>
				<div class='col-sm-3 top-right-menu'>
					<div class="col-sm-3">
						<?php if ( is_active_sidebar( 'top-sm-widget-area' ) ) : ?>
							<div id="primary-sidebar" class="top-right-widgets" role="complementary">
								<?php dynamic_sidebar( 'top-sm-widget-area' ); ?>
							</div><!-- #top-right-sidebar -->
						<?php endif; ?>
					</div>
				</div>
			</div>	
		<nav id='div-top-menu' class='div-top-menu'>
			<div class='wrapper'>
				<!-- The Main Menu -->
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      	<a class="navbar-brand" href="<?php echo home_url(); ?>">
					      	<div class='div-brand-logo'>
					                <!--<h1><a href="#"><?php bloginfo('name');?></a></h1>
									<h2><?php bloginfo('description');?></h2> -->
			                </div>
		            	</a>
				    </div>

				        <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse navbar-right',
				        		'container_id'      => 'bs-example-navbar-collapse-1',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
				    </div>
				</nav>
			</div>
		</nav>

