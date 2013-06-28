<?php get_header(); ?>
<!-- BEGIN content -->
<div id="content">
<?php
if (have_posts()) : the_post(); 
$arc_year = get_the_time('Y');
$arc_month = get_the_time('m');
$arc_day = get_the_time('d');
?>
<!-- begin post -->
<div class="recent post">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<div id="comments"><?php comments_template(); ?></div>
</div>
<!-- end post -->
<!-- begin comments -->
<!-- end comments -->
<?php else : ?>
<div class="notfound">
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that is not here.</p>
</div>
<?php endif; ?>
</div>
<!-- END content -->
<?php get_sidebar(); get_footer(); ?>
