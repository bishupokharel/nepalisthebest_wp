<?php get_header(); ?>
			
			
            
            <div id="content">
			
            	<div id="boxes">
                
                	<div id="loading"></div>
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
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