<?php
/**
 * @package WordPress
 * @subpackage Grunge Flora
 */
/*
Template Name: Archives
*/
get_header();
?>

<?php get_search_form(); ?>

<h1  class="title">Archives by Month:</h1>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>
    
<?php get_sidebar(); ?>

<?php get_footer(); ?>
