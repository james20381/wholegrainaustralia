<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wholegrain_Australia
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wholegrainaustralia' ); ?></a>
		<header id="masthead" class="site-header">




	<!-- <header class="home-sec" id="home" data-magellan-target="home">

      <div data-sticky-container>
        <nav class="top-bar sticky" data-sticky data-options="marginTop:0; stickyOn: small;" style="width:100%">
          <div class="top-bar-title">
            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
            <button class="menu-icon" type="button" data-toggle></button>
            </span>
            <a class="top-nav-logo" href="#home">Site Title</a>
          </div>

          <div id="responsive-menu" data-magellan data-bar-offset="-25">
            <div class="top-bar-right">
              <ul class="menu vertical medium-horizontal" data-responsive-menu="dropdown">
                <li>
                  <a class="top-nav-a" href="#home">Home</a>
                  <ul class="menu show-for-medium">
										<li><a href="#first">One</a></li>
							      <li><a href="#second">Two</a></li>
							      <li><a href="#third">Three</a></li>
                  </ul>
                </li>
                <li><a class="top-nav-a" href="#about">About</a></li>
                <li><a class="top-nav-a" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div> -->

<?php
require get_template_directory() . '/assets/orbit-slider.php';
?>
































<!-- Foundation's Magellan with Sticky Nav -->
	<div data-sticky-container style="z-index: 2500;">
		<div class="top-bar" data-sticky data-options="marginTop:.2; stickyOn: small;" style="width:100%" id="example-menu">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="menu-text"><img src="<?php echo get_template_directory_uri() . '/svg/color_logo_transparent-200px.svg'; ?>"  class="logo"/></li>
				</ul>
			</div>
		<nav class="top-bar-right">
			<ul class="menu" data-magellan data-offset="50">
				<?php if ( is_front_page() ) :
					wp_nav_menu( array(
						'theme_location' => 'home-menu'
						// 'menu_id'        => 'primary-menu',
					) );
					else :
						wp_nav_menu(array(
						'theme_location' => 'blog-menu'
					));
					endif;
				?>
			</ul>
		</nav>
	</div>
</div>

<?php if ( is_front_page() ) : ?>
	<div class="row demo-toggle-title">
	  <div class="columns">
	    <h3>Magellan with Sticky Nav</h3>
	    <div class="sections">
	      <section id="first" data-magellan-target="first" style="height: 50vh;">

	      </section>
	      <section id="second" data-magellan-target="second" style="height: 100vh; background: orange;">

	      </section>
	      <section id="third" data-magellan-target="third" style="height: 100vh; background: green;">

	      </section>
	    </div>
	  </div>
	</div>
<?php endif; ?>
<!-- End Foundation's Magellan with Sticky Nav -->

<div class="site-branding">
	<?php
	the_custom_logo();
	if ( is_front_page() ) : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php else : ?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	<?php
	endif;

	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) : ?>
		<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
	<?php
	endif; ?>
</div><!-- .site-branding -->
























	</header><!-- #masthead -->

	<div id="content" class="site-content">
