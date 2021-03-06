<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}



/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

/**
 * Registers the event post type.
 */
function wpt_experince_post_type() {

    $labels = array(
        'name'               => __( 'Experience' ),
        'singular_name'      => __( 'Experience' ),
        'add_new'            => __( 'Add New Experience' ),
        'add_new_item'       => __( 'Add New Experience' ),
        'edit_item'          => __( 'Edit Experience' ),
        'new_item'           => __( 'Add New Experience' ),
        'view_item'          => __( 'View Experience' ),
        'search_items'       => __( 'Search Experience' ),
        'not_found'          => __( 'No experience found' ),
        'not_found_in_trash' => __( 'No experience found in trash' )
    );

    $supports = array(
        'title',
        'editor',
        'revisions',
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'experience' ),
        'has_archive'          => true,
        'menu_position'        => 4,
        'menu_icon'            => 'dashicons-businesswoman',
        'register_meta_box_cb' => 'wpt_experience_metaboxes',
    );

    register_post_type( 'experience', $args );
}

function wpt_education_post_type() {

    $labels = array(
        'name'               => __( 'Education' ),
        'singular_name'      => __( 'Education' ),
        'add_new'            => __( 'Add New Education' ),
        'add_new_item'       => __( 'Add New Education' ),
        'edit_item'          => __( 'Edit Education' ),
        'new_item'           => __( 'Add New Education' ),
        'view_item'          => __( 'View Education' ),
        'search_items'       => __( 'Search Education' ),
        'not_found'          => __( 'No education found' ),
        'not_found_in_trash' => __( 'No education found in trash' )
    );

    $supports = array(
        'title',
        'editor',
        'revisions',
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'education' ),
        'has_archive'          => true,
        'menu_position'        => 4,
        'menu_icon'            => 'dashicons-welcome-learn-more',
        'register_meta_box_cb' => 'wpt_education_metaboxes',
    );

    register_post_type( 'education', $args );
}

function wpt_portfolio_post_type() {

    $labels = array(
        'name'               => __( 'Portfolio' ),
        'singular_name'      => __( 'Portfolio' ),
        'add_new'            => __( 'Add New Portfolio' ),
        'add_new_item'       => __( 'Add New Portfolio' ),
        'edit_item'          => __( 'Edit Portfolio' ),
        'new_item'           => __( 'Add New Portfolio' ),
        'view_item'          => __( 'View Portfolio' ),
        'search_items'       => __( 'Search Portfolio' ),
        'not_found'          => __( 'No portfolio found' ),
        'not_found_in_trash' => __( 'No portfolio found in trash' )
    );

    $supports = array(
        'title',
        'editor',
        'revisions',
    );

    $args = array(
        'labels'               => $labels,
        'supports'             => $supports,
        'public'               => true,
        'capability_type'      => 'post',
        'rewrite'              => array( 'slug' => 'portfolio' ),
        'has_archive'          => true,
        'menu_position'        => 4,
        'menu_icon'            => 'dashicons-admin-customizer',
        'register_meta_box_cb' => 'wpt_portfolio_metaboxes',
    );

    register_post_type( 'portfolio', $args );
}

add_action( 'init', 'wpt_experince_post_type' );
add_action( 'init', 'wpt_education_post_type' );
add_action( 'init', 'wpt_portfolio_post_type' );


/*------------------------------------*\
    Custom Meta Fields
\*------------------------------------*/

/**
 * Adds a metabox to the right side of the screen under the â€œPublishâ€ box
 */
function wpt_experience_metaboxes() {
    add_meta_box(
        'wpt_experience_job_title',
        'Job Title',
        'wpt_experience_job_title',
        'experience',
        'side',
        'default'
    );


    add_meta_box(
        'wpt_experience_start_date',
        'Start Date',
        'wpt_experience_start_date',
        'experience',
        'side',
        'default',
        array( 'id' => '_start')
    );

    add_meta_box(
        'wpt_experience_end_date',
        'End Date',
        'wpt_experience_end_date',
        'experience',
        'side',
        'default',
        array('id'=>'_end') 
    );
}

function wpt_education_metaboxes() {
    add_meta_box(
        'wpt_education_institution',
        'Institution',
        'wpt_education_institution',
        'education',
        'side',
        'default'
    );

    add_meta_box(
        'wpt_education_date',
        'Date Received',
        'wpt_education_date',
        'education',
        'side',
        'default',
        array('id'=>'received')
    );
}

function wpt_section_about_me_metaboxes() {
    global $post;
    if(!empty($post)) {

        if( 'page_about_me.php' == get_page_template_slug( $post->ID )) {
            add_meta_box( 
                'wpt_section_about_me_resume', 
                'Resume', 
                'wpt_section_about_me_resume', 
                'page', 
                'side', 
                'default');
        }
    }
}
add_action( 'add_meta_boxes_page', 'wpt_section_about_me_metaboxes' );

/**
 * Output the HTML for the metabox.
 */
function wpt_experience_job_title() {
    global $post;

    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'experience_fields' );

    // Get the data if it's already been entered
    $location = get_post_meta( $post->ID, 'job_title', true );

    // Output the field
    echo '<input type="text" name="job_title" value="' . esc_textarea( $location )  . '" class="widefat">';

}

function wpt_experience_start_date($post, $args) {
    wpt_date_fields($post, $args);
}

function wpt_experience_end_date($post, $args) {
    wpt_date_fields($post, $args);

    //checkbox for current
    $current = get_post_meta( $post->ID, '_job_current', true );
    echo '&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;';
    echo '<input type="checkbox" value="1" ';
    checked($current, true, true);
    echo ' name="_job_current" /> Current';

}

function wpt_education_institution() {
    global $post;

    // Nonce field to validate form request came from current site
    wp_nonce_field( basename( __FILE__ ), 'education_fields' );

    // Get the data if it's already been entered
    $location = get_post_meta( $post->ID, 'institution', true );

    // Output the field
    echo '<input type="text" name="institution" value="' . esc_textarea( $location )  . '" class="widefat">';

}

function wpt_education_date($post, $args) {
    wpt_date_fields($post, $args);
}


function wpt_date_fields($post, $args) {

    $metabox_id = $args['args']['id'];
    global $post, $wp_locale;
  
    // Use nonce for verification
    wp_nonce_field( plugin_basename( __FILE__ ), 'ep_'.$post->post_type.'posts_nonce' );
  
    $time_adj = current_time( 'timestamp' );
    $month = get_post_meta( $post->ID, $metabox_id . '_month', true );
  
    if ( empty( $month ) ) {
        $month = gmdate( 'm', $time_adj );
    }
  
    $year = get_post_meta( $post->ID, $metabox_id . '_year', true );
  
    if ( empty( $year ) ) {
        $year = gmdate( 'Y', $time_adj );
    }

  
    $month_s = '<select name="' . $metabox_id . '_month">';
    for ( $i = 1; $i < 13; $i = $i +1 ) {
        $month_s .= "\t\t\t" . '<option value="' . zeroise( $i, 2 ) . '"';
        if ( $i == $month )
            $month_s .= ' selected="selected"';
        $month_s .= '>' . $wp_locale->get_month_abbrev( $wp_locale->get_month( $i ) ) . "</option>\n";
    }
    $month_s .= '</select>';
  
    echo $month_s;
    echo '<input type="text" name="' . $metabox_id . '_year" value="' . $year . '" size="4" maxlength="4" />';  
}

function wpt_section_about_me_resume() {

    wp_nonce_field(plugin_basename(__FILE__), 'wp_about_me_resume_nonce');
     
    $html = '<p class="description">';
        $html .= 'Upload your PDF here.';
    $html .= '</p>';
    $html .= '<input type="file" id="wp_about_me_resume" name="wp_about_me_resume" value="" size="100" />';
     
    echo $html;

}


/**
 * Save the metabox data
 */
function wpt_save_experience_meta( $post_id, $post ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return;
  
    if ( !isset( $_POST['ep_experienceposts_nonce'] ) )
        return;
  
    if ( !wp_verify_nonce( $_POST['ep_experienceposts_nonce'], plugin_basename( __FILE__ ) ) )
        return;
  
    // Is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID ) )
        return;

    // Now that we're authenticated, time to save the data.
    // This sanitizes the data from the field and saves it into an array $events_meta.
    $events_meta['job_title'] = esc_textarea( $_POST['job_title'] );
    $events_meta['_job_current'] = esc_textarea( $_POST['_job_current'] );
    $metabox_ids = array( '_start', '_end' );
  
    foreach ($metabox_ids as $key ) {
        $events_meta[$key . '_month'] = $_POST[$key . '_month'];
        $events_meta[$key . '_year'] = $_POST[$key . '_year'];
        //$events_meta[$key . '_eventtimestamp'] = $events_meta[$key . '_year'] . $events_meta[$key . '_month'];
    }


    // Cycle through the $events_meta array.
    // Note, in this example we just have one item, but this is helpful if you have multiple.
    
    foreach ( $events_meta as $key => $value ) {

        // Don't store custom data twice
        if ( 'revision' === $post->post_type ) {
            return;
        }
        
        // If $value is an array, make it a CSV (unlikely)
        $value = implode( ',', (array)$value );

        if ( get_post_meta( $post->ID, $key, false ) ) {
            // If the custom field already has a value, update it.
            update_post_meta( $post->ID, $key, $value );
        } else {
            // If the custom field doesn't have a value, add it.
            add_post_meta( $post->ID, $key, $value);
        }

        if ( ! $value ) {
            // Delete the meta key if there's no value
            delete_post_meta( $post->ID, $key );
        }

    }

}
add_action( 'save_post', 'wpt_save_experience_meta', 1, 2 );


function wpt_save_education_meta( $post_id, $post ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return;
  
    if ( !isset( $_POST['ep_educationposts_nonce'] ) )
        return;
  
    if ( !wp_verify_nonce( $_POST['ep_educationposts_nonce'], plugin_basename( __FILE__ ) ) )
        return;
  
    // Is the user allowed to edit the post or page?
    if ( !current_user_can( 'edit_post', $post->ID ) )
        return;

    // Now that we're authenticated, time to save the data.
    // This sanitizes the data from the field and saves it into an array $events_meta.
    $events_meta['institution'] = esc_textarea( $_POST['institution'] );
    $events_meta['received_month'] = esc_textarea( $_POST['received_month']);
    $events_meta['received_year'] = esc_textarea( $_POST['received_year']);



    // Cycle through the $events_meta array.
    // Note, in this example we just have one item, but this is helpful if you have multiple.
    
    foreach ( $events_meta as $key => $value ) {

        // Don't store custom data twice
        if ( 'revision' === $post->post_type ) {
            return;
        }
        
        // If $value is an array, make it a CSV (unlikely)
        $value = implode( ',', (array)$value );

        if ( get_post_meta( $post->ID, $key, false ) ) {
            // If the custom field already has a value, update it.
            update_post_meta( $post->ID, $key, $value );
        } else {
            // If the custom field doesn't have a value, add it.
            add_post_meta( $post->ID, $key, $value);
        }

        if ( ! $value ) {
            // Delete the meta key if there's no value
            delete_post_meta( $post->ID, $key );
        }

    }

}
add_action( 'save_post', 'wpt_save_education_meta', 1, 2 );

function wpt_save_about_me_resume($id) {

    /* --- security verification --- */
    if(!wp_verify_nonce($_POST['wp_about_me_resume_nonce'], plugin_basename(__FILE__))) {
      return $id;
    } // end if
       
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $id;
    } // end if
       
    if('page' == $_POST['post_type']) {
      if(!current_user_can('edit_page', $id)) {
        return $id;
      } // end if
    } else {
        if(!current_user_can('edit_page', $id)) {
            return $id;
        } // end if
    } // end if
    /* - end security verification - */
     

  wp_die(var_dump($_FILES));
    // Make sure the file array isn't empty
    if(!empty($_FILES['wp_about_me_resume']['name'])) {
         
        // Setup the array of supported file types. In this case, it's just PDF.
        $supported_types = array('application/pdf');
         
        // Get the file type of the upload
        $arr_file_type = wp_check_filetype(basename($_FILES['wp_about_me_resume']['name']));
        $uploaded_type = $arr_file_type['type'];
         
        // Check if the type is supported. If not, throw an error.
        if(in_array($uploaded_type, $supported_types)) {
 
            // Use the WordPress API to upload the file
            $upload = wp_upload_bits($_FILES['wp_about_me_resume']['name'], null, file_get_contents($_FILES['wp_about_me_resume']['tmp_name']));
     
            if(isset($upload['error']) && $upload['error'] != 0) {
                wp_die('There was an error uploading your file. The error is: ' . $upload['error']);
            } else {
                add_post_meta($id, 'wp_about_me_resume', $upload);
                update_post_meta($id, 'wp_about_me_resume', $upload);     
            } // end if/else
 
        } else {
            wp_die("The file type that you've uploaded is not a PDF.");
        } // end if/else
         
    } // end if
} // end save_custom_meta_data
add_action('save_post', 'wpt_save_about_me_resume');



function edit_admin_menus() {
    global $menu;

    //Rename existing admin menu items
    $menu[20][0] = 'Sections'; // Pages to Sections

    // Move pages to top of menu
    $editkeys[] = array();

    foreach ( $menu as $key => $value ) {
        if ( 'edit.php?post_type=page' == $value[2] ) {  //page aka sections
            $editkeys[] = array(
                            "old" => $key,
                            "new" => 2, // use whatever index gets you the position you want
                        );
        }

        //remove posts from admin menu
        if ( 'edit.php' == $value[2] ) {  
            $menu[$key]=array();
        }

    }

    // if this key is in use you will write over a menu item!
    foreach ($editkeys as $key => $keyType){
        $menu[$keyType["new"]]=$menu[$keyType["old"]];
        $menu[$keyType["old"]]=array();
    }
    
}
add_action( 'admin_menu', 'edit_admin_menus' );

?>
