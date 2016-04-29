<?php
/**
 * @package WordPress
 * @subpackage Grunge Flora
 */

get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <h4 class="date"><?php the_time('F jS, Y') ?></h4>            
            		<div class="entry clearfix">
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

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
