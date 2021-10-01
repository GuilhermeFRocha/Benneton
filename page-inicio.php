<?php include 'header.php';?>
<div class="banner swiper-container page" data-page="inicio">
  <div class="swiper-wrapper">
    <?php $args = array('post_type' => 'acf_banners', 'post_per_page'=> 3 );?>
    <?php $loop = new WP_QUERY($args); ?>
    <?php if($loop->have_posts()): ?>
      <?php while($loop->have_posts()):$loop->the_post(); ?>
        <div class="item swiper-slide" style="background-image: url(<?php the_field('imagem_banner');?>)">
          <a href="<?php the_field('link_banner');?>">
            <div class="texto_cima">
              <div class="container">
                <div class="titulo">
                  <h1><?php the_title();?></h1>
                </div>
                <div class="descricao">
                  <p><?php the_field('descricao_banner');?></p>
                </div>
                <a href="<?php the_field('link_banner');?>" class="leia_mais">
                  <div class="botao_banner">
                    <p>Ver mais</p>
                  </div>
                </a>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile;?>
    <?php endif;?>
  </div>
  <div class="container">
    <div class="linhas_carrossel_arrows swiper-button-next">
      <img src="<?php echo get_template_directory_uri();?>/img/right-arrow.png" alt="right-arrow">
    </div>
    <div class="linhas_carrossel_arrows swiper-button-prev">
      <img src="<?php echo get_template_directory_uri();?>/img/left-arrow.png" alt="left-arrow">
    </div>
  </div>
</div>
<div class="empresa_home">
  <div class="fundo_empresa">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 descricao">
          <div class="secao_home">
            <p>Empresa</p>
          </div>
          <div class="texto">
            <div class="titulo">
              <p><?php the_field('titulo_empresa_home', 'option');?></p>
            </div>
            <div class="descricao">
              <p><?php the_field('descricao_empresa_home', 'option');?></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 foto_empresa">
          <img src="<?php the_field('imagem_empresa_home', 'option');?>" alt="Empresa">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="servicos_home">
  <div class="fundo_sevico_home">
    <div class="container">
      <div class="secao_home">
        <p>Serviços</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 titulo">
          <p>Fazemos para o seu melhor</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 descricao">
          <p><?php the_field('descricao_servico_home', 'option');?></p>
          <a href="<?php echo esc_url(get_page_link(15));?>">
            <p>VER MAIS <span><img src="<?php echo get_template_directory_uri();?>/img/right-arrow-black.png" alt="right-arrow"></span></p>
          </a>
        </div>
      </div>
      <div class="servicos_lista swiper-container">
        <div class="swiper-wrapper">
          <?php $args = array('post_type' => 'acf_servicos', 'post_per_page'=> 3 );?>
          <?php $loop = new WP_QUERY($args); ?>
          <?php if($loop->have_posts()): ?>
            <?php while($loop->have_posts()):$loop->the_post(); ?>
              <div class="item swiper-slide">
                <div class="base_amarela">
                  <img src="<?php the_field('imagem_servico');?>" alt="<?php the_title();?>">
                  <p class="titulo"><?php the_title();?></p>
                </div>
              </div>
            <?php endwhile;?>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="projetos_home">
  <div class="fundo1">
    <div class="fundo_topo"></div>
    <div class="container">
      <div class="secao_home">
        <p>Projetos</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 titulo" >
          <p>Quem confiou na gente</p>
        </div>
        <div class="col-sm-12 col-md-8 ver_mais" >
          <a href="<?php echo esc_url(get_page_link(13));?>">
            <p>VER MAIS <span><img src="<?php echo get_template_directory_uri();?>/img/right-arrow.png" alt="right-arrow"></span></p>
          </a>
        </div>
      </div>
    </div>
    <div class="div_margem container">
      <div class="projetos_carrossel swiper-container">
        <div class="swiper-wrapper">
          <?php $args = array('post_type' => 'acf_projetos', 'post_per_page'=> 4 );?>
          <?php $loop = new WP_QUERY($args); ?>
          <?php if($loop->have_posts()): ?>
            <?php while($loop->have_posts()):$loop->the_post(); ?>
              <div class="item swiper-slide">
                <div class="base_amarela">
                  <a href="<?php the_permalink(); ?>">
                    <p class="titulo"><?php the_title();?></p>
                    <img src="<?php the_field('foto_principal_projeto');?>" alt="<?php the_title();?>">
                  </a>
                </div>
              </div>
            <?php endwhile;?>
          <?php endif;?>
        </div>
        <div class="projetos_carrossel_arrows swiper-button-next">
          <img src="<?php echo get_template_directory_uri();?>/img/right-arrow-amarelo.png" alt="right-arrow">
        </div>
        <div class="projetos_carrossel_arrows swiper-button-prev">
          <img src="<?php echo get_template_directory_uri();?>/img/left-arrow-amarelo.png" alt="left-arrow">
        </div>
      </div>
    </div>
    <div class="fundo_branco"></div>
    <div class="fundo_base"></div>
  </div>
</div>
<div class="blog_home">
  <div class="fundo1">
    <div class="container">
      <div class="secao_home">
        <p>Blog</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 titulo">
          <p>Artigos para te auxiliar</p>
        </div>
        <div class="col-sm-12 col-md-8 ver_mais" >
          <a href="<?php echo esc_url(get_page_link(17));?>">
            <p>VER MAIS <span><img src="<?php echo get_template_directory_uri();?>/img/right-arrow-black.png" alt="right-arrow"></span></p>
          </a>
        </div>
      </div>
    </div>
    <div class="div_margem container">
      <div class="posts_blog_carrossel swiper-container" >
        <div class="swiper-wrapper">
          <?php $args = array('post_type' => 'post', 'post_per_page'=> 6 );?>
          <?php $loop = new WP_QUERY($args); ?>
          <?php if($loop->have_posts()): ?>
            <?php while($loop->have_posts()):$loop->the_post(); ?>
              <div class="item swiper-slide">
                <div class="base_amarela">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_field('imagem_blog');?>" alt="<?php the_title();?>">
                  </a>
                  <div class="texto">
                    <p class="data"><?php echo get_the_date('j \d\e F \d\e Y');?></p>
                    <a href="<?php the_permalink(); ?>" class="titulo"><?php the_title();?></a>
                    <div class="descricao">
                      <p><?php the_excerpt();?></p>
                    </div>
                    <?php echo do_shortcode('[addtoany]');?>
                  </div>
                </div>
              </div>
            <?php endwhile;?>
          <?php endif;?>
        </div>
        <div class="posts_blog_carrossel_arrows swiper-button-next">
          <img src="<?php echo get_template_directory_uri();?>/img/right-arrow-amarelo.png" alt="right-arrow">
        </div>
        <div class="posts_blog_carrossel_arrows swiper-button-prev">
          <img src="<?php echo get_template_directory_uri();?>/img/left-arrow-amarelo.png" alt="left-arrow">
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>