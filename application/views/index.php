
<!DOCTYPE html>
<html lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <meta charset="utf-8">
    <title> Por un mejor internet Bolivia</title>
    <meta name="description" content="">
    <meta name="author" content="">


    <script type="text/javascript">
        base_url = "<?=base_url() ?>";
    </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
    <script src="<?=base_url();?>js/jquery.elastic.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=base_url();?>js/jquery.watermarkinput.js" type="text/javascript"></script>
    <script src="<?=base_url();?>js/jquery.livequery.js" type="text/javascript"></script>
    <script src="<?=base_url();?>js/jquery.form.js" type="text/javascript"></script>
   <!-- <script src="<?=base_url();?>js/ie-fixs.js" type="text/javascript"></script> -->
    <script src="<?=base_url();?>js/core.js" type="text/javascript"></script>
    <script src="<?=base_url();?>js/wallscript.js" type="text/javascript"></script>
    <script src="<?=base_url();?>js/javascript.js" type="text/javascript"></script>
    <script src="<?=base_url();?>js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
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


    <script>
    function toggle(div_id) {
    var el = document.getElementById(div_id);
    if ( el.style.display == 'none' ) {	el.style.display = 'block';}
    else {el.style.display = 'none';}
    }
    function blanket_size(popUpDivVar) {
    if (typeof window.innerWidth != 'undefined') {
    viewportheight = window.innerHeight;
    } else {
    viewportheight = document.documentElement.clientHeight;
    }
    if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
    blanket_height = viewportheight;
    } else {
    if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
    blanket_height = document.body.parentNode.clientHeight;
    } else {
    blanket_height = document.body.parentNode.scrollHeight;
    }
    }
    var blanket = document.getElementById('blanket');
    blanket.style.height = blanket_height + 'px';
    var popUpDiv = document.getElementById(popUpDivVar);
    popUpDiv_height=blanket_height/2-150; 
    //// 150 is half popups height 
    popUpDiv.style.top = getPageScroll2()[1] + (getPageHeight2() / 10);
    }
    function window_pos(popUpDivVar) {

    if (typeof window.innerWidth != 'undefined') {
    viewportwidth = window.innerHeight;
    } else {
    viewportwidth = document.documentElement.clientHeight;
    }
    if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
    window_width = viewportwidth;
    } else {
    if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
    window_width = document.body.parentNode.clientWidth;
    } else {
    window_width = document.body.parentNode.scrollWidth;
    }
    }
    var popUpDiv = document.getElementById(popUpDivVar);
    window_width=window_width/2-350;
    //150 is half popup's width
    popUpDiv.style.top = getPageScroll2()[1] + (getPageHeight2() / 10)+'px';
    popUpDiv.style.left = window_width + 'px';

    }
    function popup(windowname) {
    //(windowname);
    window_pos(windowname);
    //toggle('blanket');
    toggle(windowname);		
    }

    // getPageScroll() 
    function getPageScroll2() {
    var xScroll, yScroll;
    if (self.pageYOffset) {
    yScroll = self.pageYOffset;
    xScroll = self.pageXOffset;
    } else if (document.documentElement && document.documentElement.scrollTop) {	 // Explorer 6 Strict
    yScroll = document.documentElement.scrollTop;
    xScroll = document.documentElement.scrollLeft;
    } else if (document.body) {// all other Explorers
    yScroll = document.body.scrollTop;
    xScroll = document.body.scrollLeft;
    }
    return new Array(xScroll,yScroll)
    }

    // Adapted from getPageSize() by quirksmode.com
    function getPageHeight2() {
    var windowHeight
    if (self.innerHeight) {	// all except Explorer
    windowHeight = self.innerHeight;
    } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
    windowHeight = document.documentElement.clientHeight;
    } else if (document.body) { // other Explorers
    windowHeight = document.body.clientHeight;
    }
    return windowHeight
    }

    function EnableButton()
    {
    $('.gbutton').css('opacity', '1');	
    }

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

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?=base_url();?>css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>css/wall.css" type="text/css" rel="stylesheet" />
    <link type="text/css" href="<?=base_url();?>css/stylesheet.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Krona+One' rel='stylesheet' type='text/css'>
    <style>
      .krona{
        font-family: 'Krona One', cursive;
        text-align: center;
      }

    </style>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
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

  </head>

  <body>
    <div class="container containerinternet">
      
        <div class="row">
          <div class="span6">    
            <img src="<?=base_url();?>img/logo3.png"><br> <BR>
          </div>
          <div id="fb-root"></div>
          <script>               
            window.fbAsyncInit = function() {
              FB.init({
                appId:"<?php echo $fb_data['appId'] ?>", 
                cookie: true, 
                xfbml: true,
                oauth: true
              });
              FB.Event.subscribe('auth.login', function(response) {
                window.location.reload();
              });
              FB.Event.subscribe('auth.logout', function(response) {
                window.location.reload();
              });
            };
            (function() {
              var e = document.createElement('script'); e.async = true;
              e.src = document.location.protocol +
                '//connect.facebook.net/en_US/all.js';
              document.getElementById('fb-root').appendChild(e);
            }()); 
          </script>
        </div>        
        <div class="row">
          <div class="span2 columns">
            <ul class="nav nav-pills">
            <li <?php if($section=="problem") echo 'class="active"' ?>><a href="<?=base_url();?>index/index/problem" class="">EL PROBLEMA</a></li>
            </ul>
          </div> 
          <div class="span2 columns">
            <ul class="nav nav-pills">
              <li <?php if($section=="root") echo 'class="active"' ?>><a href="<?=base_url();?>index/index/root"  class="">LA RAZON DEL PROBLEMA</a></li>
            </ul>
          </div>   

          <div class="span2 columns">
            <ul class="nav nav-pills">
              <li <?php if($section=="solution") echo 'class="active"' ?>><a href="<?=base_url();?>index/index/solution"  class=""> SOLUCIONES</a></li>
            </ul>
          </div>  


          <div class="span2 columns">
            <ul class="nav nav-pills">
              <li <?php if($section=="future") echo 'class="active"' ?>><a href="<?=base_url();?>index/index/future"  class=""> USO DEL INTERNET </a></li>
            </ul>
          </div>  


          <div class="span2 columns">
            <ul class="nav nav-pills">
              <li <?php if($section=="free") echo 'class="active"' ?>><a href="<?=base_url();?>index/index/free"  class=""> LIBRE </a></li>
            </ul>
          </div>  

        </div>
            <hr>
        
        <div class="row">
              
        </div>
        <div class="row">
            <div class="span6 columns">
               

                <?php if($section=="problem") { ?> 
                        <h3> Contenido  </h3>
                        <div id="myCarousel" class="carousel">
                        <div class="carousel-inner">
                          <div class="active item" id="problem1"> 
                              <div class="hero-unit" align="center">

                              <iframe width="300" height="250" src="http://www.youtube.com/embed/TYH8yL-FomQ" frameborder="0" allowfullscreen></iframe>
                              <div class="carousel-caption">
                                <h4> Eduardo Rojas en ATB</h4>
                                <p>Se explica porque el internet tiene porblemas en Bolivia </p>
                              </div> <br>
                              <div class="fb-comments" data-href="http://localhost/internetbolivia/index/index/problem#problem3" data-num-posts="5" data-width="470"></div>

                              </div>

                          </div>
                          <div class="item" id="problem2"> Es un problema para alguien?, si no crees ve estas paginas y grupos en facebook:

                          </div>
                          <div class="item" id="problem3"></div>
                        </div>
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                      </div>
                        <h3> Cuestioanrios, etc  </h3>

                      <!--
                      <i>
                      <small>                      Comparte tus experiencias con otras personas igual de frustradas que tu! No estas sol@!<br>
                      Nos importa tus opiniones. Pon lo que quieras.<br>
                      Pero tambien nos interesa los datos objetivos. ¿Es caro respecto a que? ¿Es mas lento que otros paises de la region? del mundo? Comparte lo que sabes y si tienes enlaces, datos de estudios o publicaciones compartelos.<br>
                      Toda la informacion se podra acceder por esta pagina. </small>
                      <br> 
                   </i> -->

<?php } ?>
                <?php if($section=="root") { ?> <i> 
                        <h3> Contenido  </h3>
                        <h3> Cuestioanrios, etc  </h3>

                   </i>
<?php } ?>
                <?php if($section=="solution") { ?> <i>
                        <h3> Contenido  </h3>
                        <h3> Cuestioanrios, etc  </h3>
 <?php } ?>
                <?php if($section=="future") { ?> 
                        <h3> Contenido  </h3>
                        <h3> Cuestioanrios, etc  </h3>


 <?php } ?>
                <?php if($section=="free") { ?> <i>
                        <h3> Contenido  </h3>
                        <h3> Cuestioanrios, etc  </h3>

                    <?php } ?>

                  <i>
                  <!-- <small> * Toda publicidad o spam sera eliminada </small> -->
                  </i>
                <p>
                </a>
                </p>
          </div>
            
          <div class="span6 columns">


          <?php if (!$fb_data['uid']) { ?>                    

          <div class="login"> 
                  <fb:login-button autologoutlink="true">Ingresa con facebook</fb:login-button>
                  <strong>
                  para poder comentar, votar, borrar y subir archivos.<br> <br>
                  O ingresa tu nombre/nick: <input type="text" class="input-small" id="nick" value="<? echo getUserName(); ?>" placeholder="Anónimo"> para comentar. </strong>
                <?php }else { ?>
          <div class="login"> 

                      <div class="divtablewrapper">
                          <div class="divtable">
                            <div class="divrow">
                              <div class="rowspanned divcell">
                                 <a href="#">  <img class="rounded-corners" src="http://graph.facebook.com/<?=$fb_data['uid']?>/picture" > </a>
                              </div>
                              <div class="divcell">
                                 <a href="#"> <?=$fb_data['me']['name']?> </a>
                              </div>
                            </div>
                            <div class="divrow">
                              <div class="empty divcell"></div>
                              <div class="divcell">
                                   <a id="exit" style="cursor:hand"> Salir </a> 
                                   <!-- <fb:login-button autologoutlink="true">Salir</fb:login-button> -->
                              </div>
                            </div>
                          </div>
                        </div>
                <?php } ?>

          </div>



              <h3> 
                <?php if($section=="problem") { ?> ¿Que opinas del internet en Bolivia? ¿Hay algun problema? <?php } ?>
                <?php if($section=="root") { ?> ¿Porque piensas que el internet es malo en Bolivia? <?php } ?>
                <?php if($section=="solution") { ?> ¿Que podemos hacer para mejorar el internet?<?php } ?>
                <?php if($section=="future") { ?> ¿? <?php } ?>
                <?php if($section=="free") { ?> Pon lo que quieras respecto al internet en Bolivia! <?php } ?>
              </h3>
              <div style="width:600px; margin-top:10px; padding:5px;">
                <div class="UIComposer_Box" id="UIComposer_Box">

                  <input type="hidden" value='<?=$section?>' id='section'> 
                  <input type="hidden" value='<?=$fb_data['logoutUrl']?>' id='logouturl'> 

                  <textarea id="watermark" class="input"  placeholder="Escribe tu opinion y tambien puedes subir datos que lo comprueben" cols="60" style="min-height: 58px; color:#777;background-color:#fff; border-width: 0;
                  font-size: 13px; height: 16px; margin: 0; border: 0;outline: 0; width:588px; overflow: hidden;" wrap="hard" name="watermark"></textarea>

                    <input type="hidden" name="keepID" id="keepID" value="<? echo getUserId(); ?>" />
                    <input type="hidden" name="posted_on" id="posted_on" value="<? echo getUserId(); ?>" style=" display: inline;"/>
                  <div align="right">
                    <?php if ($fb_data['uid']) { ?>                    
                    <a class="btn" href="#" id="uploadMedia" style="cursor:pointer"><i class="icon-folder-open"></i></a>
                    <? } ?>
                    <div align="right" style="height:30px; margin-top:4px; display: inline;" class="main_bar">
                      <div role="button" class="gbutton" aria-disabled="true" style="-webkit-user-select: none; align: right;" id="shareButtons">Comparte</div>
                    </div>
                    <div id="shareImageDiv" align="right" style="display: none;">
                        <div role="button" class="gbutton" aria-disabled="true" style="-webkit-user-select: none; opacity:1 ; align: right;" id="shareImageButton">Comparte</div>
                    </div>
                 </div>


                </div>
                <div class="wrap" align="center" id="show_img_upload_div" style="padding-top:10px; display:none">
                  <div align="right" >
                    <form action="<?=base_url();?>/wall/upload" id="ajaxuploadfrm" method="post" enctype="multipart/form-data" >
                      <b>Seleccciona  un archivo (Maximo 1mb)</b>
                      <br/><input type="file" name="current_image" id="current_image" />
                    </form>
                    <br />
                    <div id="showthumb">
                    </div>
                  </div>
                </div>
                <br clear="all">

                <div id="order"> 
                <strong> Ordenar por: </strong>
                <ul class="nav nav-pills" > 
                  <li id="date_created" class="active"><a  href="javascript:order_by('date_created')">Fecha</a></li>
                  <li id="likes_order"><a href="javascript:order_by('likes')">Popularidad</a></li>
                  <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Popularidad<b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu">
                      <li><a href="#">Hoy</a></li>
                      <li><a href="#">Semana</a></li>
                      <li><a href="#">Mes</a></li>
                      <li><a href="#">Siempre</a></li>
                    </ul>
                  </li> -->
                </ul>                 
                </div>
                <br clear="all">

                <div id="loadpage" style="display:none;"></div>

                </div>

                </div>

                <div id="popUpDiv" style="display:none;"> 
                  <a href="javascript:;" class="close" onclick="popup('popUpDiv')">&times;</a>
                    </a> 
                <div>
                <span></span>
                <div id="comment_part"></div>
              </div>

              <script>
                //showCommentBox
                $('a.showCommentBox').livequery("click", function(e){

                var getpID =  $(this).attr('id').replace('post_id','');	
                //$('.commentBox').hide();

                $("#commentBox-"+getpID).css('display','');
                $("#commentMark-"+getpID).focus();
                $("#commentBox-"+getpID).children("img.CommentImg").show();			
                //$("#commentBox-"+getpID).children("a#SubmitComment").show();		
                });	

              </script>

            </div>

      </div>
      
      <hr>
      <footer>
        <p>&copy; Por un mejor internet en Bolivia 2012</p>
      </footer>

    </div>
    <div class="slide-out-div">
        <a class="handle" href="http://link-for-non-js-users">Content</a>
        <h3>Contactanos  y envia tus sugerencias a: </h3>
        <!--<a href="mailto:wpaoli@gmail.com">contacto@unmejorinternet.com</a><br /><br /> -->
    </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>js/bootstrap-transition.js"></script>
    <script src="<?=base_url();?>js/bootstrap-dropdown.js"></script>
    <script src="<?=base_url();?>js/bootstrap-carousel.js"></script>

    <!--<script src="<?=base_url();?>js/bootstrap-alert.js"></script> -->
    <!--<script src="<?=base_url();?>js/bootstrap-modal.js"></script> 
    <script src="<?=base_url();?>js/bootstrap-scrollspy.js"></script>
    <script src="<?=base_url();?>js/bootstrap-tab.js"></script>
    <script src="<?=base_url();?>js/bootstrap-tooltip.js"></script>
    <script src="<?=base_url();?>js/bootstrap-popover.js"></script>
    <script src="<?=base_url();?>js/bootstrap-button.js"></script>
    <script src="<?=base_url();?>js/bootstrap-collapse.js"></script>
    <script src="<?=base_url();?>js/bootstrap-typeahead.js"></script>-->

  </body>
</html>
