<?php
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
define('HOME', get_stylesheet_directory_uri());

// ChromePhp::log('hello world');

function register_cpt_obra() {

    $labels = array( 
        'name' => _x( 'Obras', 'obra' ),
        'singular_name' => _x( 'Obra', 'obra' ),
        'add_new' => _x( 'Agregar Nueva', 'obra' ),
        'add_new_item' => _x( 'Agregar Nueva Obra', 'obra' ),
        'edit_item' => _x( 'Editar Obra', 'obra' ),
        'new_item' => _x( 'Nueva Obra', 'obra' ),
        'view_item' => _x( 'Ver Obra', 'obra' ),
        'search_items' => _x( 'Buscar Obras', 'obra' ),
        'not_found' => _x( 'Ninguna obra encontrada', 'obra' ),
        'not_found_in_trash' => _x( 'Ninguna obra encontrada en la papelera', 'obra' ),
        'parent_item_colon' => _x( 'Parent Obra:', 'obra' ),
        'menu_name' => _x( 'Obras', 'obra' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Todo tipo de obra desde pintura hasta instalación.',
        'supports' => array( 'title', 'thumbnail' ),
        'taxonomies' => array( 'medium', 'width', 'height', 'depth' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'obra', $args );
} add_action( 'init', 'register_cpt_obra' );


function register_taxonomy_medium() {

    $labels = array( 
        'name' => _x( 'Técnicas', 'técnica' ),
        'singular_name' => _x( 'Técnica', 'técnica' ),
        'search_items' => _x( 'Buscar Técnicas', 'técnica' ),
        'popular_items' => _x( 'Técnicas Populares', 'técnica' ),
        'all_items' => _x( 'Todas las Técnicas', 'técnica' ),
        'parent_item' => _x( 'Parent Técnica', 'técnica' ),
        'parent_item_colon' => _x( 'Parent Técnica:', 'técnica' ),
        'edit_item' => _x( 'Editar Técnica', 'técnica' ),
        'update_item' => _x( 'Actualizar Técnica', 'técnica' ),
        'add_new_item' => _x( 'Agregar Nueva Técnica', 'técnica' ),
        'new_item_name' => _x( 'Nombre de la técnica', 'técnica' ),
        'separate_items_with_commas' => _x( 'Separate técnicas with commas', 'técnica' ),
        'add_or_remove_items' => _x( 'Agregar o quitar técnicas', 'técnica' ),
        'choose_from_most_used' => _x( 'Escoger de las técnicas más usadas', 'técnica' ),
        'menu_name' => _x( 'Técnicas', 'técnica' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => false,

        'rewrite' => false,
        'query_var' => true
    );

    register_taxonomy( 'medium', array('obra'), $args );
} add_action( 'init', 'register_taxonomy_medium' );


function register_taxonomy_ancho() {

    $labels = array( 
        'name' => _x( 'Ancho', 'ancho' ),
        'singular_name' => _x( 'Ancho', 'ancho' ),
        'search_items' => _x( 'Search anchos', 'ancho' ),
        'popular_items' => _x( 'Anchos populares', 'ancho' ),
        'all_items' => _x( 'Todos los anchos', 'ancho' ),
        'parent_item' => _x( 'Parent Ancho', 'ancho' ),
        'parent_item_colon' => _x( 'Parent Ancho:', 'ancho' ),
        'edit_item' => _x( 'Editar ancho', 'ancho' ),
        'update_item' => _x( 'Actualizar ancho', 'ancho' ),
        'add_new_item' => _x( 'Agregar nuevo ancho', 'ancho' ),
        'new_item_name' => _x( 'Ancho', 'ancho' ),
        'separate_items_with_commas' => _x( 'Separate ancho with commas', 'ancho' ),
        'add_or_remove_items' => _x( 'Agregar o quitar ancho', 'ancho' ),
        'choose_from_most_used' => _x( 'Escoger de los anchos más usados', 'ancho' ),
        'menu_name' => _x( 'Ancho', 'ancho' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => false,

        'rewrite' => false,
        'query_var' => true
    );

    register_taxonomy( 'width', array('obra'), $args );
} add_action( 'init', 'register_taxonomy_ancho' );


function register_taxonomy_alto() {

    $labels = array( 
        'name' => _x( 'Alto', 'alto' ),
        'singular_name' => _x( 'Alto', 'alto' ),
        'search_items' => _x( 'Buscar alturas', 'alto' ),
        'popular_items' => _x( 'Alturas populares', 'alto' ),
        'all_items' => _x( 'Todas las alturas', 'alto' ),
        'parent_item' => _x( 'Parent Alto', 'alto' ),
        'parent_item_colon' => _x( 'Parent Alto:', 'alto' ),
        'edit_item' => _x( 'Editar Altura', 'alto' ),
        'update_item' => _x( 'Actualizar Altura', 'alto' ),
        'add_new_item' => _x( 'Agregar nueva altura', 'alto' ),
        'new_item_name' => _x( 'Nueva altura', 'alto' ),
        'separate_items_with_commas' => _x( 'Separate alturas with commas', 'alto' ),
        'add_or_remove_items' => _x( 'Agregar o quitar alturas', 'alto' ),
        'choose_from_most_used' => _x( 'Escoger de las alturas más usadas', 'alto' ),
        'menu_name' => _x( 'Alturas', 'alto' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => false,

        'rewrite' => false,
        'query_var' => true
    );

    register_taxonomy( 'height', array('obra'), $args );
} add_action( 'init', 'register_taxonomy_alto' );


function register_taxonomy_profundidad() {

    $labels = array( 
        'name' => _x( 'Profundidad', 'profundidad' ),
        'singular_name' => _x( 'Profundidad', 'profundidad' ),
        'search_items' => _x( 'Buscar profundidades', 'profundidad' ),
        'popular_items' => _x( 'Profundidades populares', 'profundidad' ),
        'all_items' => _x( 'Todas las profundidades', 'profundidad' ),
        'parent_item' => _x( 'Parent Profundidad', 'profundidad' ),
        'parent_item_colon' => _x( 'Parent Profundidad:', 'profundidad' ),
        'edit_item' => _x( 'Editar profundidad', 'profundidad' ),
        'update_item' => _x( 'Actualizar profundidad', 'profundidad' ),
        'add_new_item' => _x( 'Agregar nueva profundidad', 'profundidad' ),
        'new_item_name' => _x( 'Profundidad', 'profundidad' ),
        'separate_items_with_commas' => _x( 'Separate profundidad with commas', 'profundidad' ),
        'add_or_remove_items' => _x( 'Agregar o quitar profundidad', 'profundidad' ),
        'choose_from_most_used' => _x( 'Escoger de las profundidades más usadas', 'profundidad' ),
        'menu_name' => _x( 'Profundidad', 'profundidad' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => false,

        'rewrite' => false,
        'query_var' => true
    );

    register_taxonomy( 'depth', array('obra'), $args );
} add_action( 'init', 'register_taxonomy_profundidad' );


function register_cpt_cite() {

    $labels = array( 
        'name' => _x( 'Citas', 'cite' ),
        'singular_name' => _x( 'Cita', 'cite' ),
        'add_new' => _x( 'Agregar Cita', 'cite' ),
        'add_new_item' => _x( 'Agregar Nueva Cita', 'cite' ),
        'edit_item' => _x( 'Editar Cita', 'cite' ),
        'new_item' => _x( 'Nueva Cita', 'cite' ),
        'view_item' => _x( 'Ver Cita', 'cite' ),
        'search_items' => _x( 'Buscar citas', 'cite' ),
        'not_found' => _x( 'Ninguna cita encontrada', 'cite' ),
        'not_found_in_trash' => _x( 'Ninguna cita encontrada en la papelera', 'cite' ),
        'parent_item_colon' => _x( 'Parent Cita:', 'cite' ),
        'menu_name' => _x( 'Citas', 'cite' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Cita de algún autor.',
        'supports' => array( 'title', 'editor' ),
        'taxonomies' => array( 'original_author', 'link_to_cite', 'author_link' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'cite', $args );
} add_action( 'init', 'register_cpt_cite' );


function register_taxonomy_original_author() {

    $labels = array( 
        'name' => _x( 'Autores', 'autor' ),
        'singular_name' => _x( 'Autor', 'autor' ),
        'search_items' => _x( 'Buscar Autores', 'autor' ),
        'popular_items' => _x( 'Autores populares', 'autor' ),
        'all_items' => _x( 'Todos los Autores', 'autor' ),
        'parent_item' => _x( 'Parent Autor', 'autor' ),
        'parent_item_colon' => _x( 'Parent Autor:', 'autor' ),
        'edit_item' => _x( 'Editar Autor', 'autor' ),
        'update_item' => _x( 'Actualizar Autor', 'autor' ),
        'add_new_item' => _x( 'Agregar nuevo autor', 'autor' ),
        'new_item_name' => _x( 'Nombre del autor', 'autor' ),
        'separate_items_with_commas' => _x( 'Separate autores with commas', 'autor' ),
        'add_or_remove_items' => _x( 'Agregar o quitar autores', 'autor' ),
        'choose_from_most_used' => _x( 'Elegir entre los Autores más usados', 'autor' ),
        'menu_name' => _x( 'Autores', 'autor' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => false,

        'rewrite' => false,
        'query_var' => true
    );

    register_taxonomy( 'original_author', array('cite'), $args );
} add_action( 'init', 'register_taxonomy_original_author' );


function register_taxonomy_author_link() {

    $labels = array( 
        'name' => _x( 'Enlace al autor', 'autor' ),
        'singular_name' => _x( 'Autor', 'autor' ),
        'search_items' => _x( 'Buscar Autores', 'autor' ),
        'popular_items' => _x( 'Autores populares', 'autor' ),
        'all_items' => _x( 'Todos los Autores', 'autor' ),
        'parent_item' => _x( 'Parent Autor', 'autor' ),
        'parent_item_colon' => _x( 'Parent Autor:', 'autor' ),
        'edit_item' => _x( 'Editar Autor', 'autor' ),
        'update_item' => _x( 'Actualizar Autor', 'autor' ),
        'add_new_item' => _x( 'Agregar nuevo autor', 'autor' ),
        'new_item_name' => _x( 'Nombre del autor', 'autor' ),
        'separate_items_with_commas' => _x( 'Separate autores with commas', 'autor' ),
        'add_or_remove_items' => _x( 'Agregar o quitar autores', 'autor' ),
        'choose_from_most_used' => _x( 'Elegir entre los Autores más usados', 'autor' ),
        'menu_name' => _x( 'Autores', 'autor' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => false,

        'rewrite' => false,
        'query_var' => true
    );

    register_taxonomy( 'author_link', array('cite'), $args );
} add_action( 'init', 'register_taxonomy_author_link' );




function not_found() { ?>
	<div class="notice">
		<p class="bottom"><?php _e('Sorry, no results were found.', 'roots'); ?></p>
	</div>
	<?php get_search_form();
}


function navigation($query) {
	if ($query->max_num_pages > 1) : ?>
	<nav id="post-nav">
		<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'roots' ) ); ?></div>
		<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'roots' ) ); ?></div>
	</nav>
	<?php endif;
}


function post_loop() { 
global $post;
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<time class="updated" datetime="<?php the_time('c'); ?>" pubdate><?php the_time( __('M/d/y', 'roots')) ?></time>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo get_the_title($post->ID); ?>" rel="bookmark"><?php echo get_the_title($post->ID); ?></a></h1>
			<p class="byline author vcard"><?php _e('Written by', 'roots'); ?> <?php the_author_posts_link(); ?></p>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
<?php }


function obra_loop() { 
global $post;
?>
	<article itemscope itemtype="http://schema.org/CreativeWork" id="post-<?php the_ID(); ?>" <?php post_class('obra, cf'); ?>>
		<?php // IMAGE ?>
		
		<div class="obra-picture">
			<a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php image_echo('mobile',$post->ID); ?></a>
		</div>
		
		<div class="ficha-container">
			<?php // TIME ?>
			<time class="finished" itemprop="datePublished" datetime="<?php the_time('c'); ?>"><?php the_time( __('M / d / y', 'roots')) ?></time><!-- .finished -->
			
			<div class="obra-ficha">
				<?php // TITLE  ?>
				<p><cite class="title" itemprop="name"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></cite></p>
				
				<?php // MEDIUM
				$mediums = get_the_terms($post->ID, 'medium');
				if ( !is_wp_error($mediums) && !empty($mediums)) :
					$medium_names = array();
					foreach ($mediums as $medium) {
						$medium_names[] = $medium->name;
					}
					$output_mediums = join( ', ', $medium_names );
				?><p class="medium displayMaterialsTech"><?php echo $output_mediums; ?></p>
				<?php endif;
				
				// DIMENSIONS ?>
				<p class="format dimensions displayMeasurements">
				<?php
				$out_str = array();
				
				// WIDTH
				$widths_ = get_the_terms($post->ID, 'width');
				if ( !is_wp_error($widths_) && !empty($widths_)) {
					$widths = array();
					foreach ($widths_ as $width) {
						$widths[] = $width->name; }
					$out_str[] = '<span class="width">' . $widths[0] . '</span>'; }
				
				// HEIGHT
				$heights_ = get_the_terms($post->ID, 'height');
				if ( !is_wp_error($heights_) && !empty($heights_)) {
					$heights = array();
					foreach ($heights_ as $height) {
						$heights[] = $height->name; }
					$out_str[] = '<span class="heigth">' . $heights[0] . '</span>'; }
				
				// DEPTH
				$depths_ = get_the_terms($post->ID, 'depth');
				if ( !is_wp_error($depths_) && !empty($depths_)) {
					$depths = array();
					foreach ($depths_ as $depth) {
						$depths[] = $depth->name; }
					$out_str[] = '<span class="depth">' . $depths[0] . '</span>'; }
				
				$out_dimension = join(' &#215; ', $out_str);
				
				// CM
				if (!empty($out_dimension)) {
					$out_dimension .= ' <abbr class="unit" title="cm">cm</abbr></p>';
					echo $out_dimension;
				}  ?>
				
			</div><!-- .obra-ficha -->
			
			<?php // AUTHOR ?>
				<p itemprop="author" itemscope itemtype="http://schema.org/Person" class="byline author vcard displayCreator"><span itemprop="name"><a class="fn" rel="author" itemprop="url" href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_nicename'); ?></a></span></p>
				
		</div><!-- .ficha-container -->
	</article>
<?php }


function cite_loop() { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('cite'); ?>>
		
	</article>
<?php }


function all_types_index_loop() {
	// New Query
    $args = array(
		'post_type' => array('obra','post','cite'),
		'posts_per_page' => '-1',
		'orderby' => 'date',
		'order' => 'DES',
	); $wp_query = new WP_Query( $args );
    
    if ($wp_query->have_posts()) {
    	roots_post_before();
		roots_post_inside_before();
		while ($wp_query->have_posts()) : $wp_query->the_post();
		
			if ('post' == get_post_type()) {
    			post_loop();
    		}
    		
    		if ('obra' == get_post_type()) {
    			obra_loop();
    		}
    		
    		if ('cite' == get_post_type()) {
    			cite_loop();
    		}
    		
		endwhile;
    } else {
		not_found();
	}
	//////////////   LOOP ENDS   ///////////////
	wp_reset_query();
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'mobile',      320,  480 );
	
	add_image_size( 'small_800',   494,  494 );
	add_image_size( 'medium_1024', 632,  632 );
	add_image_size( 'medium_1280', 791,  791 );
	add_image_size( 'large_1440',  889,  889 );
	add_image_size( 'large_1680',  1038, 1038 );
}

function image_echo($size, $i_ID) {
	$image_attr = wp_get_attachment_image_src(get_post_thumbnail_id ($i_ID), $size);

	?><img itemprop="image" id="image-atta-<?php echo get_post_thumbnail_id ($i_ID) ?>" class="ajax-resize" attachment-id="<?php echo get_post_thumbnail_id ($i_ID) ?>" src="<?php echo $image_attr[0]; ?>" width="<?php echo $image_attr[1]; ?>" height="<?php echo $image_attr[2]; ?>" alt="<?php echo get_the_title($i_ID); ?>" /><?php
}

function resize_ajax_image() {
	
	if(isset($_POST['image_size']) && isset($_POST['attachment_id'])) {
		$image_size = $_POST['image_size'];
		$attachment_id = $_POST['attachment_id'];
				
		$i_attr = wp_get_attachment_image_src($attachment_id, $image_size);
		
		$response = json_encode(array(
			'url' => $i_attr[0],
			'width' => $i_attr[1],
			'height' => $i_attr[2],
		));
		header("Content-Type: application/json");
		echo $response;
		
		exit;
	}
	
} add_action( 'wp_ajax_nopriv_resize_ajax_image', 'resize_ajax_image' );
add_action( 'wp_ajax_resize_ajax_image', 'resize_ajax_image' );


function gr_widths($num) {
	$out  = '@100percent: '.$num.'%\r';
	$out .= '@width1:  @100percent * @grs; // ' .strval(round($num * (pow(0.618,1)), 2)) .' @ '.$num."%\r";
	$out .= '@width2:  @width1     * @grs; // ' .strval(round($num * (pow(0.618,2)), 2)) .' @ '.$num."%\r";
	$out .= '@width3:  @width2     * @grs; // ' .strval(round($num * (pow(0.618,3)), 2)) .' @ '.$num."%\r";
	$out .= '@width4:  @width3     * @grs; // ' .strval(round($num * (pow(0.618,4)), 2)) .' @ '.$num."%\r";
	$out .= '@width5:  @width4     * @grs; // ' .strval(round($num * (pow(0.618,5)), 2)) .' @ '.$num."%\r";
	$out .= '@width6:  @width5     * @grs; // ' .strval(round($num * (pow(0.618,6)), 2)) .' @ '.$num."%\r";
	$out .= '@width7:  @width6     * @grs; // ' .strval(round($num * (pow(0.618,7)), 2)) .' @ '.$num."%\r";
	$out .= '@width8:  @width7     * @grs; // ' .strval(round($num * (pow(0.618,8)), 2)) .' @ '.$num."%\r";
	$out .= '@width9:  @width8     * @grs; // ' .strval(round($num * (pow(0.618,9)), 2)) .' @ '.$num."%\r";
	$out .= '@width10: @width9     * @grs; // ' .strval(round($num * (pow(0.618,10)), 2)).' @ '.$num."%\r";
	$out .= '@width11: @width10    * @grs; // ' .strval(round($num * (pow(0.618,11)), 2)).' @ '.$num."%\r";
	$out .= '@width12: @width11    * @grs; // ' .strval(round($num * (pow(0.618,12)), 2)).' @ '.$num."%\r";
	$out .= '@width13: @width12    * @grs; // ' .strval(round($num * (pow(0.618,13)), 2)).' @ '.$num."%\r";
	$out .= '@width14: @width13    * @grs; // ' .strval(round($num * (pow(0.618,14)), 2)).' @ '.$num."%\r";
	$out .= '@width15: @width14    * @grs; // ' .strval(round($num * (pow(0.618,15)), 2)).' @ '.$num."%\r";
	echo $out;
}




//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
?>