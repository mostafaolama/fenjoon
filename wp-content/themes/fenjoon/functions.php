<?php
//******************************************
// Basic Setup
//******************************************
function fenjoon_setup(){
	// Make fenjoon available for translation.
	load_theme_textdomain('fenjoon', get_template_directory().'/lang');
	// Add support for thumbnails
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'fenjoon_setup' );

//******************************************
// Add Custom JS & CSS to Admin Post Edit Panel
//******************************************
function add_fenjoon_admin_js() {
	wp_enqueue_script( 'fenjoon_admin_js', admin_url() . 'js/fenjoon_admin.js', array(), '1.0', true );
}
add_filter('admin_head', 'add_fenjoon_admin_js');

function add_fenjoon_admin_css() {
	wp_register_style( 'fenjoon_admin_css', admin_url() . 'css/fenjoon_admin.css', false, '1.0' );
	wp_enqueue_style( 'fenjoon_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'add_fenjoon_admin_css' );

//******************************************
// CPT - Site Type
//******************************************
function cpt_sitetypes(){
	$labels = array(
		'name'                => __( 'Site Types', 'fenjoon' ),
		'singular_name'       => __( 'Site Type', 'fenjoon' ),
		'menu_name'           => __( 'Site Types', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Site Type', 'fenjoon' ),
		'all_items'           => __( 'All Site Types', 'fenjoon' ),
		'view_item'           => __( 'View Site Type', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Site Type', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Site Type', 'fenjoon' ),
		'update_item'         => __( 'Update Site Type', 'fenjoon' ),
		'search_items'        => __( 'Search Site Types', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Site Types', 'fenjoon' ),
		'description'         => __( 'Different site types, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 2,
		'menu_icon'						=> 'dashicons-welcome-view-site',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'sitetype', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_sitetypes', 0 );

//******************************************
// CPT - Modules
//******************************************
function cpt_modules(){
	$labels = array(
		'name'                => __( 'Modules', 'fenjoon' ),
		'singular_name'       => __( 'Module', 'fenjoon' ),
		'menu_name'           => __( 'Modules', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Module', 'fenjoon' ),
		'all_items'           => __( 'All Modules', 'fenjoon' ),
		'view_item'           => __( 'View Module', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Module', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Module', 'fenjoon' ),
		'update_item'         => __( 'Update Module', 'fenjoon' ),
		'search_items'        => __( 'Search Modules', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Modules', 'fenjoon' ),
		'description'         => __( 'Different Modules, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'						=> 'dashicons-align-left',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'module', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_modules', 0 );

//******************************************
// CPT - Features
//******************************************
function cpt_features(){
	$labels = array(
		'name'                => __( 'Features', 'fenjoon' ),
		'singular_name'       => __( 'Feature', 'fenjoon' ),
		'menu_name'           => __( 'Features', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Feature', 'fenjoon' ),
		'all_items'           => __( 'All Features', 'fenjoon' ),
		'view_item'           => __( 'View Feature', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Feature', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Feature', 'fenjoon' ),
		'update_item'         => __( 'Update Feature', 'fenjoon' ),
		'search_items'        => __( 'Search Features', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Features', 'fenjoon' ),
		'description'         => __( 'Different Features, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ,'page-attributes'),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'						=> 'dashicons-star-filled',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'feature', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_features', 0 );

//******************************************
// CPT - Attributes
//******************************************
function cpt_attributes(){
	$labels = array(
		'name'                => __( 'Attributes', 'fenjoon' ),
		'singular_name'       => __( 'Attribute', 'fenjoon' ),
		'menu_name'           => __( 'Attributes', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Attribute', 'fenjoon' ),
		'all_items'           => __( 'All Attributes', 'fenjoon' ),
		'view_item'           => __( 'View Attribute', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Attribute', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Attribute', 'fenjoon' ),
		'update_item'         => __( 'Update Attribute', 'fenjoon' ),
		'search_items'        => __( 'Search Attributes', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Attributes', 'fenjoon' ),
		'description'         => __( 'Different Attributes, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail','page-attributes' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'menu_icon'			 			=> 'dashicons-plus-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'attribute', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_attributes', 0 );

//******************************************
// CPT - Standards
//******************************************
function cpt_standards(){
	$labels = array(
		'name'                => __( 'Standards', 'fenjoon' ),
		'singular_name'       => __( 'Standard', 'fenjoon' ),
		'menu_name'           => __( 'Standards', 'fenjoon' ),
		'parent_item_colon'   => __( 'Parent Standard', 'fenjoon' ),
		'all_items'           => __( 'All Standards', 'fenjoon' ),
		'view_item'           => __( 'View Standard', 'fenjoon' ),
		'add_new_item'        => __( 'Add New Standard', 'fenjoon' ),
		'add_new'             => __( 'Add New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Standard', 'fenjoon' ),
		'update_item'         => __( 'Update Standard', 'fenjoon' ),
		'search_items'        => __( 'Search Standards', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Standards', 'fenjoon' ),
		'description'         => __( 'Different Standards, our team may design and develop', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail','page-attributes' ),
		'taxonomies'          => array( 'post_tag' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 8,
		'menu_icon'					  => 'dashicons-awards',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'standard', $args );
}
// Hook into the 'init' action
add_action( 'init', 'cpt_standards', 0 );

//******************************************
// Add Children co-selection metabox to Modules - Modules page
//******************************************
function add_children_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			global $post;
			if(empty($post->post_parent)){
				$post_type = get_post_type_object( get_post_type( $post ) );
				//if($post_type->label!='Orders')
				add_meta_box( 
						'coselected_children', //id
						 __('Select child '.$post_type->label.' to be auto-selected by selecting this '.$post_type->labels->singular_name ), //title
						'children_list', //callback
						'module', //CPT
						'advanced', //position in admin panel
						'core' //priority
				);	
			}
		}
	}
}

function children_list( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'coselected_children' );
	$coselected_children_string = get_post_meta( $post->ID, 'coselected_children', 1 );
	$coselected_children_string = !empty( $coselected_children_string ) ? $coselected_children_string : '';
	$coselected_children_array = explode( '+', $coselected_children_string );
	$children = get_children( array( 'post_type' => $post->post_type, 'post_parent' => $post->ID ) );
	foreach( $children as $child){ ?>
		<input class="checkbox" type="checkbox" name="child-<?php echo $child->ID;?>" value="<?php echo $child->ID;?>" <?php echo (in_array( $child->ID, $coselected_children_array ) ? 'checked' : ''); ?> /><?php echo $child->post_title;?><br/>
<?php	} ?>
	<input type="hidden" name="string" value="<?php echo $coselected_children_string;?>"/>
<?php
}
add_action( 'add_meta_boxes','add_children_metabox',0 );

function save_coselected_children() {
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['coselected_children'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}
	$coselected_children_string = $_POST['string'];
	if( $coselected_children_string ) update_post_meta( $post_id, 'coselected_children', $coselected_children_string );
}
add_action( 'save_post', 'save_coselected_children' );

//******************************************
// Add workforce metabox to Features & Modules
//******************************************
function workforce_metabox( $postType ) {
	$types = array( 'feature', 'module' );
	if( in_array( $postType, $types ) ){
		add_meta_box(
			'workforce_metabox',
			__( 'Workforce Metabox', 'fenjoon' ),
			'create_workforce_metabox',
			$postType,
			'side'
		);
	}
}

function create_workforce_metabox(){
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'workforce_metabox' );
	$workforce = get_post_meta( $post->ID, 'workforce', true );?>
	<p><?php _e( 'Workforce needed (Man-Hour)', 'fenjoon' );?></p>
	<input type="text" id="workforce_value" name="workforce_value" value="<?php echo esc_attr( $workforce );?>" />
	<?php
}
add_action( 'add_meta_boxes', 'workforce_metabox' );

function save_workforce_metabox(){
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['workforce_metabox'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) ) return;
	}
	$workforce = $_POST['workforce_value'];
	if( $workforce ) {
		update_post_meta( $post_id, 'workforce', $workforce );
	}

}
add_action( 'save_post', 'save_workforce_metabox' );

//******************************************
// Add workforce metabox to Features & Modules
//******************************************
function workforce_multi_metabox( $postType ) {
	$types = array( 'standard', 'attribute' );
	if( in_array( $postType, $types ) ){
		add_meta_box(
			'workforce_multi_metabox',
			__( 'Workforce Multi Metabox', 'fenjoon' ),
			'create_workforce_multi_metabox',
			$postType,
			'side'
		);
	}
}

function create_workforce_multi_metabox(){
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'workforce_multi_metabox' );
	$workforce_multi = get_post_meta( $post->ID, 'workforce_multi', true );?>
	<p><?php _e( 'Workforce multiplier needed (Man-Hour)', 'fenjoon' );?></p>
	<input type="text" id="workforce_multi_value" name="workforce_multi_value" value="<?php echo esc_attr( $workforce_multi );?>" />
	<?php
}
add_action( 'add_meta_boxes', 'workforce_multi_metabox' );

function save_workforce_multi_metabox(){
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['workforce_multi_metabox'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) ) return;
	}
	$workforce_multi = $_POST['workforce_multi_value'];
	if( $workforce_multi ) {
		if( $workforce_multi < 1 ){
				$workforce_multi = 1;
		}elseif( $workforce_multi > 2 ){
			$workforce_multi = 2;
		}
		update_post_meta( $post_id, 'workforce_multi', $workforce_multi );
	}

}
add_action( 'save_post', 'save_workforce_multi_metabox' );
//******************************************
// CPT - Orders
//******************************************
function cpt_orders(){
	$labels = array(
		'name'                => __( 'Orders', 'fenjoon' ),
		'singular_name'       => __( 'Order', 'fenjoon' ),
		'menu_name'           => __( 'Orders', 'fenjoon' ),
		'all_items'           => __( 'All Orders', 'fenjoon' ),
		'view_item'           => __( 'View Order', 'fenjoon' ),
		'add_new_item'        => __( 'Add a New Order', 'fenjoon' ),
		'add_new'             => __( 'Add a New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Order', 'fenjoon' ),
		'update_item'         => __( 'Update Order', 'fenjoon' ),
		'search_items'        => __( 'Search Orders', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Orders', 'fenjoon' ),
		'description'         => __( 'The requests which are submitted known as ORDERS!', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor','comment' ),
		'exclude_from_search' => true,
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 9,
	  'menu_icon'					  => 'dashicons-cart',
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'order', $args );
}
add_action('init','cpt_orders');

//******************************************
// CPT - Projects
//******************************************	
function cpt_projects(){
	$labels = array(
		'name'                => __( 'Projects', 'fenjoon' ),
		'singular_name'       => __( 'Project', 'fenjoon' ),
		'menu_name'           => __( 'Projects', 'fenjoon' ),
		'all_items'           => __( 'All Projects', 'fenjoon' ),
		'view_item'           => __( 'View Project', 'fenjoon' ),
		'add_new_item'        => __( 'Add a New Project', 'fenjoon' ),
		'add_new'             => __( 'Add a New', 'fenjoon' ),
		'edit_item'           => __( 'Edit Project', 'fenjoon' ),
		'update_item'         => __( 'Update Project', 'fenjoon' ),
		'search_items'        => __( 'Search Projects', 'fenjoon' ),
		'not_found'           => __( 'Not found', 'fenjoon' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fenjoon' ),
	);
	$args = array(
		'label'               => __( 'Projects', 'fenjoon' ),
		'description'         => __( 'The Projects which are submitted known as Projects!', 'fenjoon' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor','comment' ),
		'exclude_from_search' => true,
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
	  'menu_icon'					  => 'dashicons-welcome-widgets-menus',
		'has_archive'         => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'project', $args );
}
add_action('init','cpt_projects');

//******************************************
// Add order list metabox to Orders - Orders page
//******************************************
function add_order_list_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			add_meta_box( 
				'order_list', //id
				__('Submitted Choices selected by Costumer', 'fenjoon' ), //title
				'order_list', //callback
				'order', //CPT
				'advanced', //position in admin panel
				'core' //priority
			); 
		}
	}
}

function order_list( $post ){
	$args = array( 'post_type' => array( 'sitetype', 'module', 'feature', 'attribute', 'standard' ), 'orderby' => 'menu_order', 'posts_per_page' => -1 );
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		wp_nonce_field(basename( __FILE__ ), 'save_order');
		$order_str = get_post_meta( $post->ID, 'order_str', 1 );
		$order_arr = array();
		$progress_arr = array();
		if( !empty( $order_str ) ) $order_arr = explode( '+', $order_str );
		if( !empty( $order_arr ) ){
			$project_id = get_post_meta( $post->ID, 'project_id', 1 );
			if( !empty( $project_id ) ){
				$progress_str = get_post_meta( $project_id, 'progress_str', 1 );
				if( !empty( $progress_str ) ) $progress_arr = explode( '+', $progress_str );
			}
		}
		while ( $the_query->have_posts() ) {
			$the_query->the_post();?>
			<input class="checkbox" type="checkbox" name="post-<?php the_ID();?>" value="<?php echo the_ID();?>" <?php echo (in_array( get_the_ID(), $order_arr ) ? 'checked' : '');echo (in_array( get_the_ID(), $progress_arr ) ? ' disabled' : ''); ?> /><?php the_title();?><br/>
<?php
		}
	}
	wp_reset_postdata();?>
	<input type="hidden" name="string" value="<?php echo $order_str;?>"/>
<?php
}
add_action( 'add_meta_boxes', 'add_order_list_metabox', 0 );

function save_order_list() {
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['save_order'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) ) return;
	}
// Order list metabox
	$order_str = $_POST['string'];
	if( $order_str ) {
		update_post_meta( $post_id, 'order_str', $order_str );
	}

// Order last changes metabox
	$changes_str = get_post_meta( $post_id, 'changes_str', 1 );
	$changes_str = !empty( $changes_str ) ? $changes_str : '';
	$changes_arr = array();
	if ( !empty( $changes_str ) ) $changes_arr = explode( "+", $changes_str );
	if( count( $changes_arr ) == 5 ) {array_shift( $changes_arr );};
	global $current_user;
	$change_str = $current_user->ID;
	$date_info = jdate( 'h:i - j F Y', strtotime( get_the_modified_date() ) );
	$change_str = $change_str.'*'.$date_info;
	array_push( $changes_arr, $change_str );
	$changes_str = implode( "+", $changes_arr );
	update_post_meta( $post_id, 'changes_str', $changes_str );
	
// Order to Project metabox
	$project_id = get_post_meta( $post_id, 'project_id', 1 );
	if ( '' != $project_id ) return;
	if ( !current_user_can( 'publish_post' ) ) return;
	if ( !isset( $_POST['chkswchipt'] ) ) return;
	$user_ID = get_current_user_id();
	$new_project = array(
		'post_title'    => __('Project ', 'fenjoon').$post->post_title,
		'post_content'  => $post->post_content,
		'post_type'   	=> 'project',
		'post_status'		=> 'publish',
		'post_author'		=> $user_ID
	);
	remove_action( 'post_updated', 'save_order_list' );
	$project_id = wp_insert_post( $new_project );
	if ( 0 != $project_id ){
		update_post_meta( $project_id, 'order_id', $post_id );
		update_post_meta( $post_id, 'project_id', $project_id );
		if( $order_str ) update_post_meta( $project_id, 'project_str', $order_str );
	}
}
add_action( 'post_updated', 'save_order_list' );

//******************************************
// Add Order to Project switch - Orders page
// Add last changes by list - Orders page
//******************************************
function add_order_to_project_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			add_meta_box( 
				'order_to_project', //id
				__('Start its Project now!', 'fenjoon' ), //title
				'order_to_project', //callback
				'order', //CPT
				'side', //position in admin panel
				'core' //priority
			);
			global $post;
			$changes_str = get_post_meta( $post->ID, 'changes_str', 1 );
			if( empty( $changes_str ) ) return;
			add_meta_box( 
				'last_change_by', //id
				__('Last changes of this order', 'fenjoon' ), //title
				'last_change_by', //callback
				'order', //CPT
				'side', //position in admin panel
				'core' //priority
			);
		}
	}
}

function order_to_project( $post ){
	$project_id = get_post_meta( $post->ID, 'project_id', 1 );
	if ( '' != $project_id ){ 
		edit_post_link(__('Edit Project No. ', 'fenjoon' ).$project_id , '<p>', '</p>', $project_id );
	}else{ ?>
	<p><?php _e('Please note that this is a ONE TIME start and your changes are irreversible!','fenjoon');?></p>
	<?php } ?>	<div id="order-to-project-switch">
		<div class="checkbox-switch">
			<input type="checkbox" name="chkswchipt" class="chkswchipt" <?php if ( '' != $project_id ) echo 'checked disabled';?>>
			<div class="checkbox-animate">
				<span class="checkbox-on"><?php _e('Project Started', 'fenjoon');?></span>
				<span class="checkbox-off"><?php _e('Change to Project', 'fenjoon');?></span>
			</div>
		</div>
	</div>
<?php
}

function last_change_by( $post ){
	$changes_str = get_post_meta( $post->ID, 'changes_str', 1 );
	if( empty( $changes_str ) ) return;
	$changes_arr = explode( '+', $changes_str );
	$changes_time = array();
	$changes_user = array();
	foreach( $changes_arr as $change ){
		$change_arr = explode( '*', $change ); 
		array_push( $changes_user, $change_arr[0] );
		array_push( $changes_time, $change_arr[1] );
	}
	$users = get_users( array( 'include' => $changes_user ) ); ?>
	<ul class="listofrows"">
<?php
	for( $i=0; $i<count( $changes_arr ); $i++ ){
		?>
		<li class="row">
			<div class="right"><?php echo $users[$i]->display_name;?></div>
			<div class="left"><?php echo $changes_time[$i];?></div>
		</li>
<?php
	}
?>
	</ul>
<?php
}
add_action( 'add_meta_boxes', 'add_order_to_project_metabox', 0 );

//******************************************
// Add options
//******************************************
if( is_admin() ){
	function fenjoon_settings_page(){
		add_options_page(
			__( 'Fenjoon Settings','fenjoon'), 
			__( 'Fenjoon Settings','fenjoon'), 
			'manage_options', 
			'fenjoon_settings', 
			'create_fenjoon_settings_page' 
    );
	}
	add_action( 'admin_menu', 'fenjoon_settings_page' );
	
	function create_fenjoon_settings_page(){?>
		<div class="wrap">
			<form method="post" action="options.php">
				<?php
					settings_fields( 'fenjoon_settings' );   
					do_settings_sections('fenjoon_settings');
					submit_button();
				?>
			</form>
		</div>
	<?php
	}

	function register_fenjoon_settings(){
		register_setting(
		'fenjoon_settings', 
		'fenjoon_settings', 
		'sanitize' 
		);

		add_settings_section(
		'workforce_settings',
		__( 'Work Force Settings', 'fenjoon' ), 
		'print_display_section' , 
		'fenjoon_settings' 
		);

		add_settings_field(
		'developer_count', 
		__( 'Developers Count', 'fenjoon' ), 
		'developer_count_callback' , 
		'fenjoon_settings', 
		'workforce_settings'         
		);      

		add_settings_field(
		'man_hour_fee', 
		__( 'Man-Hour Fee', 'fenjoon' ), 
		'man_hour_fee_callback', 
		'fenjoon_settings', 
		'workforce_settings'
		);
		
		add_settings_field(
		'daily_work_hours', 
		__( 'Daily Work Hours', 'fenjoon' ), 
		'daily_work_hours_callback', 
		'fenjoon_settings', 
		'workforce_settings'
		);
	}
	add_action( 'admin_init', 'register_fenjoon_settings' );

 	function sanitize( $input ){
		$new_input = array();
		if( isset( $input['developer_count'] ) )
			$new_input['developer_count'] = absint( $input['developer_count'] );

		if( isset( $input['man_hour_fee'] ) )
			$new_input['man_hour_fee'] = absint ($input['man_hour_fee'] );

		if( isset( $input['daily_work_hours'] ) )
			$new_input['daily_work_hours'] = absint( $input['daily_work_hours'] );
		
		return $new_input;
	}

	function print_display_section(){
		echo '<p>Select general work force settings for the Fenjoon group.</p>';
	}
 
	// Get the settings option array and print one of its values
	function developer_count_callback(){
		$options = get_option( 'fenjoon_settings' );
		echo(
		'<input type="text" id="developer_count" name="fenjoon_settings[developer_count]" value="'.esc_attr( $options['developer_count'] ).'" />'
		);
	}
	// Get the settings option array and print one of its values
	function man_hour_fee_callback(){
		$options = get_option( 'fenjoon_settings' );
		echo(
		'<input type="text" id="man_hour_fee" name="fenjoon_settings[man_hour_fee]" value="'.esc_attr( $options['man_hour_fee'] ).'" />'
		);
	}

	function daily_work_hours_callback(){
		$options = get_option( 'fenjoon_settings' );
		echo(
		'<input type="text" id="daily_work_hours" name="fenjoon_settings[daily_work_hours]" value="'.esc_attr( $options['daily_work_hours'] ).'" />'
		);
	}
	
}else{
	echo _e('NO Permission', 'fenjoon');
}

//******************************************
// Add project list metabox to Projects - Project edit page
//******************************************
function add_project_list_metabox(){
	if( is_admin() ){
		global $pagenow;
		if( 'post.php' == $pagenow ){
			add_meta_box( 
				'project_list', //id
				__('Project Progress', 'fenjoon' ), //title
				'project_list', //callback
				'project', //CPT
				'advanced', //position in admin panel
				'low' //priority
			);
			add_meta_box( 
				'last_change_by', //id
				__('Last changes of this Project', 'fenjoon' ), //title
				'last_change_by', //callback
				'project', //CPT
				'side', //position in admin panel
				'core' //priority
			);
		}
	}
}

function project_list(){
	global $post;
	$project_id = $post->ID;
	$order_id = get_post_meta( $project_id, 'order_id', 1 );
	$order_str = get_post_meta( $order_id, 'order_str', 1 );
	$order_arr = array();
	if( !empty( $order_str ) ) $order_arr = explode( '+', $order_str );
	$project_str = get_post_meta( $project_id, 'project_str', 1 );
	$project_arr = array();
	if( !empty( $project_str ) ) $project_arr = explode( '+', $project_str );
	$removed_arr = array_diff( $project_arr, $order_arr );
	$added_arr = array_diff( $order_arr, $project_arr );	
	$args = array( 'post__in' => array_merge( $project_arr, $added_arr, $removed_arr ), 'post_type' => array( 'sitetype', 'module', 'feature', 'attribute', 'standard' ), 'orderby' => 'menu_order', 'posts_per_page' => -1 );
	$pl_query = new WP_Query( $args );
	if ( $pl_query->have_posts() ) {
		wp_nonce_field(basename( __FILE__ ), 'save_project');
		$progress_str = get_post_meta( $project_id, 'progress_str', 1 );
		$progress_arr = array();
		if( !empty( $progress_str ) )	$progress_arr = explode( '+', $progress_str );
		while ( $pl_query->have_posts() ) {
			$pl_query->the_post();?>
			<div <?php if( in_array( get_the_ID(), $added_arr ) ){ echo 'class="added"';}elseif( in_array( get_the_ID(), $removed_arr ) ){ echo 'class="removed"';}; ?>><input class="checkbox" type="checkbox" name="post-<?php the_ID();?>" value="<?php echo the_ID();?>" <?php echo (in_array( get_the_ID(), $progress_arr ) ? 'checked' : ''); if( in_array( get_the_ID(), $removed_arr ) ){ echo 'disabled';}; ?>/><?php the_title();?></div>
<?php
		}
	}
	wp_reset_postdata();?>
	<input type="hidden" name="string" value="<?php echo $progress_str;?>"/>
<?php
}
add_action( 'add_meta_boxes', 'add_project_list_metabox', 0 );

function save_project_list(){
	global $post;
	$post_id = $post->ID;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( !wp_verify_nonce( $_POST['save_project'], basename( __FILE__ ) ) ) return;
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) return;
	}else{
		if ( !current_user_can( 'edit_post', $post_id ) ) return;
	}
// Project list metabox
	$progress_str = $_POST['string'];
	if( $progress_str ) update_post_meta( $post_id, 'progress_str', $progress_str );

// Project last changes metabox
	$changes_str = get_post_meta( $post_id, 'changes_str', 1 );
	$changes_str = !empty( $changes_str ) ? $changes_str : '';
	$changes_arr = array();
	if ( !empty( $changes_str ) ) $changes_arr = explode( "+", $changes_str );
	if( count( $changes_arr ) == 5 ) {array_shift( $changes_arr );};
	global $current_user;
	$change_str = $current_user->ID;
	$date_info = jdate( 'h:i - j F Y', strtotime( get_the_modified_date() ) );
	$change_str = $change_str.'*'.$date_info;
	array_push( $changes_arr, $change_str );
	$changes_str = implode( "+", $changes_arr );
	update_post_meta( $post_id, 'changes_str', $changes_str );	
}
add_action( 'post_updated', 'save_project_list' );
?>