<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<?php wp_head(); ?>
</head>

<body class="burger" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation burgerMenu">
            
			<ul class="ancien-menu">
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>                					
				<div class="toggle">
				<i class="fas fa-bars ouvrir"></i>
				<i class="fas fa-times fermer"></i>
				</div>
			
			</ul>			
			
			<div class="menu-ouvert">
                <div class="images-menu">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?> " alt="Orchidée" class="orchidee">    
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Flower.png'; ?> " alt="Fleur" class="fleur"> 
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?> " alt="Marguerite" class="marguerite">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus.png'; ?> " alt="Fleur hibiscus" class="hibiscus">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random.png'; ?> " alt="Fleur random" class="fleurMauve">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat-bleu.png'; ?> " alt="Chat bleu" class="chat-bleu">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat-orange.png'; ?> " alt="Chat orange" class="chat-orange">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat-gris.png'; ?> " alt="Chat gris" class="chat-gris">
                </div>
            
                <div class="logo-menu">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Image-logo-paralax.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                </div>
				
				<div>
                    <ul class="liste-burger">
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#character">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                </div> 				
				
				<div class="footer-link">
                    <ul class="burger-menu-footer-link">
                        <li><a href="#colophon">STUDIO KOUKAKI</a></li>
                    </ul>
                </div>
			</div>



		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
