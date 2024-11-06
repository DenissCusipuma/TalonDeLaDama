<?php
	include "conex_bd.php";
?>

<!DOCTYPE html>
<!-- saved from url=(0067)https://livedemo00.template-help.com/wt_60047_v4/starbis/index.html -->
<html class="wide wow-animation desktop landscape rd-navbar-static-linked" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home</title>
    
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://livedemo00.template-help.com/wt_60047_v4/starbis/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./Home_files/css">
    <link rel="stylesheet" href="./Home_files/bootstrap.css">
    <link rel="stylesheet" href="./Home_files/fonts.css">
    <link rel="stylesheet" href="./Home_files/style.css">
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
    
    <?php include "include/header.html"; ?>

    <?php include "include/slider.html"; ?>

    <div class="page animated" style="animation-duration: 500ms;">
      
      <section class="section section-50 section-md-90 section-xl-120" id="section-start-journey">
        <div class="container">
          <h3 class="text-center"><span>Check</span><em>our portfolio</em><span>With Child Themes</span></h3>
          <div class="row row-30">

                <?php
                  
                    $query = mysqli_query($conex,"SELECT * FROM mas_vendido");
                    $result = mysqli_num_rows($query);
                    if($result > 0){
  
                      while ($data = mysqli_fetch_array($query)) {
                ?>
    
            <div class="col-md-6 col-lg-4"><a class="thumbnail thumbnail-variant-4" href="#">
                
                <figure class="thumbnail-figure">
                    
                  <div class="thumbnail-image-wrap">
                    <img src="data:data:image/jpg:base64;base64,<?php echo  base64_encode($data['img']); ?>" alt="" width="550" height="420">
                  </div>

                </figure>
                <div class="caption">
                  <h4 class="caption-header"><span> <?php echo $data["categoria"];?> </span></h4>
                  
                </div></a>
            </div>

            <?php 
                    }
                }
            ?>
            
          </div>
        </div>
      </section>

      <section class="section section-50 section-md-90 section-xl-120">
        <div class="container">
          <h3 class="text-center"><span>What</span><em>you get</em><span>With Starbis</span></h3>
          <div class="row row-40">
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box responsive-centered">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg-variant-1 fl-bigmug-line-square160"></span></div>
                  <div class="box-header">
                    <h5><a href="https://livedemo00.template-help.com/wt_60047_v4/starbis/index.html#">Advanced UI Kit</a></h5>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="box-body">
                  <p>Make the pages of your website look more attractive with our new Advanced UI Kit.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box responsive-centered">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg-variant-1 fl-bigmug-line-equalization3"></span></div>
                  <div class="box-header">
                    <h5><a href="https://livedemo00.template-help.com/wt_60047_v4/starbis/index.html#">Bootstrap Toolkit</a></h5>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="box-body">
                  <p>Intuitive and powerful Bootstrap toolkit offers impressive customization possibilities.</p>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill">
              <article class="icon-box responsive-centered">
                <div class="box-top">
                  <div class="box-icon"><span class="novi-icon icon icon-primary icon-lg-variant-1 fl-bigmug-line-two316"></span></div>
                  <div class="box-header">
                    <h5><a href="https://livedemo00.template-help.com/wt_60047_v4/starbis/index.html#">Free Updates</a></h5>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="box-body">
                  <p>The template is provided with free updates to keep your website stable.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-50 section-md-60 section-lg-75 bg-gray-lighter novi-background">
        <div class="container">
          <div class="row row-40 justify-content-md-center align-items-md-center flex-row-md-reverse">
            <div class="col-md-5 col-xl-4 text-start">
              <div class="box-container-small text-start">
                <h3><span>Home Layouts</span><em>and</em><span>Demos</span></h3>
                <p class="text-secondary">Choose from our wide range of predefined Homepage layouts and demos to create your Own Amazing Experience.</p><a class="btn btn-xl btn-primary" href="https://www.templatemonster.com/website-templates/starbis.html" target="_blank">Get template</a>
              </div>
            </div>
            <div class="col-md-7 col-xl-8">
              <div class="image-wrap-1"><img src="./Home_files/landing-1-790x377.png" alt="" width="790" height="377">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-50 section-md-75">
        <div class="container">
          <div class="row row-40 justify-content-md-center align-items-md-center">
            <div class="col-md-5">
              <div class="inset-lg-left-20 inset-xl-left-70">
                <h3><span>Extremely</span><em>responsive</em><span>and Retina</span></h3>
                <p class="text-secondary" style="max-width: 290px;">Starbis is fully responsive and Retina ready that means its ability to be easily displayed on any modern device or gadget.</p><a class="btn btn-xl btn-primary" href="https://www.templatemonster.com/website-templates/starbis.html" target="_blank">Get template</a>
              </div>
            </div>
            <div class="col-md-7">
              <div class="image-group">
                <figure><img src="./Home_files/home-1-243x199.png" alt="" width="243" height="199">
                </figure>
                <figure><img src="./Home_files/home-2-508x341.png" alt="" width="508" height="341">
                </figure>
                <figure><img src="./Home_files/home-3-689x469.png" alt="" width="689" height="469">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <?php include "include/footer.html"; ?>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script type="text/javascript" async="" src="./Home_files/js"></script><script type="text/javascript" async="" src="./Home_files/analytics.js.descarga"></script><script async="" src="./Home_files/gtm.js.descarga"></script><script type="text/javascript" async="" src="./Home_files/ga.js.descarga"></script><script src="./Home_files/core.min.js.descarga"></script>
    <script src="./Home_files/script.js.descarga"></script>
	
	<!--LIVEDEMO_00 -->

	<script type="text/javascript">
	 var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7078796-5']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();</script>
	
  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
<a href="https://livedemo00.template-help.com/wt_60047_v4/starbis/index.html#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a><script type="text/javascript" id="">(function(){var b=document.location.search.split("aff\x3d")[1];if(b){var d=document.querySelectorAll("a"),c;for(c=0;c<d.length;c++){var a=d[c];0==a.href.indexOf("https://www.templatemonster.com")&&(0<a.href.indexOf("?")?a.href=a.href+"\x26aff\x3d"+b:a.href=a.href+"?aff\x3d"+b)}}b=document.location.search.split("i\x3d")[1];var e=document.location.search.split("pr_code\x3d")[1];if(b&&e)for(b=b.split("\x26")[0],d=document.querySelectorAll("a"),c=0;c<d.length;c++)a=d[c],0==a.href.indexOf("https://www.templatemonster.com")&&
(a.href="https://www.templatehelp.com/preset/cart.php?act\x3dadd\x26templ\x3d"+b+"\x26pr_code\x3d"+e)})();</script><iframe allow="join-ad-interest-group" data-tagging-id="G-2BM4094Z6X" data-load-time="1727013286892" height="0" width="0" src="./Home_files/rul.html" style="display: none; visibility: hidden;"></iframe>
</body></html>