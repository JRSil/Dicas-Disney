<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package setwood
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- <meta name="google-site-verification" content="FJcYECseaiOdU1K1BE-IkK-4Cr1kypNm7hIPttdjb8Y" /> -->
<meta name="google-site-verification" content="NACLF6Me0hTbYktmSh_lVlT_fqOifMQjVfrvU_SnW1Q" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZPWJ7S');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0&appId=1019855648191075&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZPWJ7S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="page" class="hfeed site">
    <?php
    do_action( 'setwood_before_header' ); ?>

    <header id="masthead" class="site-header" style="<?php setwood_header_styles(); ?>">

    <?php
    $setwood_header_layout = get_theme_mod( 'header_layout', '1' );
    
    do_action( 'setwood_header_'.$setwood_header_layout.'' ); ?>
    </header><!-- #masthead -->

    <?php
    do_action( 'setwood_before_content' ); ?>

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">

        <?php
        do_action( 'setwood_content_top' ); ?>
