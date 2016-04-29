<?php
/**
 * @package WordPress
 * @subpackage Grunge Flora
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 7]>
<style>
</style>
<![endif]-->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
	<div id="mainWrapper">    
    	<div id="bottomWrapper">
        	<div id="wrapper">
    			<div id="header">
        			<h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name') ?></a></h1>
                    <div id="navBar">
						<ul>
       						 <li><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
							<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
        				</ul>
        			</div>
        		</div>
				<div id="container" class="clearfix">
        			<div id="content">