
</div><!-- #page -->


	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php echo __('&copy; ', 'pinblue') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
            <?php if ( is_home() || is_front_page() ) : ?>
            <?php _e('- Powered by ', 'pinblue'); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pinblue' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'pinblue' ); ?>"><?php _e('Wordpress' ,'pinblue'); ?></a>
			<?php _e(' and ', 'pinblue'); ?><a href="<?php echo esc_url( __( 'http://wpthemes.co.nz/', 'pinblue' ) ); ?>"><?php _e('WPThemes.co.nz', 'pinblue'); ?></a>
            <?php endif; ?>
		</div>
	</footer><!-- #colophon -->
    
<?php wp_footer(); ?>

</body>
</html>