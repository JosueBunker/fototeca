<?php 
/*
    Template Name: ES-O
*/
?>
<!DOCTYPE html>
<html>

<head>   
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
  <meta name="description" content="">   
  <title>Fototeca - ES-O</title>   
  
  <!-- Icons -->  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- css -->  
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/style.css" rel="stylesheet">
  <link href="http://68.183.113.49/wp-content/themes/fototeca/css/responsive.css" rel="stylesheet">
</head>

<body class="es_o_page">

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


<section class="eso-slider slider-sec for_desctop">
  <div class="container">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso-bg.jpg"  style="width:100%;">
             <div class="carousel-caption slider-caption">
              <div class="fleft">
              <h1>Nombre de<br>
              Expo aquí </h1>
              <p>Artista Jane Doe</p>
             </div>
             <div class="fright">
              <h3>Compellingly 
                 <span>synthesize holistic </span>
                <span>methods of </span>
                empowerment 
              </h3>
             </div>
            </div>

          </div>

          <div class="item">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso-bg.jpg" style="width:100%;">
             <div class="carousel-caption slider-caption">
              <div class="fleft">
              <h1>Nombre de <br>
              Expo aquí </h1>
              <p>Artista Jane Doe</p>
             </div>
             <div class="fright">
              <h3>Compellingly 
                 <span>synthesize holistic </span>
                <span>methods of </span>
                empowerment 
              </h3>
             </div>
            </div>
        </div>
        
          <div class="item">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso-bg.jpg" style="width:100%;">
            <div class="carousel-caption slider-caption">
              <div class="fleft">
              <h1>Nombre de <br>
              Expo aquí </h1>
              <p>Artista Jane Doe</p>
             </div>
             <div class="fright">
              <h3>Compellingly 
                 <span>synthesize holistic </span>
                <span>methods of </span>
                empowerment 
              </h3>
             </div>
            </div>
            
          </div>
        </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
      <div class="text-msg">
        <p>Exposicion: Lorem Ipsum...</p>
       </div> 
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

      <span class="sr-only">Next</span>
      <div class="text-msg">
        <p>Exposicion: Lorem Ipsum...</p>
       </div> 
    </a>
  </div>
</div>
</section>


<section class="eso-slider section-div slider-sec for_mobile">
  <div class="container">
    <div class="mobile_slider">
    	 <div class="fleft">
            <h1>Nombre de 
                Expo aquí </h1>
            <p>Artista Jane Doe</p>
          </div>
        <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso-bg.jpg" alt="Los Angeles">
        <div class="carousel-caption slider-caption">
          <div class="fright">
              <h3>Compellingly synthesize holistic methods of empowerment</h3>
          </div>
        </div>
      </div>
</div>
</section>

<div class="down-arrow"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></div>

<section class="section-div state-div">
   <div class="container">
      <h1 class="heading"><span class="line-border"></span>Statement</h1>
      <div class="row">
        

        <div class="col-sm-7 blg_right">
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

        <div class="col-sm-5 blg_left">
          <div class="state-content">
            <p>At vero eos et accusamus et iusto odio 
            dignissimos ducimus qui blanditiis praesentium 
            voluptatum deleniti atque corrupti quos 
            dolores et quas molestias excepturi sint 
            occaecati cupiditate non provident, similique 
            sunt in culpa qui officia deserunt mollitia animi,
            id est laborum et dolorum fuga. Et harum 
            quidem rerum facilis est et expedita distinctio.
            Nam libero tempore, cum soluta nobis est 
            eligendi optio cumque nihil impedit quo minus 
            id quod maxime placeat facere possimus, 
            omnis voluptas assumenda est, omnis dolor 
            repellendus.  </p>
            <p>Temporibus autem quibusdam et aut officiis
              debitis aut rerum necessitatibus saepe eveniet 
              ut et voluptates repudiandae sint et molestiae 
              non recusandae. Itaque earum rerum hic 
              tenetur a sapiente delectus, ut aut reiciendis 
              voluptatibus maiores alias consequatur aut 
              perferendis doloribus asperiores repellat
            </p>
          </div>
        </div>

      </div>
    </div>
</section> 

<section class="section-div map-div">
  <div class="container">
    <div class="map-main">
      <div class="map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.948311187548!2d75.7771122145198!3d26.87338326825259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db44a51423625%3A0x6dc1c1e81f96c712!2sWDP+Technologies!5e0!3m2!1sen!2sin!4v1539606472781" width="600" height="450" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="map-con">
        <h4>Nombre de Expo aquí</h4>
        <p>Artista Jane Doe</p>
        <ul>
          <li>Fecha:13 de junio 2018</li>
          <li>Hora: 6 PM</li>
          <li>Dirección: Via 6, 3-56 Edificio OEG, Ciudad de Guatemala, Guatemala 01004</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section-div Satelite-div">
  <div class="container">
     <h1 class="heading">Espaci <span class="line-border"></span>o <br>
   Satélite</h1>
    <div class="row">
      <div class="col-sm-6 col-xs-6 full_width_m">
        <div class="slite-left">
          <h3>Compellingly 
              <span>synthesize holistic </span>
              <span>methods of </span>
                  empowerment 
              </h3>
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 full_width_m">
        <div class="slite-right">
          <p>Proactively network revolutionary deliverables 
            rather than future-proof best practices. 
            Distinctively engineer emerging quality vectors 
            rather than enterprise-wide core competencies. 
            Holisticly cultivate stand-alone supply chains
          </p>
          <p>Interactively recaptiualize dynamic e-markets with 
            user-centric leadership skills. Interactively 

            niches.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-div archive-div">
  <div class="container">
    <h1 class="heading"><sup>__</sup>Archivo</h1> 
    <div class="row">
      
      <div class="col-sm-6 blg_right">
        <div class="arch_right">
          <img src="http://68.183.113.49/wp-content/themes/fototeca/img/eso4.png">
        </div>
      </div>
      <div class="col-sm-6 blg_right">
        <div class="arch_left">
            <div class="tags">
              <a href="#">Regresar<span class="plus">
                <sub><i class="fa fa-plus" aria-hidden="true"></i></sub></span>
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/hand-off.png">
              </a>
            </div>
          <div class="inner-scroll">
            <div class="stu_info">
                <h3>Objectively re-engineer 
               <span> virtual outsourcing </span>
                <span>whereas cross-media </span>
                applications.</h3>
            </div>
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

               <p>Proactively network revolutionary deliverables rather 
                than future-proof best practices. Distinctively engineer 
                 emerging quality vectors rather than enterprise-wide 
                 core competencies. Holisticly cultivate stand-alone 
                 supply chains without high-payoff process
                 improvements. 
               </p>
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

               <p>Proactively network revolutionary deliverables rather 
                than future-proof best practices. Distinctively engineer 
                 emerging quality vectors rather than enterprise-wide 
                 core competencies. Holisticly cultivate stand-alone 
                 supply chains without high-payoff process
                 improvements. 
               </p>
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

</html>