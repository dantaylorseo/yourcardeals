<?php
	add_theme_support( 'post-thumbnails' );
	register_nav_menu( 'primary', __( 'Primary Menu', 'seowned' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'seowned' ) );
	register_sidebar( array(
		'name' => __( 'Sidebar', 'seowned' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div class="sidebox">',
		'after_widget' => "</div>",
		'before_title' => '<span class="sectionhead">',
		'after_title' => '</span>',
	) );
	
	function seownedLatestPosts()
{
  $my_args=array(
						   
				'showposts' => 4,
										
				'post_type' => 'post' 
				
				);
						
			$adv_recent_posts = null;
			$adv_recent_posts = new WP_Query($my_args);
			
  echo '<ul>';
   while ( $adv_recent_posts->have_posts() )

		{

			$adv_recent_posts->the_post();
			
	$category = get_the_category($post->ID );
	$post_date = date("d/m/Y", strtotime($post->post_date));
	$excerpt = get_the_excerpt();
	$excerpta = split(' ', $excerpt, 6);
	//print_r($excerpta);
	$exout = null;
	for($g=0;$g<5;$g++) {
		$exout .= $excerpta[$g].' ';	
	}
	$exout .= '[...]';
	if(has_post_thumbnail()) { $thumb = get_the_post_thumbnail($post->ID, array(50,50)); } else { $thumb = '<img width="50" height="50" src="http://www.yourcardeals.co.uk/wp-content/uploads/2013/01/ycdSmall.jpg" class="attachment-50x50 wp-post-image" alt="Your Car Deals">'; }
	echo '
                	<li class="recent-post-item">
				<a  href="'.get_permalink().'" rel="bookmark">'.$thumb.'</a>
				<a  href="'.get_permalink().'" rel="bookmark"  class="post-title">'.get_the_title().'</a>
				

						<div class="post-entry">
							<p>'.$exout.' <a href="'.get_permalink().'" class="more-link">Read more →</a></p> 
						</div>
                	</li>';
  }
  //echo "<p>latest posts will be here</p>";
  echo '</ul>';
  wp_reset_query(); 
}


function widget_seownedLatestPosts($args) {
  extract($args);
 
  	$options = get_option("widget_seownedLatestPosts");
  	if (!is_array( $options ))
	{
		$options = array('title' => 'Custom Latest Posts');
	}
 
  	echo $before_widget;
   	echo $before_title;
   	echo $options['title'];
   	echo $after_title;
 
    //Our Widget Content
   	seownedLatestPosts();
  	echo $after_widget;
}

function seowned_control()
{
  	$options = get_option("widget_seownedLatestPosts");
  	if (!is_array( $options ))
	{
		$options = array('title' => 'My Widget Title');
	}
 	
	if ($_POST['seownedLatestPosts-Submit'])
  	{
   		$options['title'] = htmlspecialchars($_POST['seownedLatestPosts-WidgetTitle']);
    	update_option("widget_seownedLatestPosts", $options);
  	}
 
?>
  <p>
    <label for="seownedLatestPosts-WidgetTitle">Title: </label>
    <input type="text" id="seownedLatestPosts-WidgetTitle" name="seownedLatestPosts-WidgetTitle" value="<?php echo $options['title'];?>" />
    <input type="hidden" id="seownedLatestPosts-Submit" name="seownedLatestPosts-Submit" value="1" />
  </p>
<?php
}

register_sidebar_widget(__('Custom Latest Posts'), 'widget_seownedLatestPosts');
register_widget_control('Custom Latest Posts', 'seowned_control', 300, 200 );
	
	$labels = array(
    'name' => _x( 'Makes', 'taxonomy general name' ),
    'singular_name' => _x( 'Make', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Makes' ),
    'all_items' => __( 'All Makes' ),
    'parent_item' => __( 'Parent Make' ),
    'parent_item_colon' => __( 'Parent Make:' ),
    'edit_item' => __( 'Edit Make' ), 
    'update_item' => __( 'Update Make' ),
    'add_new_item' => __( 'Add New Make' ),
    'new_item_name' => __( 'New Make Name' ),
    'menu_name' => __( 'Make' ),
  ); 	

 register_taxonomy('make',array('deals'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'm'),
	'has_archive' => 'make'
  ));


	register_post_type('deals', array(	
	'label' => 'Deals',
	'description' => '',
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'rewrite' => array('slug' => 'd'),
	'query_var' => true,
	'has_archive' => 'deals',
	'exclude_from_search' => false,
	'menu_position' => 4,
	'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','sticky'),
	'labels' => array (
  		'name' => 'Deals',
		  'singular_name' => 'Deal',
		  'menu_name' => 'Deals',
		  'all_items' => 'All Deals',
		  'add_new' => 'Add Deal',
		  'add_new_item' => 'Add New Deal',
		  'edit' => 'Edit',
		  'edit_item' => 'Edit Deal',
		  'new_item' => 'New Deal',
		  'view' => 'View Deal',
		  'view_item' => 'View Deal',
		  'search_items' => 'Search Deals',
		  'not_found' => 'No Deals Found',
		  'not_found_in_trash' => 'No Deals Found in Trash',
		  'parent' => 'Parent Deal',
),) );


add_filter('post_type_link', 'events_permalink_structure', 10, 4);
function events_permalink_structure($post_link, $post, $leavename, $sample)
{
    if ( false !== strpos( $post_link, '%make%' ) ) {
        $event_type_term = get_the_terms( $post->ID, 'make' );
        $post_link = str_replace( '%make%', array_pop( $event_type_term )->slug, $post_link );
    }
    return $post_link;
}

function __custom_messagetypes_link( $link, $term, $taxonomy )
{
    if ( $taxonomy !== 'make' )
        return $link;

    $new =  str_replace( 'makes/', '', $link );
	return $new;
}
add_filter( 'term_link', '__custom_messagetypes_link', 10, 3 );
$meta_sections = array();
$meta_sections[] = array(
    'id' => 'additional',
    'title' => 'Additional Information',
    'taxonomies' => array('make'),
    'fields' => array(
        array(
            'name' => 'Popular Models',
            'id' => 'popular',
            'type' => 'textarea',                    // WYSIWYG editor
            'std' => '',
            'desc' => 'Add a formatted list here'
        ),
	array(
            'name' => 'Display Partner Logo?',
            'id' => 'partner',
            'type' => 'checkbox',                    // WYSIWYG editor
            'std' => '0'
        )
    )
);
add_image_size( 'cust_thumb', 110, 110, true );
add_image_size( 'cust_lg', 300, 200, true );
foreach ($meta_sections as $meta_section) {
	$my_section = new RW_Taxonomy_Meta($meta_section);
}


function my_scripts_method() {
    wp_enqueue_script('jquery');            
}    
 
add_action('wp_enqueue_scripts', 'my_scripts_method'); // For use on the Front end (ie. Theme)

add_filter( ‘xmlrpc_methods’, function( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} );
?>