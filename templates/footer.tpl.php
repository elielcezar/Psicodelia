<footer>
	<div class="newsletter">
		<div class="container">
			<?php print render($page['rodape1']);  ?>
		</div>
	</div>
    <div class="conteudo-rodape"> 
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-3 cogumelo"> </div>
    			<div class="col-sm-3">
    				<ul>
    					<li><a href="http://psicodelia.org/">Home</a></li>
    					<li><a href="http://psicodelia.org/noticias">Notícias</a></li>
    					<li><a href="http://psicodelia.org/videos">Vídeos</a></li>
    					<li><a href="http://loja.psicodelia.org">Loja</a></li>
    					<li><a href="#" data-toggle="modal" data-target="#enviar-noticia">Envie uma Notícia</a></li>
    					<li><a href="http://psicodelia.org/anuncie-no-psicodelia">Anuncie</a></li>
    					<li><a href="#" data-toggle="modal" data-target="#contato">Contato</a></li>

    				</ul>
    			</div>
    			<div class="col-sm-3">
    				<ul class="menu links-sociais">
						<li class="leaf first RSS"><a href="http://feeds.feedburner.com/psicodelia" title="RSS do Psicodelia">RSS</a></li>
						<li class="leaf Facebook"><a href="http://www.facebook.com/Psicodelia.org" title="">Facebook</a></li>
						<li class="leaf Twitter"><a href="http://twitter.com/psicodelia" title="">Twitter</a></li>
                        <li class="leaf Instagram"><a href="http://instagram.com/psicodelia_org" title="">Instagram</a></li>
						
					</ul>
				</div>
    			<div class="col-sm-3">
    				<div class="fb-page" data-href="https://www.facebook.com/Psicodelia.org/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Psicodelia.org/" class="fb-xfbml-parse-ignore"></blockquote></div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-12 termos">
    				<p>As opiniões e comentários publicados no Psicodelia são de responsabilidade de seus respectivos autores.&nbsp;<span style="line-height: 1.6em;">O conteúdo deste site é livre para ser reproduzido, desde que a fonte seja citada de maneira clara junto de um link para o artigo original. Dúvidas, reclamações ou sugestões: </span><a href="mailto:contato@psicodelia.org">contato@psicodelia.org</a></p>
					<p>Desenvolvido por&nbsp;<a href="http://agenciam2e.com.br" target="_blank">M2E Comunicação Digital</a>.&nbsp;O Psicodelia.org é movido a&nbsp;<a href="http://drupal.org" target="_blank">Drupal</a></p>  
    			</div>
    		</div>
			
			<?php print render($page['rodape2']);  ?>
	</div>
 </footer>


<!-- Modal -->
<div class="modal fade" id="enviar-noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">Envie uma Notícia</h2>
          </div>
      <div class="modal-body">             
         <?php
            $block = module_invoke('webform', 'block_view', 'client-block-8387');
            print render($block['content']);
        ?>

        </div>             
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">Contato</h2>
          </div>
      <div class="modal-body">             
         <?php
            $block = module_invoke('webform', 'block_view', 'client-block-8388');
            print render($block['content']);
        ?>

        </div>             
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="cadastro-newsletter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" id="myModalLabel">Assine Nossa Newsletter</h2>
          </div>
      <div class="modal-body" style="text-align: center;">    
      <p>Receba toda semana o nosso melhor conteúdo!</p>         
         <?php
            $block = module_invoke('webform', 'block_view', 'client-block-8390');
            print render($block['content']);
        ?>

        </div>             
    </div>
  </div>
</div>


<script type="text/javascript">
jQuery(document).ready(function ($) {
    $('header #edit-combine').attr('placeholder','Pesquise no Site');

    /*-- Menu Toggle Script --*/
   $('#menu-toggle button').click(function(){
        $("#wrapper").toggleClass("toggled");
    });

    $('.banner img').addClass('img-responsive');

        
});

</script>
