<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'Part-ley';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= $cakeDescription ?>
    </title>
    <link rel="shortcut icon" href="img/icono.jpg" type="image/x-icon" />
   
    <?= $this->Html->css('bootstrap.css'); ?>
    <?= $this->Html->css('font-awesome.css'); ?>
    <?= $this->Html->css('simple-line-icons.css'); ?>
    <?= $this->Html->css('owl.carousel.min'); ?>
    <?= $this->Html->css('owl.theme.default.min'); ?>
    <?= $this->Html->css('magnific-popup.css'); ?>
    <?= $this->Html->css('theme.css'); ?>
    <?= $this->Html->css('theme-elements.css'); ?>
    <?= $this->Html->css('theme-blog.css'); ?>
    <?= $this->Html->css('theme-shop.css'); ?>
    <?= $this->Html->css('theme-animate.css'); ?>
    
    <?= $this->Html->css('settings.css'); ?>
    <?= $this->Html->css('layers.css'); ?>
    <?= $this->Html->css('navigation.css'); ?>
    <?= $this->Html->css('component.css'); ?>
    <?= $this->Html->css('skin-corporate-4.css'); ?>
    <?= $this->Html->css('custom.css'); ?>
   <?= $this->Html->css('main.css'); ?>
   <?= $this->Html->script('ie.css'); ?>
    <!-- <?= $this->Html->css('base.css') ?>-->
    <!--<?= $this->Html->css('cake.css') ?>-->
</head>
<body>
 

      <div class="body">
        <?= $this->Element('menu/menu'); ?>
       </div>


<div role="main" class="main">

        <div class="slider-container rev_slider_wrapper">
          <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
            <ul>
              <li data-transition="fade">

                <img src="img/slide-corporate-3.jpg"  
                  alt=""
                  data-bgposition="center center" 
                  data-bgfit="cover" 
                  data-bgrepeat="no-repeat" 
                  class="rev-slidebg">

                <div class="tp-caption"
                  data-x="177"
                  data-y="180"
                  data-start="1000"
                data-transform_in="x:[-300%];opacity:0;s:500;"></div>

                <div class="tp-caption top-label"
                  data-x="227"
                  data-y="180"
                  data-start="500"
                  data-transform_in="y:[-300%];opacity:0;s:500;"></div>

                <div class="tp-caption"
                  data-x="480"
                  data-y="180"
                  data-start="1000"
                  </div>

                <div class="tp-caption main-label"
                  data-x="135"
                  data-y="210"
                  data-start="1500"
                  data-whitespace="nowrap"             
                  data-transform_in="y:[100%];s:500;"
                  data-transform_out="opacity:0;s:500;"
                  data-mask_in="x:0px;y:0px;"></div>

                <div class="tp-caption bottom-label"
                  data-x="185"
                  data-y="280"
                  data-start="2000"
                  data-transform_in="y:[100%];opacity:0;s:500;"></div>
                
              </li>
              <li data-transition="fade">

                <img src="img/slide-corporate-4.jpg"  
                  alt=""
                  data-bgposition="center center" 
                  data-bgfit="cover" 
                  data-bgrepeat="no-repeat" 
                  class="rev-slidebg">

                <div class="tp-caption featured-label"
                  data-x="center"
                  data-y="210"
                  data-start="500"
                  style="z-index: 5"
                  data-transform_in="y:[100%];s:500;"
                  data-transform_out="opacity:0;s:500;"></div>

                <div class="tp-caption bottom-label"
                  data-x="center"
                  data-y="270"
                  data-start="1000"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                  data-transform_out="opacity:0;s:500;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-splitin="chars" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="font-size: 23px; line-height: 30px;"
                  data-elementdelay="0.05"></div>

              </li>
            </ul>
          </div>
        </div>

        <div class="home-intro" id="home-intro">
          <div class="container">

            <div class="row">
              <div class="col-md-8">
                <p>
                  Para nosotros es importante que el ciudadano tenga la informacion <em>facilmete</em>
                  <span>Comenta sobre las legislaciones</span>
                </p>
              </div>
              <div class="col-md-4">
                <div class="get-started">
                  <a href="#" class="btn btn-lg btn-primary">Comentar Ahora!</a>
                </div>
              </div>
            </div>

          </div>
        </div>













        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Nuestros <strong>Servicios</strong></h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">


                <div class="feature-box-icon">
                  <i class="icon-user-following icons"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="mb-sm">Mejorar la Transparencia</h4>
                  <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                <div class="feature-box-icon">
                  <i class="icon-layers icons"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="mb-sm">Transparentar las actividades legislativas</h4>
                  <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                <div class="feature-box-icon">
                  <i class="icon-calculator icons"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="mb-sm">Informar tendencias e historicos</h4>
                  <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-md">
            <div class="col-md-4">
              <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                <div class="feature-box-icon">
                  <i class="icon-star icons"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="mb-sm">Simplificar la informacion expuesta por las paginas legislativas en Chile</h4>
                  <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                <div class="feature-box-icon">
                  <i class="icon-drop icons"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="mb-sm">Generar instacias de debate</h4>
                  <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                <div class="feature-box-icon">
                  <i class="icon-mouse icons"></i>
                </div>
                <div class="feature-box-info">
                  <h4 class="mb-sm">Comentar con redes sociales</h4>
                  <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-md mb-xl">
          
   
        
          </div>
        </div>

 <!-- <section class="parallax section section-text-light section-parallax section-center mt-xl mb-none" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-people.jpg);">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options='{"items": 1, "loop": false}'>
                  <div>
                    <div class="col-md-12">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                        <div class="testimonial-author">
                          <img src="img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
                        </div>
                        <blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="col-md-12">
                      <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                        <div class="testimonial-author">
                          <img src="img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
                        </div>
                        <blockquote>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </blockquote>
                        <div class="testimonial-author">
                          <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->


        <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="footer-ribbon">
              <span>Part-ley</span>
            </div>
            <div class="col-md-3">
              <div class="newsletter">
                <h4>Newsletter</h4>
                <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
      
                <div class="alert alert-success hidden" id="newsletterSuccess">
                  <strong>Success!</strong> You've been added to our email list.
                </div>
      
                <div class="alert alert-danger hidden" id="newsletterError"></div>
      
                <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                  <div class="input-group">
                    <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go!</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-3">
              <h4>Latest Tweets</h4>
              <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
                <p>Please wait...</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-details">
                <h4>Contact Us</h4>
                <ul class="contact">
                  <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                  <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                  <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
              <h4>Follow Us</h4>
              <ul class="social-icons">
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-1">
                <a href="index.html" class="logo">
                  <img alt="Porto Website Template" class="img-responsive" src="img/footer.png">
                </a>
              </div>
              <div class="col-md-7">
                <p>© Copyright 2015. All Rights Reserved.</p>
              </div>
              <div class="col-md-4">
                <nav id="sub-menu">
                  <ul>
                    <li><a href="page-faq.html">FAQ's</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </footer>


      <!--JQUERYS IMPORTADOS -->



    <?= $this->Html->script('jquery-1.11.3'); ?>
    <?= $this->Html->script('bootstrap'); ?>
    
    <?= $this->Html->script('modernizr'); ?>  
    <?= $this->Html->script('respond'); ?>
    <?= $this->Html->script('excanvas'); ?>
    <?= $this->Html->script('jquery'); ?>


    <?= $this->Html->script('jquery.appear'); ?>
    <?= $this->Html->script('jquery.easing'); ?>
    <?= $this->Html->script('jquery-cookie'); ?>
    <?= $this->Html->script('common'); ?>
    <?= $this->Html->script('jquery.validation'); ?>
    <?= $this->Html->script('jquery.stellar'); ?>
    <?= $this->Html->script('jquery.easy-pie-chart'); ?>
    <?= $this->Html->script('jquery.gmap'); ?>

    <?= $this->Html->script('jquery.lazyload'); ?>
    <?= $this->Html->script('jquery.isotope'); ?>
    <?= $this->Html->script('owl.carousel'); ?>
    <?= $this->Html->script('jquery.magnific-popup'); ?>
    <?= $this->Html->script('vide'); ?>
    <?= $this->Html->script('theme'); ?>
    <?= $this->Html->script('jquery.themepunch.tools.min'); ?>
    <?= $this->Html->script('jquery.themepunch.revolution.min'); ?>
    <?= $this->Html->script('revolution.extension.actions.min'); ?>
    <?= $this->Html->script('revolution.extension.carousel.min'); ?>


    <?= $this->Html->script('revolution.extension.kenburn.min'); ?>
    <?= $this->Html->script('revolution.extension.layeranimation.min'); ?>
    <?= $this->Html->script('revolution.extension.migration.min'); ?>

    <?= $this->Html->script('revolution.extension.navigation.min'); ?>
    <?= $this->Html->script('revolution.extension.parallax.min'); ?>

    <?= $this->Html->script('revolution.extension.slideanims.min'); ?>

    <?= $this->Html->script('revolution.extension.video.min'); ?>

    <?= $this->Html->script('jquery.flipshow'); ?>

     

    <?= $this->Html->script('view.home'); ?>
    <?= $this->Html->script('custom'); ?>
    <?= $this->Html->script('theme.init'); ?>
    <?= $this->Html->script('owl.carousel'); ?>
    <?= $this->Html->script('jquery.magnific-popup'); ?>
     <?= $this->Html->script('jquery.easy-pie-chart'); ?>
    <?= $this->Html->script('vide'); ?>
    
    <?= $this->Html->script('jquery.themepunch.tools.min'); ?>
    <?= $this->Html->script('jquery.themepunch.revolution.min'); ?>





    





</body>
</html>
