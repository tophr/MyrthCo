<?php
/**
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1588431-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
<ul id="banner" role="banner">
  <li id="myrthco"><a href="/" rel="home">MyrthCo</a></li>
  <li id="fych"><a href="http://chicagoirl.com" target="_blank">Chicago IRL</a></li>
  <!--<li id="latfb"><a href="<?php bloginfo( 'stylesheet_directory' ); ?>/latfb.php" class="lbOn">Look At This Fucking Butt</a></li>-->
  <li id="yukhut"><a href="http://www.yukhut.com/" target="_blank">Yuk Hut</a></li>
  <li id="cpa"><a href="http://cpa.myrthco.com" target="_blank" rel="me">Construction Paper Angst</a></li>
  <li id="eysiaba2me"><a href="http://lovenothingday.com" target="_blank" rel="me" >Everything You Say Is A Blatant Affront To My Existence</a></li>
  <li id="mc"><a href="http://milkandcats.com/" target="_blank" rel="me">Milk &amp; Cats</a></li>
  <li id="mugwumpian"><a href="http://tophr.tumblr.com" target="_blank" rel="me">Tophrian Tumbls</a></li>
  <li id="msaed"><a href="http://makesomethingawfuleveryday.tumblr.com" target="_blank" rel="me">Make Something Awful Every Day</a></li>
  <li id="collab"><a href="http://isyouis.net/" target="_blank" rel="nofollow">Blank: A Collaboration</a></li>
  <li id="merch"><a href="http://totes-cute.com/" target="_blank">Make Something Awful Every Day Merchandise</a></li>
  <li id="art_port"><a href="http://tophr.org/" target="_blank" rel="me">Artist Portfolio</a></li>
  <li id="design_port"><a href="http://tophermcculloch.com/" target="_blank" rel="me">Design Portfolio</a></li>
  <li id="bondgrp"><a href="http://bondgrp.com" target="_blank" rel="nofollow">Bond Group</a></li>
  <li id="cinemanesis"><a href="http://youtube.com/cinemanesis" target="_blank" rel="me">Cinemanesis</a></li>
  <li id="lastfm"><a href="http://www.last.fm/user/mugwumpian" target="_blank" rel="me">Last.fm</a></li>
  <li id="facebook"><a href="http://www.facebook.com/topher.mcculloch" target="_blank" rel="me">Facebook</a></li>
  <li id="youtube"><a href="http://youtube.com/mccu0154" target="_blank" rel="me">YouTube</a></li>
  <li id="vimeo"><a href="http://vimeo.com/mugwump" target="_blank" rel="me">Vimeo</a></li>
  <li id="flickr"><a href="http://www.flickr.com/photos/tofu_mugwump/" target="_blank" rel="me">Flickr</a></li>
  <li id="behance"><a href="http://www.behance.net/mugwumpian" target="_blank" rel="me">Behance</a></li>
  <li id="mnartists"><a href="http://www.mnartists.org/tophr" target="_blank" rel="me">MNArtists.org</a></li>
  <li id="linkedin"><a href="http://www.linkedin.com/in/tophermcculloch" target="_blank" rel="me">LinkedIn</a></li>
  <li id="twitter"><a href="http://twitter.com/mugwumpian" target="_blank" rel="me">Twitter</a></li>
  <li id="resume"><a href="http://tophermcculloch.com/resume/" target="_blank" rel="me">Resume</a></li>
  <li id="about"><a href="/about/">About</a></li>
  <li id="links"><a href="/contact/">Contact</a></li>
</ul>
	<div id="masthead">
		<div id="access" role="navigation">
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
			</div><!-- #access -->
		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">