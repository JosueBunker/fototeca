<?php 
/*
    Template Name: Eventos
*/
?>
<!DOCTYPE html>
<html>

<head>   
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
  <meta name="description" content="">   
  <title>Fototeca - Eventos</title>   <!-- Favicon -->   <link
href="img/favicon.png" rel="icon" type="image/png">   <!-- Fonts -->   <link
href="" rel="stylesheet"> 


  <!-- Icons -->  
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/font-awesome.min.css" rel="stylesheet">
  <!-- css -->  
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/style.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/responsive.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/calender.css" rel="stylesheet">

</head>

<body class="eventos_page">

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

<div class="bottom-srh">
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
</div>

 <section class="section-div top_head eventos">
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
      <div class="row">
        <div class="left-prom col-sm-6">
            <h2>Promover, celebrar,</br>
            educar y documentar</br>
          la fotografía</h2>
          </div>  
          <div class="right-prom col-sm-6">
            <p>Somos una Escuela y Centro de Fotografía situada en la </br>
            ciudad de Guatemala; gestionamos talleres, programas </br>
            y diplomados, organizamos charlas, exhibiciones y</br>
            eventos 
          </p>
          <button type="btn" class="btn btn-learn">Conoce más 
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
          </button>
          <img src="http://68.183.113.49/wp-content/themes/fototeca/img/camera.jpg" class="icon_img">
          </div>
        </div> 
      </div>
    </div>
    </div>
   </div>
 </section> 
<section class="section-div slider-sec for_desctop">
  <div class="container">
  <h1 class="heading"><span class="line-border"></span>Próximos  <br><span class="block-next-heading">Talleres.</span>     </h1> 
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
           <button type="btn" class="btn btn-learn">CONOCE MÁS 
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
            </button>
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
           <button type="btn" class="btn btn-learn">CONOCE MÁS 
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
            </button>
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
           <button type="btn" class="btn btn-learn">CONOCE MÁS 
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
            </button>
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
  <h1 class="heading"><span class="line-border"></span>Próximos  <br>Talleres.     </h1> 
   <span class="work-link"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/right_hand.png">"¡Faltan 12 días para este taller!"</span> 
  
  <div class="mobile_slider">
        <img src="http://68.183.113.49/wp-content/themes/fototeca/img/slider.jpg" alt="Los Angeles">
         <div class="carousel-caption">
          <h3>TALLER</h3>
            <div class="inner-caption">
              <h1>Conociendo
              las imágenes</h1>
             <p>16 de junio / imparte: Jane Doe</p>
            </div>
           <button type="btn" class="btn btn-learn">CONOCE MÁS 
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
            </button>
        </div>
      </div>
</div>
</section>

<section class="section-div calendar-div">
  <div class="container">
    <h1 class="heading"><span class="line-border"></span>Agenda</h1>    

    <div id='wrap'>
      <div id='calendar'>
         <div class="srch_div">        
     <input type="search" class="form-control calendar-src" placeholder="Buscar evento...">
   </div>
      </div>
      <div style='clear:both'></div>
    </div>
  </div> 
</section>

<section class="section-div slider-sec academic-div for_desctop">
  <div class="container">
   <h1 class="heading"><span class="line-border"></span>Recorrido Académico
    <img class="book" src="http://68.183.113.49/wp-content/themes/fototeca/img/open-book.png"></h1> 
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>

     <!-- Wrapper for slides -->
    <div class="carousel-inner slider_sec">
       <div class="item active">
          <div class="row">
            <div class="col-sm-4">
            <div class="acd-tour top_div">
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a1.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
              <div class="tour-caption">
                <h1 class="num n1">1</h1>
              </div>
              <div class="acd_head">
                <h2>Introducción a la Fotografía</h2>
              </div>

               <div class="lrn-div">
                 <p>Este programa, compuesto por tres módulos 
                   generales desarrolla en los alumnos el 
                   generales desarrolla en los alumnos el
                   través de referentes históricos mientras 
                   brinda herramientas para crear imágenes 
                   impactantes originales y creativas. A través 
                   de sesiones prácticas los alumnos exploran 
                   la tecnica fotografica, fuentes de luz estetica
                   de la imagen y su representación del mundo 
                   a través del cuerpo y el espacio. </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
          </div>

            <div class="col-sm-3">
            <div class="acd-tour middle_div">
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a2.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
              <div class="tour-caption">
                <h1 class="num n2">2</h1>
                </div>
              <div class="acd_head">
                <h2>Ficción o  <br>
                Realidad</h2>
              </div>
               <div class="lrn-div">
                 <p>Este programa introduce a los estudiantes a las ramás más 
                  relevantes de la fotografía: comercial, documental y artística. 
                   Brinda herramientas fundamentales para la práctica con luz 
                   artificial, posproduccion, y presentacion de un portafolio basico.
                 </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
      </div>

       <div class="col-sm-5">
          <div class="acd-tour bottom_div">
            <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a3.png);">
              <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
             </div>
            <div class="tour-caption">
              <h1 class="num n3">3</h1>
              </div>
            <div class="acd_head">
              <h2>Diplomado en <br>Fotografía y gestión de <span>productos fotograficos</span></h2>

            </div>
             <div class="lrn-div">
               <p>Este programa avalado por la Universidad de San 
                Carlos de Guatemala está dirigido a fotógrafos que 
                buscan profesionalizarse y llevar su fotografía al 
                próximo nivel, a través de la práctica, crítica y 
                proyectos guiados por docentes especializados, los 
                alumnos proucen durante un año un portafolio 
                comercial, artístico o documental según el campo con 
                el que mas se identifique el estudiante.</p>
                 <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
          </div>
        </div>
      </div>
    </div>

  <div class="item">
          <div class="row">
            <div class="col-sm-4">
            <div class="acd-tour top_div">
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a1.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
              <div class="tour-caption">
                <h1 class="num n1">1</h1>
              </div>
              <div class="acd_head">
                <h2>Introducción a la Fotografía</h2>
              </div>

               <div class="lrn-div">
                 <p>Este programa, compuesto por tres módulos 
                   generales desarrolla en los alumnos el 
                   generales desarrolla en los alumnos el
                   través de referentes históricos mientras 
                   brinda herramientas para crear imágenes 
                   impactantes originales y creativas. A través 
                   de sesiones prácticas los alumnos exploran 
                   la tecnica fotografica, fuentes de luz estetica
                   de la imagen y su representación del mundo 
                   a través del cuerpo y el espacio. </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
          </div>

            <div class="col-sm-3">
            <div class="acd-tour middle_div">
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a2.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
              <div class="tour-caption">
                <h1 class="num n2">2</h1>
                </div>
              <div class="acd_head">
                <h2>Ficción o  <br>
                Realidad</h2>
              </div>
               <div class="lrn-div">
                 <p>Este programa introduce a los estudiantes a las ramás más 
                  relevantes de la fotografía: comercial, documental y artística. 
                   Brinda herramientas fundamentales para la práctica con luz 
                   artificial, posproduccion, y presentacion de un portafolio basico.
                 </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
      </div>

       <div class="col-sm-5">
          <div class="acd-tour bottom_div">
            <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a3.png);">
              <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
             </div>
            <div class="tour-caption">
              <h1 class="num n3">3</h1>
              </div>
            <div class="acd_head">
              <h2>Diplomado en <br>Fotografía y gestión de <span>productos fotograficos</span></h2>

            </div>
             <div class="lrn-div">
               <p>Este programa avalado por la Universidad de San 
                Carlos de Guatemala está dirigido a fotógrafos que 
                buscan profesionalizarse y llevar su fotografía al 
                próximo nivel, a través de la práctica, crítica y 
                proyectos guiados por docentes especializados, los 
                alumnos proucen durante un año un portafolio 
                comercial, artístico o documental según el campo con 
                el que mas se identifique el estudiante.</p>
                 <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
          </div>
        </div>
      </div>
  </div>


  <div class="item">
          <div class="row">
            <div class="col-sm-4">
            <div class="acd-tour top_div">
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a1.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
              <div class="tour-caption">
                <h1 class="num n1">1</h1>
              </div>
              <div class="acd_head">
                <h2>Introducción a la Fotografía</h2>
              </div>

               <div class="lrn-div">
                 <p>Este programa, compuesto por tres módulos 
                   generales desarrolla en los alumnos el 
                   generales desarrolla en los alumnos el
                   través de referentes históricos mientras 
                   brinda herramientas para crear imágenes 
                   impactantes originales y creativas. A través 
                   de sesiones prácticas los alumnos exploran 
                   la tecnica fotografica, fuentes de luz estetica
                   de la imagen y su representación del mundo 
                   a través del cuerpo y el espacio. </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
          </div>

            <div class="col-sm-3">
            <div class="acd-tour middle_div">
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a2.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
              <div class="tour-caption">
                <h1 class="num n2">2</h1>
                </div>
              <div class="acd_head">
                <h2>Ficción o  <br>
                Realidad</h2>
              </div>
               <div class="lrn-div">
                 <p>Este programa introduce a los estudiantes a las ramás más 
                  relevantes de la fotografía: comercial, documental y artística. 
                   Brinda herramientas fundamentales para la práctica con luz 
                   artificial, posproduccion, y presentacion de un portafolio basico.
                 </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
      </div>

       <div class="col-sm-5">
          <div class="acd-tour bottom_div">
            <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a3.png);">
              <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
             </div>
            <div class="tour-caption">
              <h1 class="num n3">3</h1>
              </div>
            <div class="acd_head">
              <h2>Diplomado en <br>Fotografía y gestión de <span>productos fotograficos</span></h2>

            </div>
             <div class="lrn-div">
               <p>Este programa avalado por la Universidad de San 
                Carlos de Guatemala está dirigido a fotógrafos que 
                buscan profesionalizarse y llevar su fotografía al 
                próximo nivel, a través de la práctica, crítica y 
                proyectos guiados por docentes especializados, los 
                alumnos proucen durante un año un portafolio 
                comercial, artístico o documental según el campo con 
                el que mas se identifique el estudiante.</p>
                 <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
          </div>
        </div>
      </div>
</div>

  </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
      </a>

</div>
</section>

<section class="section-div slider-sec academic-div for_mobile">
  <div class="container">
   <h1 class="heading"><span class="line-border"></span>Recorrido Académico
    <img class="book" src="http://68.183.113.49/wp-content/themes/fototeca/img/open-book.png"></h1>
   
         <div class="row">
            <div class="col-sm-4">
            <div class="acd-tour top_div">
              <h2 class="mobile-heading">  
                <h1 class="num n3">1</h1>
                <div class="acd_head">
                <h2>Introducción a <br>la Fotografía</h2>
              </div>
           </h2>
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a1.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
             <h2 class="web-heading">  
                <div class="tour-caption">
                <h1 class="num n3">1</h1>
                </div>
               <div class="acd_head">
                <h2>Introducción a la Fotografía</h2>
              </div>
           </h2>

               <div class="lrn-div">
                 <p>Este programa, compuesto por tres módulos 
                   generales desarrolla en los alumnos el 
                   generales desarrolla en los alumnos el
                   través de referentes históricos mientras 
                   brinda herramientas para crear imágenes 
                   impactantes originales y creativas. A través 
                   de sesiones prácticas los alumnos exploran 
                   la tecnica fotografica, fuentes de luz estetica
                   de la imagen y su representación del mundo 
                   a través del cuerpo y el espacio. </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
          </div>

            <div class="col-sm-3">
            <div class="acd-tour middle_div">
              <h2 class="mobile-heading">  
                <h1 class="num n3">2</h1>
                <div class="acd_head">
                 <h2>Ficción o  <br> Realidad</h2>
               </div>
           </h2>
              <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a2.png);">
                <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
               </div>
             <h2 class="web-heading">  
                <div class="tour-caption">
                <h1 class="num n3">2</h1>
                </div>
               <div class="acd_head">
                <h2>Ficción o  <br>
                Realidad</h2>
              </div>
           </h2>
               <div class="lrn-div">
                 <p>Este programa introduce a los estudiantes a las ramás más 
                  relevantes de la fotografía: comercial, documental y artística. 
                   Brinda herramientas fundamentales para la práctica con luz 
                   artificial, posproduccion, y presentacion de un portafolio basico.
                 </p>
                   <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                   </button>
                </div>
            </div>
      </div>

       <div class="col-sm-5">
          <div class="acd-tour bottom_div">

            <h2 class="mobile-heding">
                <h1 class="num n3">3</h1>
                <div class="acd_head">
                <h2>Diplomado en <br>Fotografía y gestión de <span>productos fotograficos</span></h2>
              </div>
            </h2>
            <div class="tour-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//a3.png);">
              <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/s2.jpg"> -->
             </div>
            <h2 class="web-heading">  
                <div class="tour-caption">
                <h1 class="num n3">3</h1>
                </div>
               <div class="acd_head">
                <h2>Diplomado en <br>Fotografía y gestión de <span>productos fotograficos</span></h2>
              </div>
           </h2>
 
             <div class="lrn-div">
               <p>Este programa avalado por la Universidad de San 
                Carlos de Guatemala está dirigido a fotógrafos que 
                buscan profesionalizarse y llevar su fotografía al 
                próximo nivel, a través de la práctica, crítica y 
                proyectos guiados por docentes especializados, los 
                alumnos proucen durante un año un portafolio 
                comercial, artístico o documental según el campo con 
                el que mas se identifique el estudiante.</p>
                 <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
          </div>
        </div>
      </div>
</div>
</section>

<div class="mid-menu event-menu">
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
      <h1 class="heading">-Blog</h1>
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
              <button type="btn" class="btn btn-learn btn_withborder">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
          </div>  
        </div>

<div class="clearfix"></div>
<div class="blog-card">
  <div class="row">
        <div class="col-sm-4 blog">
          <h2 class="mobile-heading">Foto del día</h2>
          <div class="blog-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//b1.jpg);">
            <h2 class="web-heding">Foto del día</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. </p>
             <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 

        <div class="col-sm-4 blog">
          <h2 class="mobile-heading">Recomenda-cion</h2>
          <div class="blog-img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//b2.jpg);">
            <h2 class="web-heding">Recomenda-cion</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. </p>
             <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 

        <div class="col-sm-4 blog">
          <h2 class="mobile-heading">Fotógrafo recomendado</h2>
          <div class="blog-img"  style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img//b3.jpg);">
            <h2 class="web-heding">Fotografo recomendado</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. </p>
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

<section class="section-div partner-sec">
  <div class="container">
    <div class="partner-list">
      <h1 class="heading">-Partnerships <sub><img src="http://68.183.113.49/wp-content/themes/fototeca/img/hand.png"></sub></h1>
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
              <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/twitter.png"></a></li>
              <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/facebook.png"</a></li>
               <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/youtube.png"</a></li>
               <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/instagram.png"</a></li>
            </ul>    
        </div>

      </div>
      <div class="footer-bottom">
        <p>La Fototeca S.A. © 2018 - Todos los derechos reservados. Todas las imágenes son propiedad de su autor. Site developed by: <span>Jane doe</span></p>

    </div>
  </footer>
  
  <!-- Core -->
  <script src="http://68.183.113.49/wp-content/themes/fototeca/js/jquery.min.js"></script>
 <!--  <script src="./assets/vendor/popper/popper.min.js"></script> -->
  <script src="http://68.183.113.49/wp-content/themes/fototeca/js/bootstrap.min.js"></script>
  <script src="http://68.183.113.49/wp-content/themes/fototeca/js/calender.js"></script>

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


<script>

  $(document).ready(function() {
      var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    /*  className colors
    
    className: default(transparent), important(red), chill(pink), success(green), info(blue)
    
    */    
    
      
    /* initialize the external events
    -----------------------------------------------------------------*/
  
    $('#external-events div.external-event').each(function() {
    
      // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
      // it doesn't need to have a start or end
      var eventObject = {
        title: $.trim($(this).text()) // use the element's text as the event title
      };
      
      // store the Event Object in the DOM element so we can get to it later
      $(this).data('eventObject', eventObject);
      
      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });
      
    });
  
  
    /* initialize the calendar
    -----------------------------------------------------------------*/
    
    var calendar =  $('#calendar').fullCalendar({
      header: {
        left: 'title',
        center: 'agendaDay,agendaWeek,month',
        right: 'prev,next today'
      },
      editable: true,
      firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
      selectable: true,
      defaultView: 'month',
      
      axisFormat: 'h:mm',
      columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
      allDaySlot: false,
      selectHelper: true,
      select: function(start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.fullCalendar('renderEvent',
            {
              title: title,
              start: start,
              end: end,
              allDay: allDay
            },
            true // make the event "stick"
          );
        }
        calendar.fullCalendar('unselect');
      },
      droppable: true, // this allows things to be dropped onto the calendar !!!
      drop: function(date, allDay) { // this function is called when something is dropped
      
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');
        
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);
        
        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        
        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
        
      },
      
      events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 1)
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d-3, 16, 0),
          allDay: false,
          className: 'info'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: new Date(y, m, d+4, 16, 0),
          allDay: false,
          className: 'info'
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          className: 'important'
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          className: 'important'
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d+1, 19, 0),
          end: new Date(y, m, d+1, 22, 30),
          allDay: false,
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
          className: 'success'
        }
      ],      
    });
    
    
  });

</script>
</body>

</html>