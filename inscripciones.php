<?php 
/*
    Template Name: Inscripciones
*/
?>
<!DOCTYPE html>
<html>

<head>   
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
  <meta name="description"content="">   
  <title>Fototeca - Inscripciones</title> 


  <!-- Icons -->  
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/font-awesome.min.css" rel="stylesheet">
  <!-- css -->  
   <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/bootstrap.min.css" rel="stylesheet">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/style.css" rel="stylesheet">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/responsive.css" rel="stylesheet">
</head>

<body class="Inscripciones_page">
<div class="inscripciones-page">
   
  <header id="header">
    <nav class="navbar navbar-inverse menu-bar header_menu" id="header_menu"">
      <div class="container">
        <div class="navbar-header">
          <div class="navbar_logo">
            <a class="navbar-brand" href="/">
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/logo.png">
            </a>
          </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>
        </div>
        
        <div class="collapse navbar-collapse menu-list" id="myNavbar">
          <div class="search-container">
            <form action="/action_page.php">
              <button type="submit"><i class="fa fa-search"></i></button>
              <input type="text" placeholder="Buscar..." name="search">
            </form>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li><a href="/about/">About</a></li>
            <li><a href="/escuela/">Escuela</a></li>
            <li><a href="/eventos/">Eventos</a></li>
            <li><a href="/es-o/">Galeria ES-O</a></li>
            <li><a href="/lab/">LAB de impresion</a></li>
            <li><a href="/blog/">Blog</a></li>
            <li>
              <form class="searchbox">
                <input type="search" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                <input type="submit" class="searchbox-submit" value="">
                <span class="searchbox-icon"><i class="fa fa-search"></i></span>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>




 <div class="inscrip-form">
         <h1 class="heading"><span class="line-border"></span>
          Inscripciones<img class="book" src="http://68.183.113.49/wp-content/themes/fototeca/img/pencil.png"></h1>
         <h3 class="sun-head">Paso 1</h3>
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner slider_sec">
      <div class="item active">
      <!--form class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-6">
            <input type="text" class="form-control" id="name" placeholder="Jane Doe de Jesús López" name="name" required="required">
          </div>
        </div>
        <div class="form-group">
         <div class="col-sm-6">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="required">
        </div>
      </div>
        <div class="form-group">        
          <div class="col-sm-6">
            <input type="text" class="form-control" id="number" placeholder="Teléfono" name="name" required="required">
          </div>
        </div>

         <div class="form-group">        
          <div class="col-sm-6">
            <select class="form-control" id="sel1" required="required">
              <option>¿En qué zona vives?</option>
              <option>Spain</option>
              <option>Spain</option>
              <option>Spain</option>
            </select>
          </div>
        </div>
         <div class="form-group">        
          <div class="col-sm-6">
            <select class="form-control" id="sel1" required="required">
              <option>Selecciona el programa / taller / diplomado</option>
              <option>MBBS</option>
              <option>MBA</option>
              <option>MCA</option>
            </select>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-4 col-sm-10">
            <button class="btn follow">SIGUIENTE </button>
          </div>
        </div>
      </form-->

      <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Jane Doe de Jesús López" name="name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
        </div>
        <div class="form-group">   
          <div class="col-sm-offset-1 col-sm-10">     
            <input type="text" class="form-control" id="number" placeholder="Teléfono" name="name">
          </div>
        </div>

        <div class="form-group">  
          <div class="col-sm-offset-1 col-sm-10">      
            <select class="form-control" id="sel1">
              <option>¿En qué zona vives?</option>
              <option>Spain</option>
              <option>Spain</option>
              <option>Spain</option>
            </select>
         </div>
       </div>

       <div class="form-group">  
          <div class="col-sm-offset-1 col-sm-10">      
            <select class="form-control" id="sel1">
              <option>Selecciona el programa / taller / diplomado</option>
              <option>MBBS</option>
              <option>MBA</option>
              <option>MCA</option>
            </select>
         </div>
       </div>
        <div class="form-group">        
          <div class="col-sm-offset-6 col-sm-4">
            <button class="btn follow">SIGUIENTE </button>
          </div>
        </div>
      </form>
      </div>



      <div class="item">
    <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Jane Doe de Jesús López" name="name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
        </div>
        <div class="form-group">   
          <div class="col-sm-offset-1 col-sm-10">     
            <input type="text" class="form-control" id="number" placeholder="Teléfono" name="name">
          </div>
        </div>

        <div class="form-group">  
          <div class="col-sm-offset-1 col-sm-10">      
            <select class="form-control" id="sel1">
              <option>¿En qué zona vives?</option>
              <option>Spain</option>
              <option>Spain</option>
              <option>Spain</option>
            </select>
         </div>
       </div>

       <div class="form-group">  
          <div class="col-sm-offset-1 col-sm-10">      
            <select class="form-control" id="sel1">
              <option>Selecciona el programa / taller / diplomado</option>
              <option>MBBS</option>
              <option>MBA</option>
              <option>MCA</option>
            </select>
         </div>
       </div>
        <div class="form-group">        
          <div class="col-sm-offset-6 col-sm-4">
            <button class="btn follow">SIGUIENTE </button>
          </div>
        </div>
      </form>
    </div>
    
      <div class="item">
      <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Jane Doe de Jesús López" name="name">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
        </div>
        <div class="form-group">   
          <div class="col-sm-offset-1 col-sm-10">     
            <input type="text" class="form-control" id="number" placeholder="Teléfono" name="name">
          </div>
        </div>

        <div class="form-group">  
          <div class="col-sm-offset-1 col-sm-10">      
            <select class="form-control" id="sel1">
              <option>¿En qué zona vives?</option>
              <option>Spain</option>
              <option>Spain</option>
              <option>Spain</option>
            </select>
         </div>
       </div>

       <div class="form-group">  
          <div class="col-sm-offset-1 col-sm-10">      
            <select class="form-control" id="sel1">
              <option>Selecciona el programa / taller / diplomado</option>
              <option>MBBS</option>
              <option>MBA</option>
              <option>MCA</option>
            </select>
         </div>
       </div>
        <div class="form-group">        
          <div class="col-sm-offset-6 col-sm-4">
            <button class="btn follow">SIGUIENTE </button>
          </div>
        </div>
      </form>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="chat-div">
  <span><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>!Chatea con nosotros!</a></span>
</div>
 </div>

<!--div class="bottom-srh">
  <div class="container">
<form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
     <div class="input-group-btn">
      <button class="btn btn-default">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
    <input type="search" class="form-control" placeholder="Buscar">
  </div>
</form>
</div>
</div-->


<section class="section-div newsletter">
  <div class="container">
    <div class="newsletter-div">
      <h1 class="heading">Newsletter <img src="http://68.183.113.49/wp-content/themes/fototeca/img/newsletter.jpg"></h1>
      <p>Recibe en la intimidad de tu bandeja de entrada nuestro boletín semanal.<br>
       Noticias, tips, eventos, talleres y más.</p>
    <form class="navbar-form news-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="janedoe@gmail.com">
      </div>
   </form>
   <div class="subcribr-btn">
          <a href="#"><button class="btn btn-sub btn_withborder" type="submit">SUSCRÍBETE<i class="fa fa-envelope icon"></i></button></a>
    </div> 
   </div> 
 </div>
</section>

  <footer id="footer" class="section-div">
    <div class="container">
      <div class="row">
        <div class="footer_sec">
          <ul class="footer-sec">
            <li><a href="/escuela/"><h4 class="foot_head">Escuela</h4></a></li>
            <li><a href="/escuela/">Programa Foto 360.</a></li>
            <li><a href="/escuela/">Talleres <br/> Especializados.</a></li>
            <li><a href="/escuela/">Talleres <br/> Internacionales.</a></li>
            <li><a href="/escuela/">Diplomado en <br/> Fotografía.</a></li>
            <li><a href="/inscripciones/">Inscripciones.</a></li>
            <li><a href="/escuela/">Soporte Escuela.</a></li>
          </ul>  
          <ul class="footer-sec ul_sec">
            <li><a href="/eventos/"><h4 class="foot_head">Eventos</h4></a></li>
            <li><a href="/eventos/">Conversatorios.</a></li>
            <li><a href="/eventos/">Exposiciones. </a></li>
            <li><a href="/eventos/">Webinars.</a></li>
          </ul>     
        </div>

        <div class="footer_sec">
          <ul class="footer-sec">
            <li><a href="/es-o/"><h4 class="foot_head">Galeria ES-O</h4></a></li>
            <li><a href="/es-o/">Próximas exposiciones.</a></li>
            <li><a href="/es-o/">Statement.</a></li>
            <li><a href="/es-o/">Exposiciones anteriores.</a></li>
          </ul>
          <ul class="footer-sec ul_sec">
            <li><a href="/lab/"><h4 class="foot_head">LAB de Impresión</h4></a></li>
            <li><a href="/lab/">LAB.</a></li>
            <li><a href="/lab/">Biblioteca. </a></li>
            <li><a href="/lab/">Estudios de iluminación.</a></li>
          </ul>  
        </div>

        <div class="footer_sec">
          <ul class="footer-sec">
            <li><a href="/about"><h4 class="foot_head">About</h4></a></li>
            <li><a href="/about/#quienes_somos">Quienes somos.</a></li>
            <li><a href="/about/#recorrido">Recorrido.</a></li>
            <li><a href="/about/">Exposiciones <br/> internacionales.</a></li>
            <li><a href="/about/">Revisiones de <br/> portafolios.</a></li>
            <li><a href="/about/">Oportunidades para los <br/> Fototecos.</a></li>
            <li><a href="/es-o/">Galeria ES-O</a></li>
            <li><a href="/docentes/">Docentes.</a></li>
            <li><a href="/#blog">Alumnos.</a></li>
            <li><a href="/about/">Liderazgo .</a></li>
            <li><a href="/escuela/#staff">Staff.</a></li>
            <li><a href="/about/">Legado.</a></li>
            <li><a href="/about/">Fechas Importantes.</a></li>
          </ul>  
        </div>

        <div class="footer_sec">
          <ul class="footer-sec">
            <li><a href="/blog/"><h4 class="foot_head">Blog</h4></a></li>
            <li><a href="/faqs/"><h4 class="foot_head">FAQ</h4></a></li>
            <li><a href="/"><h4 class="foot_head">Alumni</h4></a></li>
            <li><a href="/">Login</a></li>
            <li><a href="/">Perfil</a></li>
          </ul>   
        </div>
        <div class="footer_sec footer_sec_4">
            <ul class="footer-sec contact">
                <li><h4 class="foot_head">Contacto</h4></li>
                <p>Via 6, 3-56 zona 4, Edificio</br>
                OEG, Ciudad de Guatemala,</br>
                Guatemala. 010004
              </p>
              <p>hola@lafototeca.org</br>
              comunicacion@lafototeca.org</br>
              T.:(502)23368570
             </p>
          </ul>
          <ul class="footer-sec contact">
            <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/twitter.png"></a></li>
            <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/facebook.png"></a></li>
            <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/youtube.png"></a></li>
            <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/instagram.png"></a></li>
          </ul>       
        </div>

      </div>
      <div class="footer-bottom">
        <p>La Fototeca S.A. © 2018 - Todos los derechos reservados. Todas las imágenes son propiedad de su autor. Site developed by: <span>Jane doe</span></p>

    </div>
  </footer>
  
  
  <!-- Core -->
  <script src="//fototeca.bunker.media/wp-content/themes/fototeca/js/jquery.min.js"></script>
 <!--  <script src="./assets/vendor/popper/popper.min.js"></script> -->
  <script src="//fototeca.bunker.media/wp-content/themes/fototeca/js/bootstrap.min.js"></script>

<script type="text/javascript">
   $('.navbar-toggle').click(function(){
          if($('body').hasClass('head_body')){
              $('body').removeClass('head_body');
          } else{
            $('body').addClass('head_body');
          }
             
            });
  $(document).ready(function(){
     

            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','block');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }


</script>
</body>

</html>