<footer>
  <div class="footer_geral">
    <div class="container container_especial">
      <div class="col-sm-12 col-md-12 col-lg-12 logo">
        <a href="<?php echo esc_url(get_page_link(5));?>">
          <img src="<?php echo get_template_directory_uri();?>/img/logo_menor.png" alt="Logo clube das aguas quentes">
        </a>
      </div>
      <div class="row">
        <div class="item_rodape clube">
          <button class="titulo navbar-toggle d-lg-none" type="button" data-toggle="collapse" data-target="#oClube">O clube <i class="fas fa-chevron-down"></i></button>
          <ul class="collapse navbar-collapse d-lg-none" id="oClube">
            <li><a href="<?php echo esc_url(get_page_link(7));?>">Quem Somos</a></li>
            <li><a href="<?php echo esc_url(get_page_link(11));?>">Esportes</a></li>
            <li><a href="<?php echo esc_url(get_page_link(184));?>#convites">Convites</a></li>
            <li><a href="<?php echo esc_url(get_page_link(184));?>#planos">Planos</a></li>
            <li><a href="<?php echo esc_url(get_page_link(184));?>#planos">Seja sócio</a></li>
          </ul>
          <p class="titulo d-none d-sm-none d-md-none d-lg-block">O clube</p>
          <ul class="d-none d-sm-none d-md-none d-lg-block" id="oClube">
            <li><a href="<?php echo esc_url(get_page_link(7));?>">Quem Somos</a></li>
            <li><a href="<?php echo esc_url(get_page_link(11));?>">Esportes</a></li>
            <li><a href="<?php echo esc_url(get_page_link(184));?>#convites">Convites</a></li>
            <li><a href="https://clubeaguasquentespalmeiras.com.br/seja-socio/">Planos</a></li>
            <li><a href="https://clubeaguasquentespalmeiras.com.br/seja-socio/">Seja sócio</a></li>
          </ul>
        </div>
        <div class="item_rodape ajuda">
          <button class="titulo navbar-toggle d-lg-none" type="button" data-toggle="collapse" data-target="#ajuda">Ajuda <i class="fas fa-chevron-down"></i></button>
          <ul class="collapse navbar-collapse d-lg-none" id="ajuda">
            <li><a href="<?php echo esc_url(get_page_link(7));?>/#perguntas_frequentes">Dúvidas Frequentes</a></li>
            <li><a href="<?php echo esc_url(get_page_link(184));?>/#boleto">Segunda via de Boleto</a></li>
            <li><a href="<?php echo esc_url(get_page_link(13));?>/#como-chegar">Como Chegar</a></li>
          </ul>
          <p class="titulo d-none d-sm-none d-md-none d-lg-block">Ajuda</button>
          <ul class="d-none d-sm-none d-md-none d-lg-block">
            <li><a href="<?php echo esc_url(get_page_link(7));?>/#perguntas_frequentes">Dúvidas Frequentes</a></li>
            <li><a href="<?php echo esc_url(get_page_link(184));?>/#boleto">Segunda via de Boleto</a></li>
            <li><a href="<?php echo esc_url(get_page_link(13));?>/#como-chegar">Como Chegar</a></li>
          </ul>
        </div>
        <div class="item_rodape horario">
          <button class="titulo navbar-toggle d-lg-none" type="button" data-toggle="collapse" data-target="#horario">Horário de funcionamento <i class="fas fa-chevron-down"></i></button>
          <ul class="collapse navbar-collapse d-lg-none" id="horario">
            <li><?php the_field('horario_funcionamento_semana', 'options'); ?></li>
            <li class="horario"><?php the_field('horario_de_funcionamento_horario', 'options'); ?></li>
            <li><span>*sujeito a alterações</span></li>
          </ul>
          <p class="titulo d-none d-sm-none d-md-none d-lg-block">Horário de funcionamento</p>
          <ul class="d-none d-sm-none d-md-none d-lg-block">
            <li><?php the_field('horario_funcionamento_semana', 'options'); ?></li>
            <li class="horario"><?php the_field('horario_de_funcionamento_horario', 'options'); ?></li>
            <li><span>*sujeito a alterações</span></li>
          </ul>

          <ul class="d-none d-sm-none d-md-none d-lg-block">
            <li><?php the_field('horario_funcionamento_semana_um', 'options'); ?></li>
            <li class="horario"><?php the_field('horario_de_funcionamento_horario_um', 'options'); ?></li>
            <li><span>*sujeito a alterações</span></li>
          </ul>

          <ul class="d-none d-sm-none d-md-none d-lg-block">
            <li><?php the_field('horario_funcionamento_semana_dois', 'options'); ?></li>
            <li class="horario"><?php the_field('horario_de_funcionamento_horario_dois', 'options'); ?></li>
            <li><span>*sujeito a alterações</span></li>
          </ul>
 
        </div>
        <div class="item_rodape contato">
          <button class="titulo navbar-toggle d-lg-none" type="button" data-toggle="collapse" data-target="#contato">Contato <i class="fas fa-chevron-down"></i></button>
          <ul class="collapse navbar-collapse d-lg-none" id="contato">
            <li>Whatsapp do Clube</li>
            <li><i class="fab fa-whatsapp"></i> <a href="<?php the_field('contato_whatsapp_link', 'options'); ?>" target="_blank"><?php the_field('contato_whatsapp_numero', 'options'); ?></a></li>
            <li>Consultor Comercial</li>
            <li><?php the_field('contato_consultor_comercial', 'options'); ?></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29.952" height="29.952" viewBox="0 0 512 512">
              <image id="Camada_0" data-name="Camada 0" y="64" width="512" height="384" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAWCAQAAAB9auREAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAAC5QAAAuUAXfttvQAAAAHdElNRQflCBMNOwNV4r7wAAABgklEQVQ4y5XU32vNYRwH8PeZteViEZFwMT9yLbkaFy4UuSR3ijuKP8B/4YIbWiJRitzopGa1Fa01ptM46jTN0kgSbUrNxcvFvo6z7Zyzs+fT8/R9np5XPd+ed0/EIePW2yoGpORIXiSZTHf6s5i1W08+5XcOJzkZw+C2rKNugLGYxzyqdnUEt3qFBSwENftVwYU16Vkw64A3BD9FPAIP2tJBUBYx14jjCpixryncWZzuajFfgeOg7+D8KnoGzBuor6zC0a0M7i2jN8GojQ1rTXDEOX/wwR4RO7wFF1fsaoE3+1rk6ISjFsEvuzvB233GLU/qUbzvLn4UJ2mD+0zjsYjr4JqIZ5izrR3uNYWn9fkll+vfQ5i2qTUew/OWERnBlN7meBgv2yZsHONKq3EZk7ra4i4TGGnEX4rUVpeFoHn1qOChqC3hjwbxrv437WuD17izhEdBTV9H9P+dMFFyPENJZvMte7OYRNH/jUmp6Etjb2ayJf1JTkccU1n3A/jeKfkLTPZNJJ2gYrgAAAAASUVORK5CYII="/>
              </svg>
              <?php the_field('contato_email', 'options'); ?></li>
          </ul>
          <p class="titulo d-none d-sm-none d-md-none d-lg-block">Contato</p>
          <ul class="d-none d-sm-none d-md-none d-lg-block">
            <li>Whatsapp do Clube</li>
            <li class="whatsapp"><i class="fab fa-whatsapp"></i> <a href="<?php the_field('contato_whatsapp_link', 'options'); ?>" target="_blank"><?php the_field('contato_whatsapp_numero', 'options'); ?></a></li>
            <li>Consultor Comercial</li>
            <li><?php the_field('contato_consultor_comercial', 'options'); ?></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="29.952" height="29.952" viewBox="0 0 512 512">
              <image id="Camada_0" data-name="Camada 0" y="64" width="512" height="384" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAWCAQAAAB9auREAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAAC5QAAAuUAXfttvQAAAAHdElNRQflCBMNOwNV4r7wAAABgklEQVQ4y5XU32vNYRwH8PeZteViEZFwMT9yLbkaFy4UuSR3ijuKP8B/4YIbWiJRitzopGa1Fa01ptM46jTN0kgSbUrNxcvFvo6z7Zyzs+fT8/R9np5XPd+ed0/EIePW2yoGpORIXiSZTHf6s5i1W08+5XcOJzkZw+C2rKNugLGYxzyqdnUEt3qFBSwENftVwYU16Vkw64A3BD9FPAIP2tJBUBYx14jjCpixryncWZzuajFfgeOg7+D8KnoGzBuor6zC0a0M7i2jN8GojQ1rTXDEOX/wwR4RO7wFF1fsaoE3+1rk6ISjFsEvuzvB233GLU/qUbzvLn4UJ2mD+0zjsYjr4JqIZ5izrR3uNYWn9fkll+vfQ5i2qTUew/OWERnBlN7meBgv2yZsHONKq3EZk7ra4i4TGGnEX4rUVpeFoHn1qOChqC3hjwbxrv437WuD17izhEdBTV9H9P+dMFFyPENJZvMte7OYRNH/jUmp6Etjb2ayJf1JTkccU1n3A/jeKfkLTPZNJJ2gYrgAAAAASUVORK5CYII="/>
              </svg><span><?php the_field('contato_email', 'options'); ?></li></span>
              
          </ul>
        </div>
        <div class="item_rodape redes">
          <p class="titulo">Redes Sociais</p>
          <div class="lista_redes">
            <div class="item">
              <a href="<?php the_field('redes_sociais_facebook', 'options'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="item">
              <a href="<?php the_field('redes_sociais_instagram', 'options'); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="item">
              <a href="<?php the_field('contato_whatsapp_link', 'options'); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rodape">
    <div class="container">
      <div class="row">
        <div class="footer-conteudo col-md-10 col-sm-8">
          <div class="col-lg-7 col-md-10 col-sm-12 texto">
            <p>© <strong>Clube de Águas Quentes Palmeiras</strong> 2021. Todos os direitos reservados.</p>
          </div>
        </div>
        <div class="footer-logos col-md-2 col-sm-4">
            <div class="g1">
              <a href="https://agenciar8.com.br" target="_blank" >
                <div class="g2">
                  <img src="https://agenciar8.com.br/footerlogos/agenciar8.png" alt="Logo Agencia R8">
                </div>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://kit.fontawesome.com/0b06516862.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/ajax-form.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script>
  var swiper1 = new Swiper('.banner_home.swiper-container', {
    slidesPerView: 1,
    loop: false,
    autoplay: {
      delay: 4000,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  });
  var swiper2 = new Swiper('.beneficios_clube.swiper-container', {
    slidesPerView: 2,
    spaceBetween: 10,
    breakpoints: {
      360: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 7,
      },
    }
  });
  var swiper3 = new Swiper('.lista_esportes.swiper-container', {
    slidesPerView: 1,
    breakpoints: {
      360: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    }
  });
  var swiper4 = new Swiper('.lista_planos.swiper-container', {
    slidesPerView: 1,
    breakpoints: {
      360: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1200:{
        slidesPerView: 4,
      },
    }
  });
</script>

</body>

<?php wp_footer(); ?>