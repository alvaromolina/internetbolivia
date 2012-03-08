
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <meta charset="utf-8">
    <title>Por un mejor internet en Bolivia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Porque estamos cansados de tener un mal servicio en nuestro pais y queremos mejorar esta situacion.
Unetenos para ser mas en este movimiento.">
    <meta name="author" content="alvaromolinac@gmail.com">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>js/jquery.tabSlideOut.v1.3.js"></script>
         
     <script>
       $(function(){
           $('.slide-out-div').tabSlideOut({
               tabHandle: '.handle',                              //class of the element that will be your tab
               pathToTabImage: '<?= base_url() ?>img/tabcontactos.png',          //path to the image for the tab *required*
               imageHeight: '200px',                               //height of tab image *required*
               imageWidth: '40px',                               //width of tab image *required*    
               tabLocation: 'left',                               //side of screen where tab lives, top, right, bottom, or left
               speed: 300,                                        //speed of animation
               action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
               topPos: '200px',                                   //position from the top
               fixedPosition: false,                               //options: true makes it stick(fixed position) on scroll
               onLoadSlideOut: false
           });
       });

   </script>

   

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-26920700-2']);
      _gaq.push(['_setDomainName', 'unmejorinternet.com']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <!-- Le styles -->
    <link href="<?= base_url() ?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?= base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">

    <link href="<?=base_url();?>css/style.css" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=”image_src” href=”<?= base_url() ?>img/logoMejorInternet.png”/ >
    <link rel="shortcut icon" href="<?= base_url() ?>img/logoMejorInternet.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>
        

      <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=192706770837988";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>

          <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit containerinternet">
            <img src="<?=base_url();?>img/logo3.png"><br> <BR>

      <!--  <h1>Un mejor internet para Bolivia!</h1> <br> <br> -->
<p> <h3> ¿El internet  que tenemos en Bolivia tiene <a href="<?= base_url().'index/index/problem';?>">problemas </a>?. <small> ¿Es muy lento?, ¿Es caro?, ¿No hay cobertura en muchos lugares? </small> </h3> <br> 

<h3>Pero, alguna vez te preguntaste <a href="<?= base_url().'index/index/root';?>"> ¿Cual es la razón? </a> <small>¿ Es porque somos un país pobre? ¿Es porque somos un país mediterráneo?  ¿Es porque el gobierno no implementa las políticas correctas? ¿O las empresas son ineficaces en su servicio? ¿O nos estan explotando? <small> </h3> <br>

<h3>
Y a todo esto <a href="<?= base_url().'index/index/solution';?>">¿Que se puede hacer? ¿ Y que se esta haciendo?. </a> </h3><br>

<strong>Esta pagina se crea para responder estas preguntas y mas importante hacer participe a todos para mejorar el internet en Bolivia. </strong><br> <br>
Creemos que es importante estar informado antes de actuar por lo que no nos limitaremos a enviar una carta al gobierno o empresas (que si lo haremos). Sino también participaremos activamente en las soluciones ya que toda acción no depende de un gobierno, una empresa sino de toda la sociedad activa. <br>
Creemos que podemos solucionar este problema y necesitamos tu ayuda para esto.
                  </p>
          <h2>¿Que puedo hacer?</h2>
          <ol>
            <li>Haz un clikc en me gusta o like de la pagina de facebook para seguir las noticias y contribuir a la pagina:<br>
<fb:like-box href="http://www.facebook.com/pages/Por-un-mejor-Internet-para-Bolivia/347049675339188" width="300" height="200" show_faces="true" stream="true" header="true"></fb:like-box>
             </li> 
            <li> Comparte la pagina mediante estos links: <fb:like href="http://unmejorinternet.com/" send="true" layout="button_count" width="50" show_faces="true"></fb:like> <br>

            <li> Comparte tus <a href="<?= base_url().'index/index/problem';?>"> problemas que tienes con internet, e informate de los problemas de otros.</a> </li>
            <li> Informate y contribuye a entender las <a href="<?= base_url().'index/index/root';?>"> causas de los problemas. </a> </li>
            <li> Como <a href="<?= base_url().'index/index/future';?>"> usas o deberias usar el internet y porque necesitas que mejore. </a> </li>
            <li> Informate y contribuye a las posibles <a href="<?= base_url().'index/index/solution';?>"> soluciones para Bolivia y para ti.</a> </li>
            <!-- <li> Involucrate con esta pagina y el movimiento! </li> -->
          </ol>

      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span12">
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Por un  mejor internet en Bolivia 2012</p>
      </footer>

    </div> <!-- /container -->

    <div class="slide-out-div">
        <a class="handle" href="http://link-for-non-js-users">Content</a>
        <h3>Contactanos  y envia tus sugerencias a: </h3>
        <a href="mailto:wpaoli@gmail.com">contacto@unmejorinternet.com</a><br /><br />
    </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
