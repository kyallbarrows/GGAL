 <?php
/**
 * @package WordPress
 * @subpackage Grunge Flora
 */
?>
</div>
            		<div id="secBar">
                    <h4 id="rss"><a href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a></h4>
			<form method="get" id="searchForm" action="<?php bloginfo('url'); ?>/" > 
				<label class="hidden" for="s">Search for:</label> 
				<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /> 
				<input type="submit" id="searchsubmit" value="Search" /> 
				</div> 
			</form>
                   <ul id="bookmark">
        		<li><a href="http://digg.com/submit?phase=2&amp;url=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/digg.png" alt="Digg" /></a></li>
        		<li><a href="http://del.icio.us/post?url=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/delicious.png" alt="Delicious" /></a></li>
        		<li><a href="http://www.furl.net/storeIt.jsp?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/furl.png" alt="Furl" /></a></li>
        		<li><a href="http://www.stumbleupon.com/url/<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/stumble.png" alt="Stumble" /></a></li>
        		<li><a href="http://technorati.com/faves?add=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/technorati.png" alt="Technorati" /></a></li>
                <li><a href="http://myweb2.search.yahoo.com/myresults/bookmarklet?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/yahoo.png" alt="Yahoo" /></a></li>
        	</ul>               
 
                  	<ul> 
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

			<?php } ?>
				
			</li> <?php }?>
                         <?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
			
			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://themes.rock-kitty.net" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
				  <?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>
			
			<?php endif; ?>
			</ul>
</div>
     			</div>