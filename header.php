<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name = "format-detection" content = "telephone=no">
		<meta name="author" content="idgroup" />

		<!-- TypeKit Fonts -->
		<script type="text/javascript" src="//use.typekit.net/zfl2gcv.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<!-- CSS Style -->
		<link href="<?=get_template_directory_uri()?>/css/main.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?=get_template_directory_uri()?>/css/menu-states.css" rel="stylesheet" type="text/css" media="screen" />
		<!-- Forces older IE browsers to act like IE9 -->

		<!--[if lt IE 9]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<![endif]-->

		<!-- Start WP_HEAD -->

		<?php wp_head();?>

		<!-- Ends WP_HEAD -->

	</head>
	<?php global $menus?>
	<!-- class "rev" for high contrast -->
	<body <?php body_class( ((isset($_SESSION['HC']) && $_SESSION['HC']!='' && $_SERVER['REQUEST_URI'] != "/") ? 'rev' : '').' '.((isset($_SESSION['FS']) && $_SESSION['FS'] == 'big' && $_SERVER['REQUEST_URI'] != "/") ? 'bigfont' : '') );?> >
		<header id="header">
			<div class="inner">
				<div class="mobile-menu">
					<div class="mobile-menu-pad">
						<img src="<?=get_template_directory_uri(); ?>/img/mobile-menu.png" /> Nav
					</div>
				</div>
				<a class="branding" href="<?php echo site_url(); ?>" title="Home">
					<img src="<?=get_template_directory_uri(); ?>/img/Retina-Specialty-Institute-logo.png" alt="Retina Specialty Institute logo" />
				</a>
				<nav id="nav-secondary">
					<ul class="nav nav-pills">
						<li class="phone">1 (855) 5-RETINA</li>
						<li><a class="search-btn" href="#search" title="">search</a></li>
						<!--li><a href="/about-us/testimonials" title="">testimonials</a></li-->
						<li><a href="/about-us/locations" title="">locations</a></li>

<?php
print_r($wc->user);

if(WCCore::$user->logged_in()):?>
						<li><a href="<?=wp_logout_url($_SERVER['REQUEST_URI'])?>" title="Logout">logout</a></li>
<?php
endif;?>
						<li><a href="https://www.facebook.com/retinaspecialtyinstitute?ref=hl" title="Retinal Specialty Institute Facebook page" class="fb-ico" target="_blank"></a></li>
					</ul>
				</nav>
				<nav id="nav-primary">
					<ul class="nav nav-pills">
						<li class="<?=strstr(WCCore::get_current_url(),'healthy-living') ? 'parent' : null ?>">
              				<a href="<?=site_URL()?>/healthy-living/living-with-a-retina-condition/" title="">healthy living</a>
							<div class="nav-wrapper clearfix">
								<?=$menus['Healthy Living']?>
							</div>
            			</li>
					  	<li class="<?=strstr(WCCore::get_current_url(),'retina-information') ? 'parent' : null ?>">
						  	<a href="<?=site_URL()?>/retina-information/the-basics/" title="">retina information</a>
						  	<div class="nav-wrapper clearfix">
								<?=$menus['Retina Information']?>
							</div>
					  	</li>
						<li class="<?=strstr(WCCore::get_current_url(),'for-patients') ? 'parent' : null ?>">
						    <a href="<?=site_URL()?>/for-patients/preparation/" title="">for patients</a>
						    <div class="nav-wrapper clearfix">
								<?=$menus['For Patients']?>
							</div>
					  	</li>
					  	<li class="<?=strstr(WCCore::get_current_url(),'for-physicians') ? 'parent' : null ?>">
						    <a href="<?=site_URL()?>/for-physicians/continuing-education/" title="">for physicians</a>
						    <div class="nav-wrapper clearfix">
								<?=$menus['For Physicians']?>
							</div>
					  	</li>
					  	<li class="<?=strstr(WCCore::get_current_url(),'about-us') ? 'parent' : null ?>">
						    <a href="<?=site_URL()?>/about-us/physicians-surgeons/" title="">about us</a>
						    <div class="nav-wrapper clearfix">
								<?=$menus['About Us']?>
							</div>
						</li>
					</ul>
				</nav>
			</div>

			<div class="inner search">
				<div class="search-wrapper">
					<a href="#" class="close">close <span class="close-ico"></span></a>

					<form action="/">
						<span class="btn-wrapper">
							<input type="search" name="s" placeholder="Start Typing">
						</span>
						<span class="btn-wrapper">
							<button type="search">
								<span>Search</span>
								<span>
									<img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" alt="" />
								</span>
							</button>
						</span>
					</form>
				</div>
			</div>

		</header>
