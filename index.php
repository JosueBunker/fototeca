<!DOCTYPE html>
<html>

<head>   
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"content="">   
  <title>Fototeca - Home</title>

  <!-- Icons -->  
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- css -->  
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/style.css" rel="stylesheet" type="text/css" media="all">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/responsive.css" rel="stylesheet" type="text/css" media="all">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/index.css" rel="stylesheet" type="text/css" media="all">
  <?php wp_head();?>
</head>

<body>

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

<!--   <div class="bottom-srh">
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
  </div> -->

  <section class="section-div top_head">
    <div class="container">
      <div class="main_section">
        <div class="cont_section">
          <div class="left-cont">
            <h1>La Fototeca</h1>
            <p>Escuela y Centro de Fotografía</p>
          </div>  
          <div class="right-cont">
          </div>
        </div>
      <div class="clearfix"></div>
      <div class="sub_sec">
        <div class="left-prom col-sm-6">
          <h2>Promover, celebrar,<br/>
            educar y documentar<br/>
            la fotografía
          </h2>
        </div>  
        <div class="right-prom col-sm-6">
          <p>Somos una Escuela y Centro de Fotografía situada en la <br/>
            ciudad de Guatemala; gestionamos talleres, programas <br/>
            y diplomados, organizamos charlas, exhibiciones y<br/>
            eventos 
          </p>
          <a href="about.php">
            <button type="btn" class="btn btn-learn ">CONOCE MÁS
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
            </button>
          </a>
          <img src="http://68.183.113.49/wp-content/themes/fototeca/img/camera.jpg" class="icon_img">
          </div>
        </div> 
      </div>
    </div>
   </div>
 </section> 
<section class="section-div slider-sec for_desctop">
  <div class="container">
  <h1 class="heading"><span class="line-border"></span> Próximos  <span class="block-next-heading">Talleres.</span>     </h1> 
   <span class="work-link"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/right_hand.png">"¡Faltan 12 días para este taller!"</span> 
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
        <img src="http://68.183.113.49/wp-content/themes/fototeca/img/slider.jpg" alt="Los Angeles">
         <div class="carousel-caption">
          <h3>TALLER</h3>
            <div class="inner-caption">
              <h1>Conociendo
              las imágenes</h1>
             <p>16 de junio / imparte: Jane Doe</p>
            </div>
            <a href="lab.html">
              <button type="btn" class="btn btn-learn">CONOCE MÁS 
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
              </button>
            </a>
          </div>
        </div>

      <div class="item">
        <img src="http://68.183.113.49/wp-content/themes/fototeca/img/slider.jpg" alt="Chicago">
          <div class="carousel-caption">
          <h3>TALLER</h3>
            <div class="inner-caption">
              <h1>Conociendo
              las imágenes</h1>
             <p>16 de junio / imparte: Jane Doe</p>
            </div>
            <a href="lab.html">
              <button type="btn" class="btn btn-learn">CONOCE MÁS 
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
              </button>
            </a>
        </div>
      </div>
    
      <div class="item">
        <img src="http://68.183.113.49/wp-content/themes/fototeca/img/slider.jpg" alt="New york">
          <div class="carousel-caption">
          <h3>TALLER</h3>
            <div class="inner-caption">
              <h1>Conociendo
              las imágenes</h1>
             <p>16 de junio / imparte: Jane Doe</p>
            </div>
            <a href="lab.html">
              <button type="btn" class="btn btn-learn">CONOCE MÁS 
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
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
        <p>Intro a la
        posproduccion
      ciclo....</p>
       </div> 
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

      <span class="sr-only">Next</span>
      <div class="text-msg">
        <p>Intro a la posproduccion
      ciclo....</p>
       </div> 
    </a>
  </div>
</div>
</section>


<section class="section-div slider-sec for_mobile">
  <div class="container">
    <h1 class="heading"><span class="line-border"></span> Próximos  <span class="block-next-heading">Talleres.</span></h1> 
   <span class="work-link"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/right_hand.png"> "¡Faltan 12 días para este taller!"</span> 
  
  <div class="mobile_slider">
        <img src="http://68.183.113.49/wp-content/themes/fototeca/img/slider.jpg" alt="Los Angeles">
         <div class="carousel-caption">
          <h3>TALLER</h3>
            <div class="inner-caption">
              <h1>Conociendo
              las imágenes</h1>
             <p>16 de junio / imparte: Jane Doe</p>
            </div>
            <a href="lab.html">
              <button type="btn" class="btn btn-learn">CONOCE MÁS 
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
              </button>
            </a>
        </div>
      </div>
</div>
</section>

<section class="section-div tour-div">
   <div class="container">
    <div class="main_section">
      <h1 class="heading"><span class="line-border"></span> Recorrido Académico <img class="book" src="http://68.183.113.49/wp-content/themes/fototeca/img/open-book.png"></h1>
      <div class="row">
        <div class="col-sm-6">
          <div class="acd-tour">
            <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/s1.jpg);">
             <!--  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s1.jpg"> -->
            </div>
            <div class="tour-caption">
              <h1 class="num">1</h1>
              <h2>Introducción a <br> 
              la Fotografía</h2>
              <div class="lrn-div">
                <a href="curso.html">
                  <button type="btn" class="btn btn-learn btn_withborder btn-top">CONOCE MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>

          <div class="col-sm-6">
            <div class="acd-tour">
            <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg);">
              <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
             </div>
            <div class="tour-caption">
              <h1 class="num">2</h1>
              <h2>Ficción o <br>
              Realidad</h2>
              <div class="lrn-div">
                <a href="curso.html">
                  <button type="btn" class="btn btn-learn btn_withborder btn-top">CONOCE MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
                </a>
              </div>
             </div>
          </div>
        </div>

          <div class="col-sm-4">
           <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/s3.jpg);">
            </div>
            <div class="tour-caption chng-col">
              <h1 class="num">3</h1>
              <h2>Diplomado en  
              Fotografía y <br>
            gestión de 
            productos
            </h2>
            <div class="lrn-div">
              <a href="curso.html">
                <button type="btn" class="btn btn-learn btn_withborderb">CONOCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow2.png" class="right_angel_ar">
                </button>
              </a>
            </div>
          </div>
        </div> 
      </div>

          <div class="col-sm-4">
            <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/s4.jpg);">
             </div>
            <div class="tour-caption">
               <h1 class="num">4</h1>
              <h2>Talleres <br>
              Especializados
              </h2>
              <div class="lrn-div">
                <a href="curso.html">
                  <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
                </a>
              </div>
            </div>
          </div> 
        </div>

          <div class="col-sm-4">
            <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/s5.jpg);">
             </div>
            <div class="tour-caption chng-col">
              <h1 class="num">5</h1>
              <h2>Nueva <br>
              Generación
              </h2>
             <div class="lrn-div">
                <a href="curso.html">
                  <button type="btn" class="btn btn-learn btn_withborderb">CONOCE MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow2.png" class="right_angel_ar">
                  </button>
                </a>
              </div>
            </div>
           </div>
          </div> 
        </div>
        </div>
 
   </div>
 </section> 

  <div class="mid-menu">
    <div class="container">
      <ul>
        <li><a href="#">Escuela</a></li>
        <li><a href="#">Programas</a></li>
        <li><a href="#">Talleres</a></li>
        <li><a href="#">Diplomado</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>  
    </div>  
  </div>
  <section class="section-div blog-div">
    <div class="container">
      <div class="main_section">
        <h1 class="heading"><span class="line-border"></span> Blog </h1>
          <div class="alumno-mobile">
            <p><a href="#">ALUMNO DESTACADO</a></p>
            <div class="inner-blog">
              <h1>Juan Pablo <br/>Ochoa</h1>
              <img class="like-img" src="http://68.183.113.49/wp-content/themes/fototeca/img/like.png">
            </div>
          </div>
          <div class="cont_section">
            <div class="left-blog">
            </div>
            <div class="right-blog">
              <div class="stu-div">
                <div class="alumno-web">
                  <p><a href="#">ALUMNO DESTACADO</a></p>
                  <div class="inner-blog">
                    <h1>Juan Pablo <br/>Ochoa</h1>
                    <img class="like-img" src="http://68.183.113.49/wp-content/themes/fototeca/img/like.png">
                  </div>
                </div>
                <p>Objectively re-engineer virtual outsourcing whereas 
                  cross-media applications. Interactively reconceptualize 
                  equity invested services and leading-edge leadership. 
                  Assertively drive equity invested alignments whereas 
                  principle-centered process improvements. 
                </p>
                <a href="blog.html">
                  <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
                </a>
              </div>
            </div>  
          </div>
          <div class="clearfix"></div>
            <div class="blog-card">
              <div class="row">

              <div class="col-sm-4 blog">
                <h2 class="mobile-heading">Foto del día</h2>
                <div class="blog-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/b1.jpg);">
                  <h2 class="web-heding">Foto del día</h2>
                </div>
                <div class="img-content">
                  <p>Objectively re-engineer virtual outsourcing 
                    whereas cross-media applications. 
                  </p>
                  <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
                </div>
              </div> 

              <div class="col-sm-4 blog">
                <h2 class="mobile-heading">Recomenda-cion</h2>
                <div class="blog-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/b2.jpg);">
                  <h2 class="web-heding">Recomenda-cion</h2>
                </div>
                <div class="img-content">
                  <p>Objectively re-engineer virtual outsourcing 
                    whereas cross-media applications.
                  </p>
                  <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
                </div>
              </div> 

              <div class="col-sm-4 blog">
                <h2 class="mobile-heading">Fotógrafo recomendado</h2>
                <div class="blog-img"  style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/b3.jpg);">
                  <h2 class="web-heding">Fotografo recomendado</h2>
                </div>
                <div class="img-content">
                  <p>Objectively re-engineer virtual outsourcing 
                    whereas cross-media applications.
                  </p>
                  <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
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
      <h1 class="heading">Newsletter <img src="http://68.183.113.49/wp-content/themes/fototeca/img/newsletter.jpg"></h1>
      <p>Recibe en la intimidad de tu bandeja de entrada nuestro boletín semanal.</br>
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
</section>

<section class="section-div partner-sec">
  <div class="container">
    <div class="partner-list">
      <h1 class="heading"><span class="line-border"></span> Partnerships <sub><img src="http://68.183.113.49/wp-content/themes/fototeca/img/hand.png"></sub></h1>
    <div class="row">
      <div class="part_name">
        <ul>
          <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/fotolab.png"></li>
          <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/canon.png"></li>
          <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/gat.png"></li>
        </ul>  
      </div>  
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
  <?php wp_footer();?>
</body>

</html>