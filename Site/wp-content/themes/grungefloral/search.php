<?php
/**
 * @package WordPress
 * @subpackage Grunge Flora
 */

get_header();
?>
	<?php if (have_posts()) : ?>

		<h1 class="title">Search Results</h1>

		<div class="navigation clearfix">
			<div class="alignleft"><?php previous_post_link('%link') ?></div>
			<div class="alignright"><?php next_post_link('%link') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h2 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <h4 class="date"><?php the_time('F jS, Y') ?></h4>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
<div class="metadata"><h4 class="commentnum"><?php comments_popup_link('Comments ( 0 )', 'Comment ( 1 )', 'Comments ( % )'); ?></h4><h4 class="tags"><?php the_tags('', ', ', ''); ?></h4></div>
             </div>

		<?php endwhile; ?>

		<div class="navigation clearfix">
			<div class="alignleft"><?php previous_post_link('%link') ?></div>
			<div class="alignright"><?php next_post_link('%link') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>
    
<?php get_sidebar(); ?>

<?php get_footer(); ?>