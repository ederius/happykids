<!DOCTYPE html>
<html lang="es" ng-app="happykids">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="Title" content="Centro de enseñanza y estimulaci&oacute;n Happy kids">
    <meta name="rights" content="Centro de enseñanza y estimulaci&oacute;n Happy kids">
    <meta name="Description" content="Nuestra misión es brindar formación integral y personalizada a niños y niñas en los niveles maternal, preescolar y primaria, que logre 		   potenciar valores, capacidades y habilidades, acompañado de un aprendizaje feliz, basado en el afecto, que le permita desarrollar seguridad, independencia y capacidad de análisis. Lo que facilitará desenvolverse adecuadamente en cualquier circunstancia. Igualmente buscamos la estimulación y el desarrollo de las inteligencias múltiples.">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Happy Kids, Happykids, mejores colegios, Riohacha, La Guajira">
    <meta name="google-site-verification" content="9BbdmBL-MvqydPsYL0iEPwUfRdKkfdzL0aCbtJdQscc" />

    <title>Centro de enseñanza y estimulaci&oacute;n Happy Kids</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- CSS  -->
    <link href="css/slider.css" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>







    <!--  Scripts-->

</head>
<body>

<div ng-include src="'plantillas/menu.html'"></div>
<div class="div-carga" ng-view>

<div ng-include src="'plantillas/body.html'"></div>


</div>
<div ng-include src="'plantillas/footer.html'"></div>




</body>





</html>


    <!--  Scripts-->
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/angular/angular.min.js"></script>
    <script src="js/angular/angular-route.min.js"></script>
    <script src="js/ng-tweet.js"></script>

    <script src="js/init.js"></script>
    <script src="js/angular/script.js"></script>



    <script type="text/javascript" src="js/source/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="js/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="js/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="js/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="js/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="js/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <script>
            $('.fancybox').fancybox();
    </script>





<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74193575-1', 'auto');
  ga('send', 'pageview');

</script>


<script >
    $(document).live("ready", function(){
        $(".twitter").load("plantillas/widget/sidebar.html");
    })
</script>
<script>
$(window).load( function() {

    $( '.sldr' ).each( function() {
        var th = $( this );
        th.sldr({
            focalClass    : 'focalPoint',
            offset        : th.width() / 2,
            sldrWidth     : 'responsive',
            nextSlide     : th.nextAll( '.sldr-nav.next:first' ),
            previousSlide : th.nextAll( '.sldr-nav.prev:first' ),
            selectors     : th.nextAll( '.selectors:first' ).find( 'li' ),
            toggle        : th.nextAll( '.captions:first' ).find( 'div' ),
            sldrInit      : sliderInit,
            sldrStart     : slideStart,
            sldrComplete  : slideComplete,
            sldrLoaded    : sliderLoaded,
            sldrAuto      : true,
            sldrTime      : 5000,
            hasChange     : true
        });
    });
});



</script>