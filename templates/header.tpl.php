
<header>
    <div class="container">

      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

        <div class="redes-sociais">
              <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
              <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="http://feeds.feedburner.com/psicodelia" class="rss" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>
              <!--a href="#" data-toggle="modal" data-target="#cadastro-newsletter" class="rss"><i class="fa fa-envelope-o" aria-hidden="true"></i></a-->
        </div>

    		<a href="<?php print base_path()?>"><img src="<?php print base_path() . path_to_theme() ?>/img/psicodelia.png" class="logo" /></a>

          <!-- Overlay content -->
          <ul class="menu nav">
            <li><a href="<?php print $front_page; ?>">Home</a></li>
            <li><a href="<?php print $front_page; ?>noticias">Notícias</a></li>
            <li><a class="destaque" href="http://loja.psicodelia.org">Loja</a></li>
            <li><a href="#" data-toggle="modal" data-target="#enviar-noticia">Envie uma Notícia</a></li>
            <li><a href="<?php print $front_page; ?>festivais" target="_blank">Festivais de Psytrance</a></li>
            <!--li><a href="<?php print $front_page; ?>anuncie-no-psicodelia">Anuncie</a></li-->
          </ul>

        <?php print render($page['topo']);  ?>



    </div>
</header>
