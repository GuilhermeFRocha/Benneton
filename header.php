<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title();?></title>
	<meta name="author" content="Agência R8 | Marketing Digital - www.agenciar8.com.br">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <?php wp_head(); ?>
  <script src="https://kit.fontawesome.com/0b06516862.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>

  <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

</head>
<body class="body" id="body" data-spy="scroll" dat-target=".navbar" data-offset="50">
  <div class="minicabecalho">
    <div class="container">
      <div class="row redesSociais">
          <li><a href="<?php the_field('facebook_link', 'option');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="<?php the_field('instagram_link', 'option');?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="<?php the_field('linkedin_link', 'option');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>          
      </div>
    </div>
  </div>
  <div class="cabecalho_tudo">
    <div class="cabecalho container">
      <div class="row">
        <div class="logo col-sm-6 col-md-4 col-lg-4">
          <div class="imagem">
            <a href="<?php echo esc_url(get_page_link(5));?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo header"></a>
          </div>
        </div>
        <div class="menu col-sm-6 col-md-8 col-lg-8">
          <div class="botao">
            <i class="fas fa-bars"></i>
          </div>
          <div class="lista">
            <div class="paginas_links">
              <div class="row">
                <li class="secoes" data-page="inicio"><a href="<?php echo esc_url(get_page_link(5));?>"> Home</a></li>
                <li class="secoes" data-page="locacao"><a href="<?php echo esc_url(get_page_link(9));?>"> Locação</a></li>
                <li class="secoes" data-page="produtos"><a href="<?php echo esc_url(get_page_link(11));?>"> Produtos</a></li>
                <li class="secoes" data-page="projetos"><a href="<?php echo esc_url(get_page_link(13));?>"> Projetos</a></li>
                <li class="secoes" data-page="servicos"><a href="<?php echo esc_url(get_page_link(15));?>"> Serviços</a></li>
                <li class="secoes" data-page="blog"><a href="<?php echo esc_url(get_page_link(17));?>"> Blog</a></li>
                <li class="secoes" data-page="contato"><a href="<?php echo esc_url(get_page_link(19));?>"> Contato</a></li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>