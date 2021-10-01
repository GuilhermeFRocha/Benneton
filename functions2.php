<?php

function clube_script_enqueue(){
	//style
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/clube_aguas.css');

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

add_action('wp_enqueue_scripts', 'clube_script_enqueue');

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/css/login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'Menu padrao' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

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
		'taxonomies' => array(),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('acf_banners',$args);

	$labels = array(
		'name' => 'Cardapios',
		'singular_name' => 'cardapio',
		'add_new' => 'Adicionar cardapio',
		'all_items' => 'Todos',
		'add_new_item' => 'Adicionar cardapio',
		'edit_item' => 'Editar cardapio',
		'new_item' => 'Novo cardapio',
		'view_item' => 'Visualizar cardapio',
		'search_item' => 'Procurar cardapio',
		'not_found' => 'Nenhum cardapio encontrado',
		'not_found_in_trash' => 'Sem cardapio na lixeira',
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
		'menu_icon' => 'dashicons-list-view',
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
	register_post_type('cardapio',$args);
}
add_action('init','awesome_custom_post_type');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	    => 'Esportes',
		'menu_title'	    => 'Esportes',
		'menu_slug' 	    => 'esportes-slug',
		'capability'	    => 'edit_posts',
    'redirect'		    => true,
    'icon_url'        => 'dashicons-store',
    'position'        => 6,
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
  ));
  
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Esportes',
		'menu_title'	=> 'Esportes',
    'parent_slug'	=> 'esportes-slug',
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
	));

	acf_add_options_page(array(
		'page_title' 	    => 'Informações',
		'menu_title'	    => 'Informações',
		'menu_slug' 	    => 'informacoes-slug',
		'capability'	    => 'edit_posts',
    'redirect'		    => true,
    'icon_url'        => 'dashicons-id',
    'position'        => 8,
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
  ));
  
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Informações',
		'menu_title'	=> 'Informações',
    'parent_slug'	=> 'informacoes-slug',
    'update_button'   => __('Atualizar', 'acf'),
    'updated_message' => __("Atualizado", 'acf'),
	));
}
