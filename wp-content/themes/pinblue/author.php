<?php get_header(); ?>

    <div id="content" class="clearfix">
        

			<?php if ( have_posts() ) : ?>

				<?php
					/* Queue the first post, that way we know
					 * what author we're dealing with (if that is the case).
					 *
					 * We reset this later so we can run the loop
					 * properly with a call to rewind_posts().
					 */
					the_post();
				?>

				<header class="page-header">
					<h1 class="archive-title author"><?php printf( __( 'Author Archives: %s', 'pinblue' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
				</header>

				<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
				?>


				<div id="boxes">
                
            	<div id="loading"></div>

			
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="item" >
						
						<header>
 
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php if(the_title( '', '', false ) !='') the_title(); else _e( 'View Post', 'pinblue' ); ?></a></h2>

						</header>
					
						<section class="post_content">
                        <div class="thumb">
                        <?php 
						if ( has_post_thumbnail()) : ?>
                        
                        	 <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo the_post_thumbnail( 'medium' ); ?></a>
                             
						<?php else : ?>
                            
                            <?php $postimgs =& get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
							if ( !empty($postimgs) ) :
								$firstimg = array_shift( $postimgs );
								$my_image = wp_get_attachment_image( $firstimg->ID, 'medium' );
							?>
                            
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo $my_image; ?></a>
                            
                            <?php else : ?>
                            
                            <img src="<?php echo get_template_directory_uri(); ?>/library/images/noimage.png" />
<?php endif; ?>
                        <?php endif; ?>
                        </div>
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="cat"><?php _e("Filed Under", 'pinblue'); ?> <?php the_category(', '); ?></p>
							
						</footer> <!-- end article footer -->
					
					</div>

				<?php endwhile; ?>

					
				<?php endif; ?>


				</div>

    </div> <!-- end #content -->
    
    <?php if (function_exists("pinblue_pagination")) {
							pinblue_pagination(); 
			} elseif (function_exists("pinblue_content_nav")) { 
						pinblue_content_nav( 'nav-below' );
			}?>
        
<?php get_footer(); ?>