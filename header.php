<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php function loadingStyles(){
    wp_enqueue_style(
        'header',
        get_template_directory_uri() . '/css/header.css',
        false,
        '1.1',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'loadingStyles');
?>
	<?php wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body>

<header>
	<?php echo get_option('home'); ?>
	<?php bloginfo('Eurotrip2018'); ?>
	<?php bloginfo('description'); ?>
</header>
<?php wp_nav_menu(array('theme_location'=>'top-navi', 'menu_class' => 'nav')); ?>
<div class="content">
		<div id="content" class="site-content">