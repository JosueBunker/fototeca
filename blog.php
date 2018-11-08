<?php 
/*
    Template Name: Blog
*/
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">   

  <title>Fototeca - Blog</title>   
  
  <!-- Favicon -->   
  <link href="http://68.183.113.49/wp-content/themes/temp/img/favicon.png" rel="icon" type="image/png">   
  <!-- Fonts -->   
  <link href="" rel="stylesheet"> 
  <!-- Icons -->  
  <link href="http://68.183.113.49/wp-content/themes/temp/css/font-awesome.min.css" rel="stylesheet">
  <!-- css -->  
  <link href="http://68.183.113.49/wp-content/themes/temp/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/temp/css/style.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/temp/css/responsive.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/temp/css/blog.css" rel="stylesheet">
</head>

<body class="blog-page">

  <div class="for_mobile menu">
    <header id="header">
      <nav class="navbar navbar-inverse menu-bar header_menu" id="header_menu"">
        <div class="container">
          <div class="navbar-header">
            <div class="navbar_logo">
              <a class="navbar-brand" href="index.html">
                <img src="http://68.183.113.49/wp-content/themes/temp/img/logo.png">
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
              <li><a href="about/">About</a></li>
              <li><a href="escuela/">Escuela</a></li>
              <li><a href="eventos/">Eventos</a></li>
              <li><a href="es-o/">Galeria ES-O</a></li>
              <li><a href="lab/">LAB de impresion</a></li>
              <li><a href="blog/">Blog</a></li>
              <li></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="bottom-srh">
      <div class="container">
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
            <input type="text" class="form-control" placeholder="Buscar">
          </div>
        </form>
      </div>
    </div>
  </div>

  <header id="header" class="for_desctop">
    <nav class="navbar navbar-inverse menu-bar header_menu" id="header_menu"">
      <div class="container">
        <div class="navbar-header">
          <div class="navbar_logo">
            <a class="navbar-brand" href="index.html">
              <img src="http://68.183.113.49/wp-content/themes/temp/img/logo.png">
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
            <li><a href="about/">About</a></li>
            <li><a href="escuela/">Escuela</a></li>
            <li><a href="eventos/">Eventos</a></li>
            <li><a href="es-o/">Galeria ES-O</a></li>
            <li><a href="lab/">LAB de impresion</a></li>
            <li><a href="blog/">Blog</a></li>
            <li><a href="#">Buscar</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <section class="blog-sec section-div slider-sec for_desctop blog-slider">
    <div class="container">
      <h1 class="heading"><span class="line-border"></span> Blog</h1> 
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
            <img src="http://68.183.113.49/wp-content/themes/temp/img/blog-slider.png" alt="Los Angeles">
            <div class="carousel-caption">
              <h4>POSPRODUCCIÓN</h4>
              <div class="inner-caption">
                <h1>Conociendo
                <span class="main_head_span">las imágenes</span></h1>
                <p>16 de junio / Por: Jane Doe</p>
              </div>
              <a href="blog-post/">
                <button type="btn" class="btn btn-learn">CONOCE MÁS 
                  <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
                </button>
              </a>
            </div>
          </div>

          <div class="item">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/blog-slider.png" alt="Chicago">
            <div class="carousel-caption">
              <h4>POSPRODUCCIÓN</h4>
              <div class="inner-caption">
                <h1>Conociendo
                <span class="main_head_span">las imágenes</span></h1>
                <p>16 de junio / Por: Jane Doe</p>
              </div>
              <a href="blog-post/">
                <button type="btn" class="btn btn-learn">CONOCE MÁS 
                  <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
                </button>
              </a>
            </div>
          </div>

          <div class="item">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/blog-slider.png" alt="New york">
            <div class="carousel-caption">
              <h4>POSPRODUCCIÓN</h4>
              <div class="inner-caption">
                <h1>Conociendo
                  <span class="main_head_span">las imágenes</span>
                </h1>
                <p>16 de junio / Por: Jane Doe</p>
              </div>
              <a href="blog-post/">
                <button type="btn" class="btn btn-learn">CONOCE MÁS 
                  <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
                </button>
              </a>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
            <div class="text-msg">
            <p>Post anterior</p>
          </div> 
        </a>
        
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
          <div class="text-msg">
            <p>Post siguiente</p>
          </div> 
        </a>
      </div>
    </div>
  </section>


  <section class="section-div slider-sec blog-slider for_mobile">
    <div class="container">
      <h1 class="heading"><span class="line-border"></span> Blog</h1> 
      <div class="mobile_slider">
        <div class="carousel-caption">
          <h3>POSPRODUCCIÓN</h3>
          <div class="inner-caption">
            <h1>Conociendo 
              <br>las imágenes
            </h1>
            <p>16 de junio / Por: Jane Doe</p>
          </div>
          <img src="http://68.183.113.49/wp-content/themes/temp/img/blog-slider.png">
          <a href="blog-post/">
            <button type="btn" class="btn btn-learn">CONOCE MÁS 
              <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>


 <section class="alumno-sec section-div blog-div bg-blog">
   <div class="container">
    <div class="main_section">
        <div class="cont_section">
          <div class="left-blog">
          </div>
           <div class="right-blog">
            <div class="stu-div">
              <p><A href="#">ALUMNO DESTACADO</a></p>
              <div class="inner-blog">
                <h1>Juan Pablo </br>Ochoa</h1>
                <img class="like-img" src="http://68.183.113.49/wp-content/themes/temp/img/like.png">
             </div>
              <p>Objectively re-engineer virtual outsourcing whereas 
              cross-media applications. Interactively reconceptualize 
              equity invested services and leading-edge leadership. 
              Assertively drive equity invested alignments whereas 
              principle-centered process improvements. 
            </p>
              <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
          </div>  
        </div>

<div class="clearfix"></div>
<div class="blog-card">
  <div class="row">
        <div class="col-sm-4 blog">
          <div class="blog-img" style="background:url(http://68.183.113.49/wp-content/themes/temp/img/b1.jpg);">
            <h2>Foto del día</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. </p>
             <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 

        <div class="col-sm-4 blog">
          <div class="blog-img" style="background:url(http://68.183.113.49/wp-content/themes/temp/img/b2.jpg);">
            <h2>Recomenda-cion</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. </p>
             <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 

        <div class="col-sm-4 blog">
          <div class="blog-img"  style="background:url(http://68.183.113.49/wp-content/themes/temp/img/b3.jpg);">
            <h2>Fotografo recomendado</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. </p>
             <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 
      </div>
 </div>

    </div>
    </div>
   </div>
 </section> 

<section class="section-div empower-div">
   <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="emp-left">
          <img src="http://68.183.113.49/wp-content/themes/temp/img/com.png">
      </div>
    </div>
    <div class="col-sm-4">
           <div class="emp-right">
            <h2>Compellingly synthesize holistic methods of empowerment </h2>
             <p>Objectively re-engineer virtual outsourcing whereas  
              cross-media applications. Interactively reconceptualize 
              equity invested services and leading-edge leadership. 
              Assertively drive equity invested alignments whereas 
              principle-centered process improvements. 
            </p>
            <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
            </button>
          </div>
        </div>

  <div class="clearfix"></div>
<div class="emp-nx">
        <div class="col-sm-4">
          <div class="emp-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/emp1.png">
            <h3>Compellingly synthesize holistic methods</h3>
            <p>Objectively re-engineer virtual outsourcing </br>whereas  
              cross-media applications. Interactively<br> reconceptualize 
              equity invested services and leading-edge leadership.</p>
              <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
           </button>
          </div>
           
        </div>
        <div class="col-sm-4">
          <div class="emp-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/emp2.png">
            <h3>Compellingly synthesize holistic methods</h3>
              <p>Objectively re-engineer virtual outsourcing </br>whereas  
              cross-media applications. Interactively<br> reconceptualize 
              equity invested services and leading-edge leadership.</p>
              <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
           </button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="emp-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/emp3.png">
            <h3>Compellingly synthesize holistic methods</h3>
              <p>Objectively re-engineer virtual outsourcing </br>whereas  
              cross-media applications. Interactively<br> reconceptualize 
              equity invested services and leading-edge leadership.</p>
              <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/temp/img/right-arrow.png" class="right_angel_ar">
           </button>
          </div>
        </div>
     </div>  
  </div> 
</div>
    </div>
    </div>
   </div>
 </section> 

 <section class="section-div blogger-div">
   <div class="container">
     <h1 class="heading"><span class="line-border"></span>Bloggers</h1>
     <div class="row">
      <div class="blg-nx">
        <div class="col-sm-4">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/b3.jpg">
            <div class="name-blog">
              <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/temp/img/turn-right.png">
              <span>Jane Doe </br>Asistente</span>
            </div>
            <div class="icon-blog">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i> </span>
          </div>
        </div>
      </div>

        <div class="col-sm-4">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/b1.jpg">
            <div class="name-blog">
              <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/temp/img/turn-right.png">
              <span>Jane Doe </br>Asistente</span>
            </div>
            <div class="icon-blog">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i> </span>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/b2.jpg">
            <div class="name-blog">
              <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/temp/img/turn-right.png">
              <span>Jane Doe </br>Asistente</span>
            </div>
            <div class="icon-blog">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i> </span>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/b3.jpg">
            <div class="name-blog">
              <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/temp/img/turn-right.png">
              <span>Jane Doe </br>Asistente</span>
            </div>
            <div class="icon-blog">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i> </span>
          </div>
        </div>
      </div>

        <div class="col-sm-4">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/b1.jpg">
            <div class="name-blog">
              <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/temp/img/turn-right.png">
              <span>Jane Doe </br>Asistente</span>
            </div>
            <div class="icon-blog">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i> </span>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/temp/img/b2.jpg">
            <div class="name-blog">
              <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/temp/img/turn-right.png">
              <span>Jane Doe </br>Asistente</span>
            </div>
            <div class="icon-blog">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i> </span>
          </div>
          </div>
        </div>

     </div>  
    </div>
    </div>
   </div>
 </section> 

  <section class="section-div newsletter">
    <div class="container">
      <div class="newsletter-div">
        <h1 class="heading">Newsletter <img src="http://68.183.113.49/wp-content/themes/temp/img/newsletter.jpg"></h1>
        <p>Recibe en la intimidad de tu bandeja de entrada nuestro boletín semanal.<br/>
          Noticias, tips, eventos, talleres y más.
        </p>
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
            <li><h4 class="foot_head">Escuela</h4></li>
            <li><a href="#">Programa Foto 360.</a></li>
            <li><a href="#">Talleres </a></li>
             <li><a href="#">Especializados.</a></li>
            <li><a href="#">Talleres </a></li>
             <li><a href="#">Internacionales.</a></li>
            <li><a href="#">Diplomado en </a></li>
             <li><a href="#">Fotografía.</a></li>
            <li><a href="#">Inscripciones.</a></li>
             <li><a href="#">Soporte Escuela.</a></li>
           </ul>  
             <ul class="footer-sec ul_sec">
            <li><h4 class="foot_head">Eventos</h4></li>
            <li><a href="#">Conversatorios.</a></li>
            <li><a href="#">Exposiciones. </a></li>
             <li><a href="#">Webinars.</a></li>
            </ul>     
        </div>

        <div class="footer_sec">
          <ul class="footer-sec">
            <li><h3 class="foot_head">Galeria ES-O</h3></li>
            <li><a href="#">Próximas exposiciones.</a></li>
            <li><a href="#">Statement.</a></li>
             <li><a href="#">Exposiciones anteriores.</a></li>
          </ul>
          <ul class="footer-sec ul_sec">
            <li><h4 class="foot_head">LAB de Impresión</h4></li>
             <li><a href="#">LAB.</a></li>
            <li><a href="#">Biblioteca. </a></li>
             <li><a href="#">Estudios de iluminación.</a></li>
          </ul>  
        </div>

          <div class="footer_sec">
             <ul class="footer-sec">
              <li><h4 class="foot_head">About</h4></li>
              <li><a href="#">Quienes somos.</a></li>
              <li><a href="#">Recorrido.</a></li>
               <li><a href="#">Exposiciones </a></li>
               <li><a href="#">internacionales.</a></li>
              <li><a href="#">Revisiones de </a></li>
               <li><a href="#">portafolios.</a></li>
              <li><a href="#">Oportunidades para los </a></li>
              <li><a href="#">Fototecos.</a></li>
               <li><a href="#">Galeria ES-O</a></li>
               <li><a href="#">Docentes.</a></li>
              <li><a href="#">Alumnos.</a></li>
               <li><a href="#">Liderazgo .</a></li>
               <li><a href="#">Staff.</a></li>
              <li><a href="#">Legado.</a></li>
               <li><a href="#">Fechas Importantes.</a></li>
          </ul>  
        </div>

          <div class="footer_sec">
            <ul class="footer-sec">
              <li><h4 class="foot_head">Eventos</h4></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
               <li><a href="#">ALUMNI</a></li>
               <li><a href="#">Login</a></li>
               <li><a href="#">Perfil</a></li>
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
              <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/temp/img/twitter.png"></a></li>
              <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/temp/img/facebook.png"</a></li>
               <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/temp/img/youtube.png"</a></li>
               <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/temp/img/instagram.png"</a></li>
            </ul>    
        </div>

      </div>
      <div class="footer-bottom">
        <p>La Fototeca S.A. © 2018 - Todos los derechos reservados. Todas las imágenes son propiedad de su autor. Site developed by: <span>Jane doe</span></p>

    </div>
  </footer>
  
  <!-- Core -->
  <script src="js/jquery.min.js"></script>
 <!--  <script src="./assets/vendor/popper/popper.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>

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