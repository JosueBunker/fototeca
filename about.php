<?php 
/*
    Template Name: About
*/
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">   
  <title>Fototeca - About</title>   <!-- Favicon -->   
  <link href="img/favicon.png" rel="icon" type="image/png">   <!-- Fonts -->   
  <link href="" rel="stylesheet"> 
  <!-- Icons -->  
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- css -->  
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/style.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/responsive.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/about.css" rel="stylesheet">
  <?php wp_head();?>
</head>

<body class="about-page">

  <div class="about-top">
    
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

 <section class="section-div top_head about-head for_desctop">
   <div class="container">
    <div class="head_section">
      <div class="row">
        <div class="col-sm-6">
          <div class="left-cont">
            <h1>La Fototeca<br> es:</h1>
           </div> 
        </div>
        <div class="col-sm-6"> 
          <div class="right">
            <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/luz.png"> -->
          </div>
        </div>
      </div>
    </div>

    <div class="about_subhead">
      <h2>
        Promover, celebrar,
        educar y documentar
        la fotografía
    </h2>
    </div>
  </div>
</section>
</div>

  <section class="eso-slider section-div slider-sec for_mobile">
    <div class="container">
      <div class="mobile_slider">
          <div class="fleft">
            <h1>La Fototeca es:</h1>
          </div>
          <div class="head-bg">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/about-bg.png">
            <img class="luz" src="http://68.183.113.49/wp-content/themes/fototeca/img/luz.png">
          </div>
        <!-- <img src="http://68.183.113.49/wp-content/themes/fototeca/img/about-bg.png"> -->
        <div class="about_subhead">
      <h2>
        Promover, celebrar,
        educar y documentar
        la fotografía
    </h2>
    </div>
      </div>
</div>
</section>

<section class="section-div state_div about_second">
  <div class="container">
    <div class="row">

      <div class="col-sm-6">
        <div class="state-gallery">
          <div class="sgall-img1">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso1.png">
          </div>
          <div class="sgall-img2">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso2.png">
          </div> 
          <div class="sgall-img3">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso3.png">
          </div> 
        </div>
      </div>

      <div class="col-sm-6">
        <div class="state-content">
          <p>A su vez, en su labor por promover y
            celebrar la fotografía contemporánea, en
            julio de 2010 se lanzó la primera edición
            del Festival GuatePhoto, llevado a cabo
            en el Museo de Arte Moderno “Carlos
            Mérida”, presentando por primera vez
            una muestra de fotografía
            contemporánea de tal magnitud. El
            Festival GuatePhoto contó con 5
            exhibiciones donde más de 70
            fotógrafos exhibieron casi 400 obras.
            Entre las exhibiciones se realizó una
            convocatoria internacional con 450
            propuestas de 45 países. A su vez el
            festival logró reunir a grandes
            instituciones e individuos del mundo de
            la fotografía y otorgó la oportunidad a un
            público de 10,000 personas de
            presenciar una muestra de gran calidad. 
          </p>
        </div>
      </div>

    </div>
  </div>
</section> 

<section class="section-div proyect_div">
   <div class="container">
    <h1 class="heading margin_80">
      <span class="line-border"></span>
       Proyectos.<img class="book"src="http://68.183.113.49/wp-content/themes/fototeca/img/pro.png">
     </h1>

     <div class="row">
      <div class="col-sm-6">
        <div class="proy_left">
          <ul>
            <li class="elab">
              <div class="elab-inner">
                <h2>El Lab</h2>
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/proyectosLab1.png">
                <p>El LAB es el Laboratorio de Impresión Fina y 
                 estudios de Fotografía Profesional de la 
                 fototeca, que busca elevar el estándar de 
                 impresión de la imagen. 
                </p>
                <a href="lab/">
                  <button type="btn" class="btn btn-learn ">CONOCE MÁS
                    <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                  </button>
                </a>
              </div>
            </li>
            <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/proyectosLab5.png"></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="proy_right">
          <ul>
            <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/proyectosLab2.png"></li>
            <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/proyectosLab4.png"></li>
            <li><img src="http://68.183.113.49/wp-content/themes/fototeca/img/proyectosLab3.png"></li>
          </ul>
        </div>
      </div>
     </div>

   </div>
</section> 

<section class="section-div state_div flight_div">
   <div class="container">
    <h1 class="heading">
      <span class="line-border"></span>
       Charlas <br><span class="flight_span">Internacionales</span><img class="book"src="http://68.183.113.49/wp-content/themes/fototeca/img/plane.png">
     </h1>
    <div class="row">
      <div class="col-sm-12">
      <div class="flights">
        <ul>
          <li><h1 class="f1">Argentina.</h1><h2 class="f2">Estados </h2></li>
          <li><h2 class="f2">Unidos.</h2><h1 class="f1">China. Corea. </h1></li>
          <li><h1 class="f1">Japón. </h1><h1 class="f1 f1_col">España. </h1>
            <h2 class="f2">Costa </h2></li>
          <li><h2 class="f2">Rica. </h2><h1 class="f1"> Honduras. </h1>
            <h2 class="f2">Lituania. </h2></li>
          <li><h1 class="f1">Nueva Zelanda. Francia.</h1></li>
        </ul>
      </div>
    </div>
      </div>
  </div>
</section>


  <section class="section-div track_div">
    <div class="container">
      <h1 class="heading">
        <span class="line-border"></span>
          Nuestra <br><span class="flight_span">Trayectoria</span><img class="book"src="http://68.183.113.49/wp-content/themes/fototeca/img/timer.png">
      </h1>
       
      <div class="row">
        <div class="col-sm-7">
          <div class="track-left">
            <p>Todas las actividades que gestionamos 
                giran en torno a nuestro gran objetivo: 
                educar una nueva generación de 
                fotógrafos que tengan un impacto en 
                Guatemala y el mundo. Conoce nuestra 
                trayectoria completa aquí.
            </p>
            <div class="track-img">
              <div class="left-img">
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/lab5.png">
              </div>
              <div class="right-img">
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/lab6.png">
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/lab7.png">
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-5">
          <div class="track-right">
             <div class="col-sm-12">
              <div class="col-sm-3">
               <ul class="nav yearly-tabs">
                <li class="y9 active"><a href="#home">2009</a></li>
                <li class="y10"><a data-toggle="tab" href="#menu1">2010</a></li>
                <li class="y11"><a data-toggle="tab" href="#menu2">2011</a></li>
                <li class="y12"><a data-toggle="tab" href="#menu3">2012</a></li>
                <li class="y13"><a data-toggle="tab" href="#menu3">2013</a></li>
                <li class="y14"><a data-toggle="tab" href="#menu3">2014</a></li>
                <li class="y15"><a data-toggle="tab" href="#menu3">2015</a></li>
                <li class="y16"><a data-toggle="tab" href="#menu3">2016</a></li>
                <li class="y17"><a data-toggle="tab" href="#menu3">2017</a></li>
                <li class="y18"><a data-toggle="tab" href="#menu3">2018</a></li>
              </ul>
            </div>
            <div class="tab-content yearly_des">
              <div id="home" class="tab-pane fade in active">
                <div class="col-sm-9">
                  <div class="descrip">
                    <h2>2009</h2>
                    <p>Sed ut perspiciatis unde omnis iste 
                natus error sit voluptatem 
                accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae 
                ab illo inventore veritatis et quasi 
                architecto beatae vitae dicta sunt 
                explicabo. 
                </p>
                <p>Nemo enim ipsam voluptatem quia 
                voluptas sit aspernatur aut odit aut 
                fugit, sed quia consequuntur magni 
                dolores eos qui ratione voluptatem 
                sequi nesciunt. Neque porro 
                quisquam est, qui dolorem ipsum quia 
                dolor sit amet, consectetur, adipisci 
                velit, sed quia non numquam eius 
                modi tempora incidunt ut labore et 
                dolore magnam aliquam quaerat 
                voluptatem. Ut enim ad minima 
                veniam, quis nostrum exercitationem 
                ullam corporis suscipit laboriosam, 
                nisi ut aliquid ex ea commodi 
                consequatur? Quis autem vel eum iure 
                reprehenderit qui in ea voluptate velit 
                esse quam nihil molestiae 
                consequatur, vel illum qui dolorem 
                eum fugiat quo voluptas nulla 
                pariatur?"
                </p>
              </div>
           </div>
          </div>
         <div id="menu1" class="tab-pane fade">
         <div class="col-sm-9"> 
          <div class="descrip">
           <h2>2010</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
            </div>
          </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <div class="col-sm-9">
           <div class="descrip">
           <h2>2011</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>
        <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
           <div class="descrip">
           <h2>2012</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>
         <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
           <div class="descrip">
           <h2>2013</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>
         <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
            <div class="descrip">
           <h2>2013</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>
         <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
           <div class="descrip">
           <h2>2014</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>
         <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
            <div class="descrip">
           <h2>2015</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>
         <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
            <div class="descrip">
           <h2>2016</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
        </div>
         </div>
         <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
            <div class="descrip">
           <h2>2017</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>
         <div id="menu3" class="tab-pane fade">
          <div class="col-sm-9">
            <div class="descrip">
           <h2>2018</h2>
              <p>Sed ut perspiciatis unde omnis iste 
              natus error sit voluptatem 
              accusantium doloremque laudantium, 
              totam rem aperiam, eaque ipsa quae 
              ab illo inventore veritatis et quasi 
              architecto beatae vitae dicta sunt 
              explicabo. 
              </p>
              <p>Nemo enim ipsam voluptatem quia 
              voluptas sit aspernatur aut odit aut 
              fugit, sed quia consequuntur magni 
              dolores eos qui ratione voluptatem 
              sequi nesciunt. Neque porro 
              quisquam est, qui dolorem ipsum quia 
              dolor sit amet, consectetur, adipisci 
              velit, sed quia non numquam eius 
              modi tempora incidunt ut labore et 
              dolore magnam aliquam quaerat 
              voluptatem. Ut enim ad minima 
              veniam, quis nostrum exercitationem 
              ullam corporis suscipit laboriosam, 
              nisi ut aliquid ex ea commodi 
              consequatur? Quis autem vel eum iure 
              reprehenderit qui in ea voluptate velit 
              esse quam nihil molestiae 
              consequatur, vel illum qui dolorem 
              eum fugiat quo voluptas nulla 
              pariatur?"
              </p>
          </div>
         </div>
       </div>

        </div>
       </div>
      </div>
    </div>
   </div>
  </div>
</section>

<section class="section-div tour-div conoce_div">
   <div class="container">
    <div class="main_section">
      <h1 class="heading"><span class="line-border"></span>
        Conoce nuestras<br> <span class="flight_span">instalaciones</span></h1>
        <div class="heading-icon">
          <img src="http://68.183.113.49/wp-content/themes/fototeca/img/down-fing.png">
        </div>
      <div class="row">
       <div class="col-sm-4">
           <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/about4.png);">
            </div>
            <div class="tour-caption">
             <h3>Atelier</h3>
            <div class="lrn-div">
                 <button type="btn" class="btn btn-learn btn_withborderb">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
            </div>
          </div> 
        </div>

          <div class="col-sm-4">
            <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/about5.png);">
             </div>
            <div class="tour-caption">
               <h3>3er Nivel</h3>
              <div class="lrn-div">
                 <button type="btn" class="btn btn-learn btn_withborderb">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
            </div>
          </div> 
        </div>

          <div class="col-sm-4">
            <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/about4.png);">
             </div>
            <div class="tour-caption">
              <h3>Museo de Cámaras</h3>
             <div class="lrn-div">
                 <button type="btn" class="btn btn-learn btn_withborderb">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
            </div>
           </div>
          </div> 
          <div class="col-sm-4">
            <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/about5.png);">
             </div>
            <div class="tour-caption">
              <h3>Biblioteca y <br>  LAB de<br> Impresión</h3>
             <div class="lrn-div">
                 <button type="btn" class="btn btn-learn btn_withborderb">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
            </div>
           </div>
          </div>
          <div class="col-sm-4">
            <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/about4.png);">
             </div>
            <div class="tour-caption">
             <h3>Café <br>  Despierto</h3>
             <div class="lrn-div">
                 <button type="btn" class="btn btn-learn btn_withborderb">CONÓCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
                 </button>
              </div>
            </div>
           </div>
          </div> 
          <div class="col-sm-4">
            <div class="acd-tour">
            <div class="tour-img tour_img" style="background:url(http://68.183.113.49/wp-content/themes/fototeca/img/about5.png);">
             </div>
            <div class="tour-caption">
             <h3>Sótano 2</h3>
             <div class="lrn-div">
                 <button type="btn" class="btn btn-learn btn_withborderb">CONÓCE MÁS
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

</html>f