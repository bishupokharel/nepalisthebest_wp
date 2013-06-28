<!-- BEGIN sidebar -->
<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar(1) ) : ?>
	<!-- begin Advertisement -->
	<div class="ads">
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad125x125.jpg" alt="Advertisement" /></a>
	</div>
	<!-- end Advertisement -->
	<!-- begin subscribe -->
	<h2>Subscribe Here</h2>
	<form class="subscribe" action="">
	<a href="#">Subscribe via RSS Feed or</a>
	<input type="text" name="email" value="Enter E-mail Here.." />
	<button type="submit">Submit</button>
	</form>
	<!-- end subscribe -->
	<!-- begin popular posts -->
	<h2>Popular Posts</h2>
	<ul><?php dp_popular_posts(6); ?></ul>
	<!-- end popular posts -->
	<!-- begin tags -->
	<h2>Tags</h2>
	<div class="tags">
	<?php if (function_exists('wp_widget_tag_cloud')) wp_widget_tag_cloud(array('before_title'=>'<!--','after_title'=>'-->')); ?>
	</div>
	<!-- end tags -->
	<?php endif; ?>
	<!-- BEGIN left -->
	<div class="l">
	<?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar(2) ) : ?>
		<!-- begin categories -->
		<h2>Categories</h2>
		<ul><?php wp_list_categories('title_li='); ?></ul>
		<!-- end categories -->
		<!-- begin pages -->
		<h2>Pages</h2>
		<ul>
		<li><a href="<?php echo get_option('home'); ?>">Home</a></li>
		<?php dp_list_pages(); ?>
		</ul>
		<!-- end pages -->
	<?php endif; ?>
	</div>
	<!-- END left -->
	<!-- BEGIN right -->
	<div class="r">
	<?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar(3) ) : ?>
		<!-- begin archives -->
		<h2>Archives</h2>
		<ul><?php wp_get_archives('type=monthly'); ?></ul>
		<!-- end archives -->
		<!-- begin blogroll -->
		<div id="blogroll">
		<?php wp_list_bookmarks('category_before=&category_after=&title_before=<h2>&title_after=</h2>'); ?>
		<!-- end blogroll -->
		<!-- begin meta -->
		<h2>Meta</h2>
		<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		</ul>
		<!-- end meta -->
	<?php endif; ?>
	</div>
	<!-- END right -->
</div>
<!-- END sidebar -->
