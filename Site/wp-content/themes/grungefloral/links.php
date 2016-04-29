<?php
/**
 * @package WordPress
 * @subpackage Grunge Flora
 */

/*
Template Name: Links
*/
?>
<?php get_header(); ?>

<h1 class="title">Links:</h1>
<ul>
<?php wp_list_bookmarks(); ?>
</ul>
    
<?php get_sidebar(); ?>

<?php get_footer(); ?>
