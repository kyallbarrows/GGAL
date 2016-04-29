<?php
/**
 * @package WordPress
 * @subpackage Grunge Flora
 */
?>
<div id="footer">
	<div class="recentPosts clearfix">
    	<h4 id="recentPosts">Recent Posts</h4>
  		<?php query_posts('showposts=5'); ?>
		<ul>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;?>
		</ul>
	</div>
    <div class="recentComments clearfix">
		<?php include (TEMPLATEPATH . '/simple_recent_comments.php'); /* recent comments plugin by: www.g-loaded.eu */?>
		<?php if (function_exists('src_simple_recent_comments')) { src_simple_recent_comments(5, 50, '<h4 id="recentComments">Recent Comments</h4>', ''); } ?>
  	</div>
    <div class="copyrights">
    <p><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> is powered by <a href="http://themes.rock-kitty.net">WordPress</a></p>
       <p><a href="http://themes.rock-kitty.net">Free Wordpress themes</a> distributed by <a href="http://rock-kitty.net">Rock Kitty</a></p>
 </div>
    <?php wp_footer(); ?>
</body>
</html>