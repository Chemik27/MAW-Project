<?php
  error_reporting(E_ALL);
  ini_set('display_errors','On');

	require 'PHPMailer/PHPMailerAutoload.php';



	$mail = new PHPMailer;                             // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                       // Set mailer to use SMTP
      $mail->Debugoutput = 'html';
      $mail->Host = 'mr.fibercorp.com.ar';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'administrador@makeawish.org.ar';                 // SMTP username
      $mail->Password = 'm4k34w1sh';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('administrador@makeawish.org.ar', 'administrador maw');
      $mail->addAddress('karii.gatica@gmail.com', 'Karina');     // Add a recipient

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Prueba';
      $mail->Body    = 'pruebita ';

      $mail->send();
      echo 'Message has been sent';

  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>:: MAKE A WISH :: Argentina </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon"  type="image/png" href="images/maw/favicon/star.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7cZilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- top-bar -->
   <div class="top-bar">
       <div class="container">
           <div class="row">
               <div class="">
                   <div class="logo"><a href="index.html"><img src="images/maw/logo/maw.png" alt="" class="logoMAWHeader"></a></div>
               </div>

           </div>
       </div>
   </div>
   <!-- /.top-bar -->
   <!-- header-section-->
   <div class="header-wrapper">
       <div>
           <div class="alignNav">
               <div class="alignNav2">
                   <!-- navigations-->
                   <navbar class="navigation">
                       <div id="navigation" class="alignMenu">
                           <ul class="alignMenu">
                               <li class="active"><a href="index.html">Inicio</a></li>
                               <li class="has-sub"><a href="nosotros.html">Sobre Nosotros</a>
                                   <ul>
                                       <li><a href="mision.html">Nuestra Mision</a></li>
                                       <li><a href="historia.html">Historia</a></li>
                                       <li><a href="consejo.html">Consejo</a></li>
                                   </ul>
                               </li>
                               <li><a href="eventos.html">Eventos</a>
                               </li>
                               <li><a href="deseos.html"> Deseos</a></li>
                               <li><a href="trastiendaArte.html">Trastienda de Arte</a></li>
                               <li><a href="comoAyudar.html">Cómo ayudar</a></li>
                               <li><a href="sponsors.html">Sponsors</a> </li>
                               <li><a href="contact-us.html">Contacto</a>
                               </li>
                           </ul>
                       </div>
                   </nav>
                   <!-- /.navigations-->
               </div>
           </div>
       </div>
   </div>
   <!-- /. header-section-->

    <!-- contact us -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-8 col-sm-7 col-xs-12 mb60">
                    <div class="book-form">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb30">
                                <h2 class="colorTextTitle">CONTACTO</h2>
                                <p>Por favor complete los campos.</p>
                            </div>
                             <form method=POST action="mailto:makeawish@makeawish.org.ar" enctype="text/plain" class="form-box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="name"> Nombre</label>
                                        <input  name="Nombre "  type="text" placeholder="Nombre" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="email"> Correo electronico </label>
                                        <input  type="email" placeholder="Correo electronico" name="Email "  class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="phone"> Telefono </label>
                                        <input  type="tel" name="Telefono " placeholder="Telefono" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="textarea"></label>
                                        <textarea class="form-control"  name="Mensaje " rows="2" placeholder="Mensaje" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-4 col-sm-4 col-xs-6">
                		<div class="marginLeftContact">

                	<div class="wpb_text_column wpb_content_element  ">
                		<div >
                			<h4 class="colorTextTitle">Información de contacto</h4>

                		</div>
                	</div> <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>

                	<div class="wpb_text_column wpb_content_element  ">
                		<div >
                			<p><span class="colorTextTitle">Dirección:</span><br>
                        Av. Alvear 1891 2do 224 (C1129AAA)</p>

                		</div>
                	</div> <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>

                	<div class="wpb_text_column wpb_content_element  ">
                		<div >
                			<p><span class="colorTextTitle">Teléfono:</span><br>
                (+5411) 4803-5762  /  4809-0471</p>

                		</div>
                	</div> <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>

                	<div class="wpb_text_column wpb_content_element  ">
                		<div >
                			<p><span class="colorTextTitle">Email:</span><br>
                makeawish@makeawish.org.ar</p>

                		</div>
                	</div>
                  <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>

                  	<div class="wpb_text_column wpb_content_element  ">
                  		<div>
                  			<p><span class="colorTextTitle">Redes Sociales:</span></p>
                        <div class="ft-social">
                            <span><a href="https://www.facebook.com/makeawisharg/" class="btn-social btn-facebook" target="_blank" ><i class="fa fa-facebook"></i></a></span>
                            <span><a href="https://twitter.com/MakeAWishArg/" class="btn-social btn-twitter" target="_blank"><i class="fa fa-twitter"></i></a></span>
                          <!--  <span><a href="#" class=" btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a></span> -->
                            <span><a href="https://www.instagram.com/makeawishargentina/?hl=es" target="_blank" class=" btn-social btn-instagram"><i class="fa fa-instagram"></i></a></span>

                        </div>
                  	</div>
                		</div>

                	</div>
            </div>
        </div>
    </div>
    <div id="contact-map"></div>
    <!-- /.contact us -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- about-us -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <div class="ft-logo"><img src="images/maw/logo/MAW_Argentina_REV.png" alt="" class="logoMAW"></div>
                    </div>
                </div>
                <!-- /.about us -->
                <!-- footer-hosting-services-links -->
                <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Nosotros</h3>
                        <ul>
                            <li><a href="index.html">Inicio </a></li>
                            <li><a href="nosotros.html">Sobre Nosotros</a></li>
                            <li><a href="eventos.html">Eventos</a></li>
                            <li><a href="deseos.html">Deseos</a></li>
                            <li><a href="trastiendaArte.html">Trastienda Arte</a></li>
                            <li><a href="comoAyudar.html">Cómo ayudar</a></li>
                            <li><a href="sponsors.html">Sponsors</a></li>
                            <li><a href="contact-us.html">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-hosting-services-links -->
                <!-- footer-useful links -->
                <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-widget footerBottomHeight">
                        <h3 class="footer-title">Noticias</h3>
    <a class="twitter-timeline" data-width="380" data-height="300" data-theme="light" href="https://twitter.com/MakeAWishArg?ref_src=twsrc%5Etfw">Tweets by MakeAWishArg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </div>
                </div>
                <!-- /.footer-useful links -->
                <!-- footer-useful links -->
                <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget contact-marginLeft">
                        <h3 class="footer-title">Contacto </h3>
                        <div class="contact-info">
                            <span class="contact-icon"><i class="icon-placeholder"></i></span>
                            <span class="contact-text"> Av. Alvear 1891 2do 224 (C1129AAA)</span>
                        </div>
                        <div class="contact-info">
                            <span class="contact-icon"><i class="icon-telephone"></i></span>
                            <span class="contact-text">(+5411) 4803-5762  /  4809-0471 </span>
                        </div>
                        <div class="contact-info">
                            <span class="contact-icon"><i class="icon-letter"></i></span>
                            <span class="contact-text">makeawish@makeawish.org.ar</span>
                        </div>
                        <div class="ft-social">
                            <span><a href="https://www.facebook.com/makeawisharg/" class="btn-social btn-facebook" ><i class="fa fa-facebook"></i></a></span>
                            <span><a href="https://twitter.com/MakeAWishArg/" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a></span>
                          <!--  <span><a href="#" class=" btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a></span> -->
                            <span><a href="https://www.instagram.com/makeawishargentina/?hl=es" class=" btn-social btn-instagram"><i class="fa fa-instagram"></i></a></span>

                        </div>
                    </div>
                </div>
                <!-- /.footer-useful links -->
            </div>
        </div>
        <!-- tiny-footer -->
        <div class="container">
            <div class="row">
                <div class="tiny-footer">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>TODOS LOS DERECHOS RESERVADOS  - <a href="politicadeprivacidad.html" target="_blank" class="copyrightlink"> Politica de Privacidad </a> y <a href="politicadeprivacidad.html" target="_blank" class="copyrightlink">Acuerdo del Usuario</a></p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Los fondos donados a Fundación Make-A-Wish Argentina sólo benefician nuestra causa y a los niños que atendemos en Argentina.</p>
                    </div>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
    <!-- /.footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: -34.5876821,
            lng: -58.3893649
        };
        var map = new google.maps.Map(document.getElementById('contact-map'), {
            zoom: 17,
            center: uluru,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/maw/location/pin.png'

        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&callback=initMap">
    </script>
</body>

</html>
