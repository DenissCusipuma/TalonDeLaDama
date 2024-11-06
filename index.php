<?php
	include "conex_bd.php";
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Talon de la Dama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,400italic,700,900%7CPlayfair+Display:700italic,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="preloader">
      <div><a href="index.html"><img src="images/logo.png" alt="" width="139" height="22"/></a>
        <div class="page-loader-body">
          <div id="spinningSquaresG">
            <div class="spinningSquaresG" id="spinningSquaresG_1"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_2"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_3"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_4"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_5"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_6"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_7"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_8"></div>
          </div>
        </div>
      </div>
    </div>
    <a class="d-none d-xl-block" href="#"><img class="portada" src="images/portada.png" alt=""/></a>
    <div class="page">
      
      <?php include "include/header.html"; ?>

      <?php include "include/slider.html"; ?>

      <section class="section section-50 section-md-90 section-xl-top-120 section-xl-bottom-145" id="section-start-journey">
        <div class="container">
          <div class="row row-40 row-md-60 align-items-lg-end justify-content-lg-center">
            <div class="col-md-10 col-lg-5 wow fadeInLeftSmall" data-wow-duration="1s" data-wow-offset="200">
              <h2 class="text-red-orange">Talon de la Dama</h2>
              <!--<p class="h3">Bootstrap template</p>-->
              <p class="text-secondary">
                Nuestra colección más reciente fue todo un éxito, sobrepasando todas nuestras expectativas comerciales, 
                y marcando la consolidación de una etapa mucho más madura. Alcanzamos un nivel de plenitud de la marca 
                donde podemos percibir los diversos aspectos que nos representan de una manera más clara y concisa.
                <!--</p><a class="button button-xl button-primary" href="#" target="_blank">Get Starbis Now</a>-->
            </div>
            <div class="col-md-11 col-lg-7">
              <div class="image-group">
                <figure class="wow fadeInRightSmall" data-wow-duration=".9s" data-wow-delay=".0s" data-wow-offset="80"><img src="images/home-1-243x199.png" alt="" width="243" height="199"/>
                </figure>
                <figure class="wow fadeInRightSmall" data-wow-duration=".9s" data-wow-delay=".2s" data-wow-offset="200"><img src="images/home-2-508x341.png" alt="" width="508" height="341"/>
                </figure>
                <figure class="wow fadeInRightSmall" data-wow-duration=".9s" data-wow-delay=".4s" data-wow-offset="300"><img src="images/home-3-689x469.png" alt="" width="689" height="469"/>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="divider-spectrum"></div>
      <section class="parallax-container bg-black" data-parallax-img="images/parallax-1.png">
        <div class="parallax-content">
          <div class="section-50 section-md-75 section-xl-top-100 section-xl-bottom-120">
            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-10 col-xl-9 text-center">
                  <h3><span style="color:black;">Compra a lo Seguro</span></h3>
                  <p>
                  </p>
                </div>
              </div>
              <div class="row row-40 row-xl-60 offset-xl-top-60">
                <div class="col-md-6 col-lg-4">
                  <article class="icon-box-vertical"><span class="novi-icon icon icon-primary icon-md material-icons-security"></span>
                    <h5 class="icon-box-header"><a style="color:black;">Envios</a></h5>
                    <p style="color:black;">- San Martin de Pangoa <br> - Mazamari <br> - Satipo <br> - Rio Negro</p>
                  </article>
                </div>
                <div class="col-md-6 col-lg-4">
                  <article class="icon-box-vertical"><span class="novi-icon icon icon-primary icon-md material-icons-build"></span>
                    <h5 class="icon-box-header"><a style="color:black;">Garantía de satisfacción</a></h5>
                    <p style="color:black;">Tu compra cuenta con 7 días de garantía.</p>
                  </article>
                </div>
                <div class="col-md-6 col-lg-4">
                  <article class="icon-box-vertical"><span class="novi-icon icon icon-primary icon-md material-icons-palette"></span>
                    <h5 class="icon-box-header"><a style="color:black;">Devolución</a></h5>
                    <p style="color:black;">Si no llega en la fecha acordada se le devuelve su dinero</p>
                  </article>
                </div>
                <div class="col-md-6 col-lg-4">
                  <article class="icon-box-vertical"><span class="novi-icon icon icon-primary icon-md material-icons-layers"></span>
                    <h5 class="icon-box-header"><a style="color:black;">Pagos Seguros</a></h5>
                    <p style="color:black;">Separa tu producto con un 50% de adelanto o menos</p>
                  </article>
                </div>
                <div class="col-md-6 col-lg-4">
                  <article class="icon-box-vertical"><span class="novi-icon icon icon-primary icon-md material-icons-device_hub"></span>
                    <h5 class="icon-box-header"><a style="color:black;">Soporte </a></h5>
                    <p style="color:black;">¿Necesitas ayuda? Nuestro equipo responderá tus dudas lo más pronto posible</p>
                  </article>
                </div>
                <div class="col-md-6 col-lg-4">
                  <article class="icon-box-vertical"><span class="novi-icon icon icon-primary icon-md material-icons-directions_run"></span>
                    <h5 class="icon-box-header"><a href="#" style="color:black;">Separa tus Pedidos</a></h5>
                    <p style="color:black;">Separa tus pedidos desde s/ 10.00 Nuevos Soles</p>
                  </article>
                </div>
              </div>
              <div class="row offset-xl-top-60">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-50 section-md-90 section-xl-top-120 section-xl-bottom-145">
        <div class="container isotope-wrap">
          <div class="row row-40">
            <div class="col-sm-12 text-center">
              <h3><span>Los mas Vendidos</span></h3>
              <ul class="isotope-filters-responsive">
                <li>
                </li>
                <li class="block-top-level">
                  <button class="isotope-filters-toggle button button-sm button-default" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                  <div class="isotope-filters isotope-filters-minimal isotope-filters-horizontal" id="isotope-1">
                    <ul class="list-inline">
                      <li><a class="active" data-isotope-filter="*" href="#">Todo</a></li>
                      <li><a data-isotope-filter="*" href="#">Damas</a></li>
                      <li><a data-isotope-filter="*" href="#">Caballeros</a></li>
                      <li><a data-isotope-filter="*" href="#">Niños</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-sm-12">
              <div class="row isotope isotope-gutter-default" data-lightgallery="group" data-lg-thumbnail="false">
                
            <?php
                  
                $query = mysqli_query($conex,"SELECT * FROM mas_vendido");
                $result = mysqli_num_rows($query);
                if($result > 0){

                    while ($data = mysqli_fetch_array($query)) {
            ?>

                <div class="col-12 col-md-6 col-lg-4 isotope-item">
                  <div class="thumbnail thumbnail-variant-3"><a class="link link-external" href="#"><span class="novi-icon icon icon-sm fa fa-link"></span></a>
                    
                    <figure><img src="data:data:image/jpg:base64;base64,
                        <?php echo  base64_encode($data['img']); ?>" alt="" style="width: 80%;"/>
                    </figure>
                    <div class="caption"><a class="link link-original" href="data:data:image/jpg:base64;base64,
                        <?php echo  base64_encode($data['img']); ?>" data-lightgallery="item"></a>
                    </div>

                  </div>
                </div>

                <?php 
                    }
                }
            ?>

              </div>
            </div>

          </div>
        </div>
      </section>

    <?php include "include/footer.html"; ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>