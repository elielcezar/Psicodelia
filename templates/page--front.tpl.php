
<?php include "header.tpl.php"; ?>	

		<div class="container">
            <div class="row">
		      
		      <?php print $messages; ?>
		      <?php if (!empty($tabs)): ?>
		        <?php print render($tabs); ?>
		      <?php endif; ?>					      

            </div>	
       </div>				
        
        <div id="principal">

            <div class="banner">

<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://ecwd.net/adserver/www/delivery/ajs.php':'http://ecwd.net/adserver/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=1");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://ecwd.net/adserver/www/delivery/ck.php?n=afb01d1f&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ecwd.net/adserver/www/delivery/avw.php?zoneid=1&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=afb01d1f' border='0' alt='' /></a></noscript>

            </div>



            <div class="destaques">
                  
                    <div class="col-sm-8 destaque destaque-1">
                        <?php print views_embed_view('destaque_home_1', 'default'); ?>
                    </div>
                    <div class="col-sm-4 destaque destaque-2">
                        <div class="col-sm-12 destaque destaque-3">
                            <?php print views_embed_view('destaque_home_2', 'default'); ?>
                        </div>
                        <div class="col-sm-12 destaque destaque-4">
                            <?php print views_embed_view('destaque_home_3', 'default'); ?>
                        </div>
                    </div>
             
            </div>

            <div class="container">
              <div class="mais-noticias">
                <div class="row">
                	<div class="col-sm-12">
                		<div class="row">
                		      <?php print views_embed_view('mais_noticias', 'default'); ?>
                        </div>
                        <div class="row">
                              <?php print views_embed_view('mais_noticias_2', 'default'); ?>
                		</div>
                	</div>
                </div>
              </div>
            </div> 

            <section class="videos dark-bg"> 

                    <div class="container">
                        <div class="row">
                            <?php print views_embed_view('video_destaque_home', 'default'); ?>
                        </div>
                    </div>
              
                    <div class="col-sm-12 veja-mais">
                        <a href="http://psicodelia.org/videos" class="btn">Veja mais</a>
                    </div>
                       
            </section>

        </div>   

         <div class="insta">                  
            <div class="container">
                <h4><i class="fa fa-instagram" aria-hidden="true"></i> <a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank">psicodelia_org</a></h4>
                <?php print render($page['sidebar_home']);  ?>  
            </div>
        </div>

        <div class="banner">


          <script type='text/javascript'><!--//<![CDATA[
             var m3_u = (location.protocol=='https:'?'https://ecwd.net/adserver/www/delivery/ajs.php':'http://ecwd.net/adserver/www/delivery/ajs.php');
             var m3_r = Math.floor(Math.random()*99999999999);
             if (!document.MAX_used) document.MAX_used = ',';
             document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
             document.write ("?zoneid=2");
             document.write ('&amp;cb=' + m3_r);
             if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
             document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
             document.write ("&amp;loc=" + escape(window.location));
             if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
             if (document.context) document.write ("&context=" + escape(document.context));
             if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
             document.write ("'><\/scr"+"ipt>");
          //]]>--></script><noscript><a href='http://ecwd.net/adserver/www/delivery/ck.php?n=a307af8a&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ecwd.net/adserver/www/delivery/avw.php?zoneid=2&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a307af8a' border='0' alt='' /></a></noscript>

        </div>


	<?php include "footer.tpl.php"; ?>	    

<script type="text/javascript">
jQuery(document).ready(function ($) {
    
    /* move destaques da home para o topo */
    var screenSize = $(window).width();
    if(screenSize>=768){
        $('.front .destaques').appendTo('header .container');
    }

});

</script>