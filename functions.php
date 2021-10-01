<?php

function vetor_v_script_enqueue(){
	//style
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/vetor_v.css');

	//tooltip
  wp_enqueue_style( 'tooltipstyle', get_template_directory_uri() . '/css/tooltip.css');
  
  //boodstrap
	wp_enqueue_style('boodstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	
	//swiper
	wp_enqueue_style('swiper_css', get_template_directory_uri() . '/css/swiper.min.css');

	//Scripts  
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
  
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'vetor_v_script_enqueue');

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/css/login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


function awesome_custom_post_type (){

	$labels = array(
		'name' => 'Banners',
		'singular_name' => 'banner',
		'add_new' => 'Adicionar banner',
		'all_items' => 'Todos',
		'add_new_item' => 'Adicionar banner',
		'edit_item' => 'Editar banner',
		'new_item' => 'Novo banner',
		'view_item' => 'Visualizar banner',
		'search_item' => 'Procurar banner',
		'not_found' => 'Nenhum banner encontrado',
		'not_found_in_trash' => 'Sem banner na lixeira',
		'parent_item_colon' => 'Parent Item'
  );
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array(
			'title',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('acf_banners',$args);
	$labels = array(
		'name' => 'Projetos',
		'singular_name' => 'projeto',
		'add_new' => 'Adicionar projeto',
		'all_items' => 'Todos projetos',
		'add_new_item' => 'Adicionar projeto',
		'edit_item' => 'Editar projeto',
		'new_item' => 'Novo projeto',
		'view_item' => 'Visualizar projeto',
		'search_item' => 'Procurar projeto',
		'not_found' => 'Nenhum projeto encontrado',
		'not_found_in_trash' => 'Sem projeto na lixeira',
		'parent_item_colon' => 'Parent Item'
  );
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array(
			'title',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('acf_projetos',$args);
	
	$labels = array(
		'name' => 'Serviços',
		'singular_name' => 'servico',
		'add_new' => 'Adicionar servico',
		'all_items' => 'Todos servicos',
		'add_new_item' => 'Adicionar servico',
		'edit_item' => 'Editar servico',
		'new_item' => 'Novo servico',
		'view_item' => 'Visualizar servico',
		'search_item' => 'Procurar servico',
		'not_found' => 'Nenhum servico encontrado',
		'not_found_in_trash' => 'Sem servico na lixeira',
		'parent_item_colon' => 'Parent Item'
  );
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array(
			'title',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array(),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('acf_servicos',$args);

	$labels = array(
		'name' => 'Produtos',
		'singular_name' => 'produto',
		'add_new' => 'Adicionar produto',
		'all_items' => 'Todos produtos',
		'add_new_item' => 'Adicionar produto',
		'edit_item' => 'Editar produto',
		'new_item' => 'Novo produto',
		'view_item' => 'Visualizar produto',
		'search_item' => 'Procurar produto',
		'not_found' => 'Nenhum produto encontrado',
		'not_found_in_trash' => 'Sem produto na lixeira',
		'parent_item_colon' => 'Parent Item'
  );
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'produto' ),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array(
			'title',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array(),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('acf_produtos',$args);

	$labels = array(
		'name' => 'Locações',
		'singular_name' => 'locacao',
		'add_new' => 'Adicionar locacao',
		'all_items' => 'Todas locacoes',
		'add_new_item' => 'Adicionar locacao',
		'edit_item' => 'Editar locacao',
		'new_item' => 'Novo locacao',
		'view_item' => 'Visualizar locacao',
		'search_item' => 'Procurar locacao',
		'not_found' => 'Nenhum locacao encontrado',
		'not_found_in_trash' => 'Sem locacao na lixeira',
		'parent_item_colon' => 'Parent Item'
  );
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array(
			'title',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array(),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('acf_locacoes',$args);
}
add_action('init','awesome_custom_post_type');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	    => 'vetor - Redes Sociais',
		'menu_title'	    => 'Redes Sociais e informacao',
		'menu_slug' 	    => 'vetor-redessociais-slug',
		'capability'	    => 'edit_posts',
    'redirect'		    => true,
    'icon_url'        => 'dashicons-facebook-alt',
    'position'        => 6,
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
  ));
  
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Redes Sociais e informacao',
		'menu_title'	=> 'Redes Sociais e informacao',
    'parent_slug'	=> 'vetor-redessociais-slug',
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
	));
	
	acf_add_options_page(array(
		'page_title' 	    => 'vetor - Empresa',
		'menu_title'	    => 'Empresa',
		'menu_slug' 	    => 'vetor-empresa-slug',
		'capability'	    => 'edit_posts',
    'redirect'		    => true,
    'icon_url'        => 'dashicons-building',
    'position'        => 6,
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
  ));
  
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Empresa',
		'menu_title'	=> 'Empresa',
    'parent_slug'	=> 'vetor-empresa-slug',
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
	));
	
	acf_add_options_page(array(
		'page_title' 	    => 'vetor - servico',
		'menu_title'	    => 'Servico - Texto',
		'menu_slug' 	    => 'vetor-servico-slug',
		'capability'	    => 'edit_posts',
    'redirect'		    => true,
    'icon_url'        => 'dashicons-editor-paste-text',
    'position'        => 6,
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
  ));
  
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Servico - Texto',
		'menu_title'	=> 'Servico - Texto',
    'parent_slug'	=> 'vetor-servico-slug',
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
	));
	

}

function create_topics_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Filtro', 'taxonomy general name' ),
    'singular_name' => _x( 'Filtro', 'taxonomy singular name' ),
		'search_items' =>  __( 'Procurar' ),
    'all_items' => __( 'Todos' ),
    'parent_item' => __( 'Categoria pai' ),
    'parent_item_colon' => __( 'Categoria pai:' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Atualizar' ),
    'add_new_item' => __( 'Adicionar nova' ),
    'new_item_name' => __( 'Novo nome' ),
    'menu_name' => __( 'Filtro' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('filtro',array('acf_locacoes'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'filtro' ),
	));
	
	//casa
	$labels = array(
    'name' => _x( 'Tipos de produto', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo de produto', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar' ),
    'all_items' => __( 'Todos' ),
    'parent_item' => __( 'categoria pai' ),
    'parent_item_colon' => __( 'categoria pai:' ),
    'edit_item' => __( 'Editar categoria' ), 
    'update_item' => __( 'Atualizar categoria' ),
    'add_new_item' => __( 'Adicionar nova categoria' ),
    'new_item_name' => __( 'Novo nome' ),
    'menu_name' => __( 'Tipos de produto' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('tipos_produto',array('acf_locacoes'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipos_produto' ),
	));
	
	$labels = array(
    'name' => _x( 'Sub categorias', 'taxonomy general name' ),
    'singular_name' => _x( 'Sub categoria', 'taxonomy singular name' ),
		'search_items' =>  __( 'Procurar' ),
    'all_items' => __( 'Todos' ),
    'parent_item' => __( 'Categoria pai' ),
    'parent_item_colon' => __( 'Categoria pai:' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Atualizar' ),
    'add_new_item' => __( 'Adicionar nova' ),
    'new_item_name' => __( 'Novo nome' ),
    'menu_name' => __( 'Sub categorias' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('sub_categorias',array('acf_produtos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'sub_categorias' ),
	));
	
	//casa
	$labels = array(
    'name' => _x( 'Tipos', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar' ),
    'all_items' => __( 'Todos' ),
    'parent_item' => __( 'categoria pai' ),
    'parent_item_colon' => __( 'categoria pai:' ),
    'edit_item' => __( 'Editar categoria' ), 
    'update_item' => __( 'Atualizar categoria' ),
    'add_new_item' => __( 'Adicionar nova categoria' ),
    'new_item_name' => __( 'Novo nome' ),
    'menu_name' => __( 'Tipos' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('tipos',array('acf_produtos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipos' ),
  ));
}

function comments_clean_header_hook(){
	wp_deregister_script( 'comment-reply' );
	}
 add_action('init','comments_clean_header_hook');

// Remove Emojis

 	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );