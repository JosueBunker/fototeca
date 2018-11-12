<?php 
/*
    Template Name: Escuela
*/
?>
<!DOCTYPE html>
<html>

<head>   
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
  <meta name="description" content="">   
  <title>Footeca</title>   

  <!-- Icons -->  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- css -->  
   <link href="http://68.183.113.49/wp-content/themes/fototeca/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/style.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/responsive.css" rel="stylesheet">
</head>

<body class="escuela-page">

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


<section class="section-div slider-sec escuela-slider for_desctop">
  <div class="container">
  <h1 class="heading"><span class="line-border"></span>Agenda. </h1> 
   <span class="work-link"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/right_hand.png">"¡Faltan 12 días para este taller!"</span> 
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
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
      <div class="text-msg">
        <p>Intro a la
        posproduccion
      ciclo....</p>
       </div> 
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
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
  <h1 class="heading"><span class="line-border"></span>Agenda. </h1> 
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

<section class="section-div holic-div">
   <div class="container">
    <!--div class="holic-bg">
      <img src="http://68.183.113.49/wp-content/themes/fototeca/img/holic.png">
    </div-->
      <div class="holic">
        <div class="msg-holic">
        <h3>Compellingly synthesize holistic methods of empowerment</h3>
              <p>Objectively re-engineer virtual outsourcing whereas  
              cross-media applications. Interactively reconceptualize 
              equity invested services and leading-edge leadership.</p>
              <ul>
                <li> Assertively drive equity invested alignments </li>
                <li> hereas principle-centered process </li>
                <li>Improvements. </li>
              </ul>
            </div>
            <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
           </button>
      </div>  
   </div>
</section>


 <section class="section-div meet-div">
   <div class="container">
    <div class="meet-card">
    <div class="row">
        <div class="col-sm-4 teach-div">
          <div class="teach-img">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/open-book.png">
            <h2>Biblioteca.</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. Interactively reconceptualize equity 
          invested services and leading-edge leadership. Assertively drive equity 
        invested alignments whereas.</p>
             <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 

        <div class="col-sm-4 teach-div">
          <div class="teach-img">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/thumb-up.png">
            <h2>Networking</h2>
          </div>
          <div class="img-content">
           <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. Interactively reconceptualize equity 
          invested services and leading-edge leadership. Assertively drive equity 
        invested alignments whereas.</p>
             <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 

        <div class="col-sm-4 teach-div">
          <div class="teach-img">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/exhibit.png">
            <h2>Exhibiciones.</h2>
          </div>
          <div class="img-content">
            <p>Objectively re-engineer virtual outsourcing 
            whereas cross-media applications. Interactively reconceptualize equity 
          invested services and leading-edge leadership. Assertively drive equity 
        invested alignments whereas.</p>
             <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
          </div>
        </div> 
      </div>
 </div>
<div class="meet-section">
 <div class="meet-inner">
     <div class="left-meet">
      </div>
      <div class="right-meet">
       <h1>Conoce a los docentes</h1>
        <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
        </button>
    </div>  
   </div>
  </div> 
 </div>
 </section> 

<section class="section-div slider-sec student-slider">
  <div class="container">
  <h1 class="heading"><sup> __</sup>Alumnos <br>Destacados </h1> 
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
          <div class="head-student"></div>
          <div class="left-slide">
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/stu.png">
             <div class="stu_info">
                <h3>John Doe </h3>
               <div class="icon-blog">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </div>
            </div>
              <div class="inner-caption">
                 <p>Objectively re-engineer virtual outsourcing whereas 
                  cross-media applications. Interactively reconceptualize
                  equity invested services and leading-edge leadership. 
                  Assertively drive equity invested alignments whereas 
                  principle-centered process improvements. </p>

               <p>Compellingly synthesize holistic methods of 
               empowerment through leveraged methodologies. 
               Quickly seize enabled intellectual capital rather than 
               synergistic benifits. Completely strategize leading-edge
               e-services for integrated leadership. </p>
          </div>
       </div>
    <div class="right-slide">
      <ul>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip1.png"></li>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip2.png"></li>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip1.png"></li>
      </ul>
    </div>
  </div>

     <div class="item">
          <div class="head-student"></div>
          <div class="left-slide">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/stu.png">
           <div class="stu_info">
                <h3>John Doe </h3>
               <div class="icon-blog">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </div>
            </div>
            <div class="inner-caption">
               <p>Objectively re-engineer virtual outsourcing whereas 
                cross-media applications. Interactively reconceptualize
                equity invested services and leading-edge leadership. 
                Assertively drive equity invested alignments whereas 
                principle-centered process improvements. </p>

             <p>Compellingly synthesize holistic methods of 
             empowerment through leveraged methodologies. 
             Quickly seize enabled intellectual capital rather than 
             synergistic benifits. Completely strategize leading-edge
             e-services for integrated leadership. </p>
        </div>
     </div>
    <div class="right-slide">
      <ul>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip1.png"></li>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip2.png"></li>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip1.png"></li>
      </ul>
    </div>
  </div>


      <div class="item">
        <div class="head-student"></div>
          <div class="left-slide">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/stu.png">
           <div class="stu_info">
                <h3>John Doe </h3>
               <div class="icon-blog">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </div>
            </div>
            <div class="inner-caption">
               <p>Objectively re-engineer virtual outsourcing whereas 
                cross-media applications. Interactively reconceptualize
                equity invested services and leading-edge leadership. 
                Assertively drive equity invested alignments whereas 
                principle-centered process improvements. </p>

             <p>Compellingly synthesize holistic methods of 
             empowerment through leveraged methodologies. 
             Quickly seize enabled intellectual capital rather than 
             synergistic benifits. Completely strategize leading-edge
             e-services for integrated leadership. </p>
        </div>
     </div>
    <div class="right-slide">
      <ul>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip1.png"></li>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip2.png"></li>
        <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/trip1.png"></li>
      </ul>
    </div>
    </div>
  </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
      <div class="text-msg">
        <p>Alumnos <br>Anterior</p>
       </div> 
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

      <span class="sr-only">Next</span>
      <div class="text-msg">
        <p>Alumnos <br>Siguiente</p>
       </div> 
    </a>

</div>
</section>



<!-- <section class="section-div slider-sec for_mobile">
  <div class="container">
  <h1 class="heading">-Alumnos <br>Destacados </h1> 
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
           <button type="btn" class="btn btn-learn">CONOCE MÁS 
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
            </button>
        </div>
      </div>
</div>
</section> -->

<section class="section-div faq-div">
  <div class="container">
    <h1 class="heading"><span class="line-border"></span>FAQs</h1>

<div class="row">
  <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Objectively re-engineer virtual outsourcing whereas cross-media applications?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Objectively re-engineer virtual outsourcing whereas cross-media applications?</div>
      </div>
    </div>
  </div>
   <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Objectively re-engineer virtual outsourcing whereas cross-media applications?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Objectively re-engineer virtual outsourcing whereas cross-media applications?</div>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Interactively reconceptualize equity invested services and leading-edge leaderships?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Interactively reconceptualize equity invested services and leading-edge leaderships?</div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Interactively reconceptualize equity invested services and leading-edge leaderships?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Interactively reconceptualize equity invested services and leading-edge leaderships?</div>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Assertively drive equity invested alignments whereas principle-centered process improvements?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Assertively drive equity invested alignments whereas principle-centered process improvements?</div>
      </div>
    </div>
  </div>

<div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Assertively drive equity invested alignments whereas principle-centered process improvements?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Assertively drive equity invested alignments whereas principle-centered process improvements?</div>
      </div>
    </div>
  </div>
</div>


<div class="row">
   <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Compellingly synthesize holistic methods of empowerment through leveraged methodologies?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Compellingly synthesize holistic methods of empowerment through leveraged methodologies?</div>
      </div>
    </div>
  </div>
   <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Compellingly synthesize holistic methods of empowerment through leveraged methodologies?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Compellingly synthesize holistic methods of empowerment through leveraged methodologies?</div>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Quickly seize enabled intellectual capital rather than synergistic benifits?</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon glyphicon-plus"></i></span>
        <div class="panel-body">Objectively re-engineer virtual outsourcing whereas cross-media applications?</div>
      </div>
    </div>
  </div>
 <div class="col-md-6">
  <button type="btn" class="btn btn-learn btn_withborder">VER MÁS
      <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
  </button>
 </div>
</div>

   </div> 
</section>


 <section class="section-div staff-div">
   <div class="container">
     <h1 class="heading"><span class="line-border"></span> Staff</h1>
     <div class="row">
      <div class="blg-nx">
         <div class="col-sm-8 col-xs-6 blg_right staff-quote">
        <div class="blg-div">
          <h1 class="heading">“Promover, celebrar, <br> educar y documentar <br>la fotografía”</h1>
        </div>
      </div>
        <div class="col-sm-4 col-xs-6 full_width">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b2.jpg">
            <div class="staff-name">
              <div class="staff-name-arrow">
                <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/fototeca/img/turn-right.png">
              </div>
              <div class="staff-name-text">
                <h1>John Doe</h1>
                <p>Asistente</p>
              </div>  
            </div>
        </div>
      </div>
     



        <div class="col-sm-4  col-xs-6 full_width">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b3.jpg">
            <div class="staff-name">
              <div class="staff-name-arrow">
                <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/fototeca/img/turn-right.png">
              </div>
              <div class="staff-name-text">
                <h1>John Doe</h1>
                <p>Asistente</p>
              </div>  
            </div>
           </div>
        </div>

        <div class="col-sm-4 col-xs-6 full_width">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b1.jpg">
            <div class="staff-name">
              <div class="staff-name-arrow">
                <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/fototeca/img/turn-right.png">
              </div>
              <div class="staff-name-text">
                <h1>John Doe</h1>
                <p>Director</p>
              </div>  
            </div>
          </div>
        </div>

      <div class="col-sm-4  col-xs-6 full_width">
          <div class="blg-div">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b2.jpg">
            <div class="staff-name">
              <div class="staff-name-arrow">
                <img  class="turn-rt" src="http://68.183.113.49/wp-content/themes/fototeca/img/turn-right.png">
              </div>
              <div class="staff-name-text">
                <h1>John Doe</h1>
                <p>Asistente</p>
              </div>  
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

<script type="text/javascript">
  $('.panel-heading span.clickable').parents('.panel').find('.panel-body').slideUp();
  $('.panel-heading span.clickable').addClass('panel-collapsed');

  $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
      $this.parents('.panel').find('.panel-body').slideUp();
      $this.addClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
      $this.parents('.panel').find('.panel-body').slideDown();
      $this.removeClass('panel-collapsed');
      $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
})

</script>

</body>

</html>