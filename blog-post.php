<?php 
/*
    Template Name: Blog-Post
*/
?>
<!DOCTYPE html>
<html>

<head>   
  <meta charset="utf-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
  <meta name="description" content="">   
  <title>Fototeca - Blog</title>   

  <!-- Icons -->  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- css -->  
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/bootstrap.min.css" rel="stylesheet">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/style.css" rel="stylesheet">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/responsive.css" rel="stylesheet">
  <link href="//fototeca.bunker.media/wp-content/themes/fototeca/css/blog-post.css" rel="stylesheet">
</head>

<body class="newsletter-page">

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

  <div class="heading_ltr">
    <div class="container">
       <h1 class="heading"><span class="line-border"></span> Blog</h1> 
    </div>
  </div>
  
  <section class="section-div main-post">
    <div class="container">

      <div class="col-sm-7 contenedor">
        <div class="newsltr_heading">
          <span>19.07.2018 / 11:45 PM / By: <u>Jane Doe</u></span>
          <h2>A glimpse into the uncanny world of robot made fine art </h2>
          <a class="prod" href="#">POSPRODUCCIÓN</a>
          <p>Here’s why art–and paintings in particular–are a surprisingly
             potent way to gauge the future of machine intelligence.
          </p>
        </div>

        <section class="newsltr-slider">
          <!-- <div class="container"> -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">


              <div class="carousel-inner">
                <div class="item active">
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/blog-slider.png" alt="Los Angeles">
                </div>

                <div class="item">
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/blog-slider.png" alt="Chicago">
                </div>
          
                <div class="item">
                  <img src="http://68.183.113.49/wp-content/themes/fototeca/img/blog-slider.png" alt="New york">
                </div>
              </div>

          <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          <!-- </div> -->
        </section>

        <div class="newsltr_heading">
          <!-- <div class="container"> -->
            <div class="inner-newsltr">
              <span>Pie de página va aquí. Lorem Ipsum blablabla.</span>
              <h4>El pasaje estándar Lorem Ipsum, usado desde el año 1500.</h4>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor      incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui oficia deserunt mollit anim id est laborum."
              </p>
              <h4>Sección 1.10.32 de "de Finibus Bonorum et Malorum", escrito por Cicero en el 45 antes de Cristo</h4>
              <p>
               "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" 
              </p>
              <h4>Traducción hecha por H. Rackham en 1914. </h4>
              <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will
                give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the
                master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                because those who do not know how to pursue pleasure rationally encounter consequences that are extremely
                painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but
                because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a
                trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?
                But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences,
                or one who avoids a pain that produces no resultant pleasure?" 
              </p>
              <div class="letter-msg">
                <h3>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint”
                </h3>
              </div>
              <h4>Traducción hecha por H. Rackham en 1914</h4>
              <p>
              "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
              by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that
              are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the
              same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a
              free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like
              best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims
              of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances
              accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to
              secure other greater pleasures, or else he endures pains to avoid worse pains."
              </p>
            </div>
            <div class="social-icon">
              <ul>
                <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/twitter.png"></a></li>
                <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/facebook.png"></a></li>
                <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/youtube.png"></a></li>
                <li><a href="#"><img src="http://68.183.113.49/wp-content/themes/fototeca/img/instagram.png"></a></li>
              </ul> 
            </div>
          <!-- </div> -->
        </div>
      </div>

      <div class="col-sm-5">
        <section class="section-div newsletter nl-div">
          <div class="newsletter-div">
            <h1 class="heading">Newsletter <img src="http://68.183.113.49/wp-content/themes/fototeca/img/newsletter.png"></h1>
            <p>Recibe en la intimidad de tu bandeja de entrada nuestro boletín semanal.
             Noticias, tips, eventos, talleres y más.
            </p>
            <form class="navbar-form news-left" action="/action_page.php">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="janedoe@gmail.com">
              </div>
            </form>
            <div class="subcribr-btn">
              <a href="#">
                <button class="btn btn-sub btn_withborder" type="submit">SUSCRÍBETE
                  <i class="fa fa-envelope icon"></i>
                </button>
              </a>
            </div>
          </div> 
        </section>

        <section class="section-div blog_post">
          <h1 class="heading">TOP RATED blog posts over here!</h1>
          <div class="post_list">
            <div class="left_post">
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b1.jpg">
              <div class="post-num">
               <h2> 1</h2>
               </div>
            </div>
            <div class="right_post">
              <div class="pblog-cont">
                <h4>El pasaje estándar Lorem Ipsum, usado desde el año  1500 - 2018 Blabla.</h4>
                <span>19.07.2018 / By: <u>Jane Doe</u></span>
              </div>
            </div>
          </div>

          <div class="post_list">
            <div class="left_post">
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b1.jpg">
              <div class="post-num">
               <h2>2</h2>
               </div>
            </div>
            <div class="right_post">
              <div class="pblog-cont">
                <h4>El pasaje estándar Lorem<br> Ipsum, usado desde el año <br> 1500 - 2018 Blabla.</h4>
                <span>19.07.2018 / By: <u>Jane Doe</u></span>
              </div>
            </div>
          </div>

          <div class="post_list">
            <div class="left_post">
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b1.jpg">
              <div class="post-num">
               <h2>3</h2>
               </div>
            </div>
            <div class="right_post">
              <div class="pblog-cont">
                <h4>El pasaje estándar Lorem<br> Ipsum, usado desde el año <br> 1500 - 2018 Blabla.</h4>
                <span>19.07.2018 / By: <u>Jane Doe</u></span>
              </div>
            </div>
          </div>

          <div class="post_list">
            <div class="left_post">
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b1.jpg">
              <div class="post-num">
               <h2>4</h2>
               </div>
            </div>
            <div class="right_post">
              <div class="pblog-cont">
                <h4>El pasaje estándar Lorem<br> Ipsum, usado desde el año <br> 1500 - 2018 Blabla.</h4>
                <span>19.07.2018 / By: <u>Jane Doe</u></span>
              </div>
            </div>
          </div>

          <div class="post_list">
            <div class="left_post">
              <img src="http://68.183.113.49/wp-content/themes/fototeca/img/b1.jpg">
              <div class="post-num">
               <h2>5</h2>
               </div>
            </div>
            <div class="right_post">
              <div class="pblog-cont">
                <h4>El pasaje estándar Lorem<br> Ipsum, usado desde el año <br> 1500 - 2018 Blabla.</h4>
                <span>19.07.2018 / By: <u>Jane Doe</u></span>
              </div>
            </div>
          </div>
        </section>

        <section class="section-div post-video">
          <h1 class="heading">illo inventore veritatis et quasi architecto beatae</h1>
          <div class="blog-video">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/architec.png">
          </div>
        </section>
      </div>

    </div>
  </section>


<section class="section-div empower-div">
   <div class="container">
     <h1 class="heading"><span class="line-border"></span>
         Te puede interesar<img class="book" src="http://68.183.113.49/wp-content/themes/fototeca/img/spec-b.png"></h1>
    <div class="row">
      <div class="col-sm-8">
        <div class="emp-left">
          <img src="http://68.183.113.49/wp-content/themes/fototeca/img/com.png">
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
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
            </button>
          </div>
        </div>

  <div class="clearfix"></div>
<div class="emp-nx">
        <div class="col-sm-4">
          <div class="emp-div">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/emp1.png">
            <h3>Compellingly synthesize holistic methods</h3>
            <p>Objectively re-engineer virtual outsourcing </br>whereas  
              cross-media applications. Interactively<br> reconceptualize 
              equity invested services and leading-edge leadership.</p>
              <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
           </button>
          </div>
           
        </div>
        <div class="col-sm-4">
          <div class="emp-div">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/emp2.png">
            <h3>Compellingly synthesize holistic methods</h3>
              <p>Objectively re-engineer virtual outsourcing </br>whereas  
              cross-media applications. Interactively<br> reconceptualize 
              equity invested services and leading-edge leadership.</p>
              <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
           </button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="emp-div">
            <img src="http://68.183.113.49/wp-content/themes/fototeca/img/emp3.png">
            <h3>Compellingly synthesize holistic methods</h3>
              <p>Objectively re-engineer virtual outsourcing </br>whereas  
              cross-media applications. Interactively<br> reconceptualize 
              equity invested services and leading-edge leadership.</p>
              <button type="btn" class="btn btn-learn btn_withborder">CONOCE MÁS
                <img src="http://68.183.113.49/wp-content/themes/fototeca/img/right-arrow.png" class="right_angel_ar">
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
 
<section class="section-div newsletter">
  <div class="container">
    <div class="newsletter-div">
      <h1 class="heading">Newsletter <img src="http://68.183.113.49/wp-content/themes/fototeca/img/newsletter.png"></h1>
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