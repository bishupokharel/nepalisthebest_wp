<?php get_header(); ?>
<!-- BEGIN content -->
<div id="content">
<div class="posts">
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 class="title">Archive for the <strong><?php single_cat_title(); ?></strong> Category</h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2 class="title">Posts Tagged <strong><?php single_tag_title(); ?></strong></h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="title">Archive for <?php the_time('F jS, Y'); ?></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="title">Archive for <?php the_time('F, Y'); ?></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="title">Archive for <?php the_time('Y'); ?></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="title">Author Archive</h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="title">Blog Archives</h2>
<?php } ?>
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
