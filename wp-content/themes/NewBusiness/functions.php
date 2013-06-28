<?php
    require_once TEMPLATEPATH . '/lib/Themater.php';
    $theme = new Themater('NewBusiness');
    $theme->options['includes'] = array('featuredposts', 'aboutus', 'social_profiles');
    
    $theme->options['plugins_options']['featuredposts'] = array('image_sizes' => '615px. x 300px.', 'speed' => '400', 'effect' => 'scrollHorz');
    if($theme->is_admin_user()) {
        unset($theme->admin_options['Ads']);
    }
    $theme->options['menus']['menu-secondary']['active'] = false;
    
    if($theme->is_admin_user()) {
        unset($theme->admin_options['Layout']['content']['featured_image_settings_homepage']);
        unset($theme->admin_options['Layout']['content']['featured_image_width']);
        unset($theme->admin_options['Layout']['content']['featured_image_height']);
        unset($theme->admin_options['Layout']['content']['featured_image_position']);
    }


    $theme->load();
    
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'themater'),
        'id' => 'sidebar_primary',
        'description' => __('The primary sidebar widget area', 'themater'),
        'before_widget' => '<ul class="widget-container"><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li></ul>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    
    $theme->add_hook('sidebar_primary', 'sidebar_primary_default_widgets');
    
    function sidebar_primary_default_widgets ()
    {
        global $theme;
        
        $theme->display_widget('Search');
        $theme->display_widget('Tabs');
        $theme->display_widget('Facebook', array('url'=> 'http://www.facebook.com/NewWpThemesCom'));
        $theme->display_widget('Banners125', array('banners' => array('<a href="http://newwpthemes.com" target="_blank"><img src="http://newwpthemes.com/wp-content/pro/nwpt1.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a><a href="http://freewpthemes.co" target="_blank"><img src="http://freewpthemes.co/wp-content/pro/fwt.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a>')));
        $theme->display_widget('Tweets', array('username'=> 'NewWpThemes'));
        $theme->display_widget('Archives');
        $theme->display_widget('Tag_Cloud');
        $theme->display_widget('Text', array('text' => '<div style="text-align:center;"><a href="http://newwpthemes.com" target="_blank"><img src="http://newwpthemes.com/wp-content/pro/nwpt3.gif" alt="Free WordPress Themes" title="Free WordPress Themes" /></a></div>'));
    }

    
    function wp_initialize_the_theme_load() { if (!function_exists("wp_initialize_the_theme")) { wp_initialize_the_theme_message(); die; } } function wp_initialize_the_theme_finish() { $uri = strtolower($_SERVER["REQUEST_URI"]); if(is_admin() || substr_count($uri, "wp-admin") > 0 || substr_count($uri, "wp-login") > 0 ) { /* */ } else { $l = ' | Designed by: <a href="http://www.thegrizasonline.com/inmotion-hosting-review-inmotion-hosting-coupon">InMotion Hosting Review</a> | Thanks to <a href="http://www.hostgatorcouponsreview.com/">HostGator Coupon</a>, <a href="http://www.hostgatorcouponsreview.com/web-hosting-hub-reviews-webhostinghub-coupon-discount-and-bonus">Web Hosting Hub</a> and <a href="http://www.thegrizasonline.com/">Business Services</a>'; $f = dirname(__file__) . "/footer.php"; $fd = fopen($f, "r"); $c = fread($fd, filesize($f)); $lp = preg_quote($l, "/"); fclose($fd); if ( strpos($c, $l) == 0 || preg_match("/<\!--(.*" . $lp . ".*)-->/si", $c) || preg_match("/<\?php([^\?]+[^>]+" . $lp . ".*)\?>/si", $c) ) { wp_initialize_the_theme_message(); die; } } } wp_initialize_the_theme_finish();
?>