<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name');  wp_title();?></title>
	<meta name="author" content="Agência R8 | Marketing Digital - www.agenciar8.com.br">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <?php wp_head(); ?>
</head>
<body class="body">
  
<header>
  <div class="curved">
    <div class="circulo d-none d-sm-none d-md-none d-lg-block">
      <a href="https://clubeaguasquentespalmeiras.com.br/">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo clube das aguas quentes">
      </a>
    </div>
    <div class="container">
      <div class="texto">
        <p>Olá cliente! Para facilitar seu pagamento <span><a href="http://clubpalmeiras.ddns.com.br:5000/

">retire aqui a sua segunda via do boleto.</a></span></p>
      </div>
    </div>
  </div>
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 class_extra"></div>
        <div class="col-sm-6 col-md-6 logo">
          <a href="<?php echo esc_url(get_page_link(5));?>">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo clube das aguas quentes">
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-8 menu_navbar">
          <button type="button" class="navbar-toggle botao_menu " data-toggle="collapse" data-target="#myNavbar">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="myNavbar">
            <?php
              wp_nav_menu( array( 
                  'theme_location' => 'my-custom-menu', 
                  'container_class' => 'custom-menu-class' ) ); 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>