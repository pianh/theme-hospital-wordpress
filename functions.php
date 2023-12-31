<?php 
// 13p-15
    require get_theme_file_path('/inc/rest-api.php');  // Inc rest-api.php file

    function load_assets() {
        // import css file
        wp_enqueue_style("bootstrapCss", get_theme_file_uri('/css/bootstrap.css'), array(), "4.0.2", "all");
        wp_enqueue_style("fontAwesome", get_theme_file_uri('/css/font-awesome.css'), array(), "4.5.1", "all");
        wp_enqueue_style("swiper", get_theme_file_uri('/css/swiper.min.css'), array(), "4.5.1", "all");

        wp_enqueue_style("cssStyle", get_theme_file_uri('/css/style.css'), array(), "1.0.0", "all");
        wp_enqueue_style("cssCustomResponsive", get_theme_file_uri('/css/reponsive.css'), array(), "1.0.0", "all");
        wp_enqueue_style("cssCustom", get_theme_file_uri('/css/custom.css'), array(), "1.0.0", "all");

        
        // import js file
        wp_enqueue_script("jQueryJs", get_theme_file_uri() . '/assets/vendors/js/jquery.min.js', array('jquery'), "5.0.2", true);
        wp_enqueue_script("bootstrapJs", get_theme_file_uri() . '/js/bootstrap.js', array('jquery'), "4.0.2", true);
        wp_enqueue_script("swiperJs", get_theme_file_uri() . '/js/swiper.min.js', array('jquery'), "4.5.1", true);
        wp_enqueue_script("wowJs", get_theme_file_uri() . '/assets/vendors/js/wow.min.js', array('jquery'), "1.0.2", true);
        wp_enqueue_script("buildIndex", get_theme_file_uri() . '/build/index.js', array('jquery'), '1.0.2', true);
        wp_enqueue_script("mainJs", get_theme_file_uri() . '/js/main.js', array('jquery'), '1.0.2', true);
        wp_localize_script("variableGlobal", 'variableGlobal', array('root_url' => get_site_url()));

    }
    add_action("wp_enqueue_scripts", "load_assets");

    function leo_setup_theme(){
        add_theme_support('post-thumbnails');
        // Đăng ký sidebar
        if (function_exists('register_sidebar')){
            register_sidebar(array(
            'name'=> __( 'Sidebar top', 'leo' ),
            'id' => 'sidebar',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<div class="ads">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="title">',
            'after_title'   => "</h3>",
            ));

            register_sidebar(array(
            'name'=> __( 'Sidebar bottom', 'leo' ),
            'id' => 'sidebar_2',
            // 'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<div class="ads">',
            'after_widget'  => "</div>",
            'before_title'  => '<h3 class="title">',
            'after_title'   => "</h3>",
            ));
        }
        // Đăng ký menu
        register_nav_menus(
            array(
            'main_nav' => __( 'Menu chính', 'leo' ),
            )
        );
    }
    add_action('init','leo_setup_theme');

    // Create theme options
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Theme options', // Title hiển thị khi truy cập vào Options page
            'menu_title'	=> 'Theme options', // Tên menu hiển thị ở khu vực admin
            'menu_slug' 	=> 'theme-settings', // Url hiển thị trên đường dẫn của options page
            'capability'	=> 'edit_posts',
            'redirect'	=> false
        ));
    }

    // Switch to the home page when the user clicks on the wordpress icon
    add_filter('login_headerurl', 'leo_redirectHomePage');
    function leo_redirectHomePage() {
        return esc_url(site_url('/'));
    }

    
// add ads into wordpress
// add_filter('the_content', 'wpse_ad_content');
function wpse_ad_content($content)
{
    if (!is_single()) return $content;
    $paragraphAfter = 2; //Enter number of paragraphs to display ad after.
    $content = explode("</p>", $content);
    $new_content = ''  ;
    for ($i = 0; $i < count($content); $i++) {
        if ($i == $paragraphAfter) {
            $new_content.= '<div style="width: 300px; height: 250px; padding: 6px 6px 6px 0; float: left; margin-left: 0; margin-right: 18px;">';
            $new_content.= '//Enter your ad code here....';
            $new_content.= '</div>';
        }

        $new_content.= $content[$i] . "</p>";
    }

    return $new_content;
}