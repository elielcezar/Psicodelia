
<header>
    <div class="container"> 


        <!-- Single button -->
            <div class="btn-group" id="menu-toggle" onclick="openNav()">
              <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">
                <div id="nav-icon2">
                  <span></span>
                    <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </button>
            </div>

          <div class="redes-sociais">
                <a class="facebook" href="https://www.facebook.com/Psicodelia.org/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="http://feeds.feedburner.com/psicodelia" class="rss" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>
                <!--a href="#" data-toggle="modal" data-target="#cadastro-newsletter" class="rss"><i class="fa fa-envelope-o" aria-hidden="true"></i></a-->
            </div>
        	
    		<a href="<?php print base_path()?>"><img src="<?php print base_path() . path_to_theme() ?>/img/psicodelia.png" class="logo" /></a>

        <!-- The overlay -->
        <div id="myNav" class="overlay">

          <!-- Overlay content -->
          <div class="overlay-content">
            <a href="<?php print $front_page; ?>">Home</a>
            <a href="<?php print $front_page; ?>noticias">Notícias</a>
            <a class="destaque" href="http://loja.psicodelia.org">Loja</a>
            <a href="#" data-toggle="modal" data-target="#enviar-noticia">Envie uma Notícia</a>
            <a href="<?php print $front_page; ?>festivais" target="_blank">Festivais de Psytrance</a>
            <!--a href="<?php print $front_page; ?>anuncie-no-psicodelia">Anuncie</a-->
          </div>

        </div>

        <?php print render($page['topo']);  ?> 


      
    </div>
</header>