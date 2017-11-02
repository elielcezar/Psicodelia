

<?php include "header.tpl.php"; ?>	


	

		
		<div class="section extras">
			<div class="container">
			      
			      <?php print $messages; ?>
			      <?php if (!empty($tabs)): ?>
			        <?php print render($tabs); ?>
			      <?php endif; ?>					      			      
	           
	       </div>				
	    </div>

	    <div id="principal">
	    	<div class="container">
    				
	    		<?php print render($page['content']); ?>

	    		<div class="facebook-final-noticia">
	    			<div class="fb-like" data-href="https://www.facebook.com/Psicodelia.org/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
	    		</div>
	    			
	    	</div>
	    </div>

	    <div class="banner rodape">

	    	
		</div>



	    <div id="comentarios">
	    	<div class="container">
	    		<h3>Comente!</h3>
		    	<div class="row">
			    	<div class="col-sm-8">
			    		<div class="bloco-comentarios"></div>
			    	</div>
			    	<div class="col-sm-4">
			    		<div class="banner">							

							<script type='text/javascript'><!--//<![CDATA[
							   var m3_u = (location.protocol=='https:'?'https://ecwd.net/adserver/www/delivery/ajs.php':'http://ecwd.net/adserver/www/delivery/ajs.php');
							   var m3_r = Math.floor(Math.random()*99999999999);
							   if (!document.MAX_used) document.MAX_used = ',';
							   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
							   document.write ("?zoneid=4");
							   document.write ('&amp;cb=' + m3_r);
							   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
							   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
							   document.write ("&amp;loc=" + escape(window.location));
							   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
							   if (document.context) document.write ("&context=" + escape(document.context));
							   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
							   document.write ("'><\/scr"+"ipt>");
							//]]>--></script><noscript><a href='http://ecwd.net/adserver/www/delivery/ck.php?n=a952d861&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ecwd.net/adserver/www/delivery/avw.php?zoneid=4&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a952d861' border='0' alt='' /></a></noscript>

			    		</div>
			    	</div>
			    </div>
            </div>
	    </div>



	           	        
	     <div class="veja-mais">
		     <div class="container">

		     	<?php print views_embed_view('mais_noticias_3', 'default'); ?>

		    </div>
		</div>
		

		<div class="insta">                  
		    <div class="container">
		        <h4><i class="fa fa-instagram" aria-hidden="true"></i> <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank">psicodelia_org</a></h4>
		        <?php print render($page['sidebar_home']);  ?>  
		    </div>
		</div>

		

		<?php include "footer.tpl.php"; ?>	


<script type="text/javascript">
jQuery(document).ready(function ($) {
   
    /* link para autor da noticia*/
    var linkUser = $('.view-topo-noticia .link-user a').attr('href');    
    $('.view-topo-noticia a.nome').attr('href', ''+linkUser+'');

    /* reposiciona o bloco do Disqus */
    $('#disqus_thread').appendTo('#comentarios .bloco-comentarios');
        
});

</script>    




