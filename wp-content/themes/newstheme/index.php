<?php get_header(); ?>
<!-- BEGIN content -->
<div id="content">
<?php
if (have_posts()) : the_post(); 
$arc_year = get_the_time('Y');
$arc_month = get_the_time('m');
$arc_day = get_the_time('d');
?>
<!-- begin recent post -->
<div class="recent post">
	<h2 class="title">Recent News</h2>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(''); ?>
</div>
<!-- end recent post -->
<?php else : ?>
<div class="notfound">
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that is not here.</p>
</div>
<?php endif; ?>
<div class="posts">
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
