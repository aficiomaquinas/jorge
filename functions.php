<?php
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
define('HOME',get_stylesheet_directory_uri());

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
        'supports' => array( 'title', 'custom-fields' ),
        'taxonomies' => array( 'medium', 'dimension' ),
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


function register_taxonomy_dimension() {

    $labels = array( 
        'name' => _x( 'Dimensiones', 'dimensión' ),
        'singular_name' => _x( 'Dimensión', 'dimensión' ),
        'search_items' => _x( 'Buscar Dimensiones', 'dimensión' ),
        'popular_items' => _x( 'Dimensiones Populares', 'dimensión' ),
        'all_items' => _x( 'Todas las Dimensiones', 'dimensión' ),
        'parent_item' => _x( 'Parent Dimensión', 'dimensión' ),
        'parent_item_colon' => _x( 'Parent Dimensión:', 'dimensión' ),
        'edit_item' => _x( 'Editar Dimensiones', 'dimensión' ),
        'update_item' => _x( 'Actualizar Dimensión', 'dimensión' ),
        'add_new_item' => _x( 'Agregar Nuevas Dimensiones', 'dimensión' ),
        'new_item_name' => _x( 'Dimensiones', 'dimensión' ),
        'separate_items_with_commas' => _x( 'Separate dimensiones with commas', 'dimensión' ),
        'add_or_remove_items' => _x( 'Agregar o quitar dimensiones', 'dimensión' ),
        'choose_from_most_used' => _x( 'Escoger de las dimensiones más usadas', 'dimensión' ),
        'menu_name' => _x( 'Dimensiones', 'dimensión' ),
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

    register_taxonomy( 'dimension', array('obra'), $args );
} add_action( 'init', 'register_taxonomy_dimension' );


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


function post_loop() { ?>
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


function obra_loop() { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('obra'); ?>>
		<div class="obra-picture">
			<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title($post->ID); ?>" rel="bookmark"><img src="" alt="<?php echo get_the_title($post->ID); ?>"</a>
		</div>
		<div class="ficha-container">
			<time class="finished" datetime="<?php the_time('c'); ?>"><?php the_time( __('M/d/y', 'roots')) ?></time><!-- .finished -->
			<div class="obra-ficha">
				<cite><?php echo get_the_title($post->ID); ?></cite>
				<?php
				$mediums = get_the_terms($post->ID, 'medium');
				$dimesions = get_the_terms($post->ID, 'dimension');
				
				if ( !is_wp_error($mediums)) :
					$output_mediums = implode( ' ,', $mediums );
					echo '<span class="medium">' . $output_mediums . '</span>';
				endif;
				
				if ( !is_wp_error($dimensions)) :			
					$output_dimensions = implode( ' &#215; ', $dimensions );
					echo '<span class="dimension">' . $output_dimensions . 'cm</span>';
				endif; ?>
				
			</div><!-- .obra-ficha -->
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




//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
?>