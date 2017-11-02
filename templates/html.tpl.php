<!DOCTYPE html>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

<meta name="google-site-verification" content="kF7peCDsX3soU9nTnEJs1JEPgi6pPnDT4KdzOrAHvFI" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">

<script src="https://use.fontawesome.com/fa0f5ca587.js"></script>


<?php print $styles; ?>
<?php print $scripts; ?>


</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=247726958605330";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<div id="wrapper" class="toggled">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</div>
<script src="//cdn.pushnews.eu/push/ilabspush.min.js" async></script>
<script type="text/javascript">
    var _ilabsPushConfig = {
        optin: {
            activation: {
                type: "auto"
            },
            "%desktopImage%": "https://icons.pushnews.eu/2017/08/30/59a6d52dc40e4.png",
            "%desktopTxtTitle%": "Seja o primeiro a receber nossas atualizações!",
            "%desktopTxtBody%": "Clique para ser informado quando publicarmos conteúdo novo, é grátis!",
            "%desktopTxtButtonNo%": "Não, obrigado",
            "%desktopTxtButtonYes%": "Aceitar"
        },
        popup: {
            name: "Psicodelia org",
            domain: "psicodelia-org-59a6d46419300.pushnews.eu",
            appId: "33d80145-309b-44a3-8ae7-936cc5b5363c",
            actionMessage: "gostaria de enviar notificações de conteúdo",
            notificationIcon: "https://icons.pushnews.eu/2017/08/30/59a6d52dc40e4.png",
            notificationTitle: "Exemplo de notícia",
            notificationMessage: "Aparecerá assim no seu navegador",
            caption: "(You can disable them at any time)"
        },
        osp: {
            status: true,
            activation: {
                type: "scroll"
            }
        }
    };
    var IlabsPush = IlabsPush || [];
    IlabsPush.push(["initHttps", _ilabsPushConfig]);
</script>


</body>
</html>
