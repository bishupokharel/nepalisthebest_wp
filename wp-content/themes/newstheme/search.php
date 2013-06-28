<?php get_header(); ?>
<!-- BEGIN content -->
<div id="content">
<div class="posts">
<h2 class="title">Search Results for <strong><?php the_search_query(); ?></strong></h2>
<?php
if (have_posts()) :
while (have_posts()) : the_post(); 
$arc_year = get_the_time('Y');
$arc_month = get_the_time('m');
$arc_day = get_the_time('d');
?>
<!-- begin post -->
<div class="post">
	<p class="date">Saturday, November 29, 2008  10:16</p>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<a href="#"><?php dp_attachment_image($post->ID, 'thumbnail', 'alt="' . $post->post_title . '" class="thumbnail"'); ?></a>
	<?php the_excerpt(); ?>
	<div class="details">
	<a href="<?php the_permalink(); ?>">READ MORE</a>
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
	</div>
</div>
<!-- end post -->
<?php endwhile; endif; ?>
<div class="break"></div>
</div>
</div>
<!-- END content -->
<?php get_sidebar(); get_footer(); ?>
