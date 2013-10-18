<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<title><?php wp_title(' | ', true, 'right'); ?></title>

<!-- framework css --><!--[if gt IE 9]><!-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/groundwork.css"><!--<![endif]--><!--[if lte IE 9]>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/groundwork-core.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/groundwork-type.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/groundwork-ui.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/groundwork-anim.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/groundwork-ie.css"><![endif]-->

<!-- Master Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<div class="container">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( ! is_singular() ) {echo '<h1>';} ?><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr_e( get_bloginfo('name'), 'groundworker' ); ?>" rel="home"><?php echo esc_html( get_bloginfo('name') ); ?></a><?php if ( ! is_singular() ) {echo '</h1>';} ?></div>
<div id="site-description"><?php bloginfo('description'); ?></div>
</section>
<nav role="navigation" class="nav gap-bottom fadeIn animated">
  <ul role="menubar">
    <li><a href="http://localhost/wordpress/"><i class="icon-home"></i> Home</a></li>
    <?php wp_list_pages('title_li=' ); ?>
  </ul>
</nav>
</header>