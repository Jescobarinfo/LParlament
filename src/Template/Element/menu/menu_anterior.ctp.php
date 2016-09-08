<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
        <div class="header-body">
          <div class="header-container container">
            <div class="header-row">
              <div class="header-column">
                <div class="header-logo">
                  <a href="index.html">
                    <img alt="Porto" width="111" height="95" data-sticky-width="82" data-sticky-height="90" data-sticky-top="33" src="img/icono.jpg">
                  </a>
                </div>
              </div>
              <div class="header-column">
                <div class="header-row">
                  <div class="header-search hidden-xs">
                    <form id="searchForm" action="page-search-results.html" method="get">
                      <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Buscar..." required>
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                    </form>
                  </div>
                  <nav class="header-nav-top">
                    <ul class="nav nav-pills">
                      <li class="hidden-xs">
                        <a href="about-us.html"><i class="fa fa-angle-right"></i> Acerca</a>
                      </li>
                      <li class="hidden-xs">
                        <a href="contact-us.html"><i class="fa fa-angle-right"></i> Contacto</a>
                      </li>
                      <li>
                        <span class="ws-nowrap"><i class="fa fa-phone"></i> (56-2) 2519 6700</span>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="header-row">
                  <div class="header-nav">
                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                      <i class="fa fa-bars"></i>
                    </button>
                    <ul class="header-social-icons social-icons hidden-xs">
                      <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                      <li class="social-icons-Instagram"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                      <nav>
                        <ul class="nav nav-pills" id="mainNav">
                          <li class="dropdown active">
                                <?php echo $this->Html->link('Inicio',['class' => 'dropdown-toggle']) ?> 
                            <!--<a class="dropdown-toggle" href="index.html">
                              Inicio
                            </a>-->
                            <ul class="dropdown-menu">
                              <li>
                                <a href="index.html">Landing Page</a>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="index-classic.html">Classic</a>
                                <ul class="dropdown-menu">
                                  <li><a href="index-classic.html">Classic - Original <span class="tip tip-dark">hot</span></a></li>
                                  <li><a href="index-classic-color.html">Classic - Color</a></li>
                                  <li><a href="index-classic-light.html">Classic - Light</a></li>
                                  <li><a href="index-classic-video.html">Classic - Video</a></li>
                                  <li><a href="index-classic-video-light.html">Classic - Video - Light</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="index-corporate.html">Corporate <span class="tip">new</span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="index-corporate.html">Corporate - Version 1 <span class="tip tip-dark">hot</span></a></li>
                                  <li><a href="index-corporate-2.html">Corporate - Version 2</a></li>
                                  <li><a href="index-corporate-3.html">Corporate - Version 3</a></li>
                                  <li><a href="index-corporate-4.html">Corporate - Version 4</a></li>
                                  <li><a href="index-corporate-5.html">Corporate - Version 5</a></li>
                                  <li><a href="index-corporate-6.html">Corporate - Version 6</a></li>
                                  <li><a href="index-corporate-7.html">Corporate - Version 7</a></li>
                                  <li><a href="index-corporate-8.html">Corporate - Version 8</a></li>
                                  <li><a href="index-corporate-hosting.html">Corporate - Hosting <span class="tip">new</span></a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">One Page</a>
                                <ul class="dropdown-menu">
                                  <li><a href="index-one-page.html">One Page Original</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                         <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                              Legisladores
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="portfolio-4-columns.html">Presidentes</a></li>
                              <li><a href="portfolio-3-columns.html">Diputados</a></li>
                              <li><a href="portfolio-2-columns.html">Senadores</a></li>
                              <li><a href="portfolio-lightbox.html">Partidos Politicos</a></li>
                          </li>
                              
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                              Materias
                            </a>
                          
                            <ul class="dropdown-menu">
                              <li class="dropdown-submenu">
                                <a href="#">Headers</a>
                                <ul class="dropdown-menu">
                                  <li class="dropdown-submenu">
                                    <a href="#">Default</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="index-classic.html">Default</a></li>
                                      <li><a href="index-header-language-dropdown.html">Default + Language Dropdown</a></li>
                                      <li><a href="index-header-big-logo.html">Default + Big Logo</a></li>
                                    </ul>
                                  </li>
                                  <li class="dropdown-submenu">
                                    <a href="#">Flat</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="index-header-flat.html">Flat</a></li>
                                      <li><a href="index-header-flat-top-bar.html">Flat + Top Bar</a></li>
                                      <li><a href="index-header-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
                                      <li><a href="index-header-flat-top-bar-search.html">Flat + Top Bar with Search</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="index-header-center.html">Center</a></li>
                                  <li><a href="index-header-below-slider.html">Below Slider</a></li>
                                  <li><a href="index-header-full-video.html">Full Video</a></li>
                                  <li><a href="index-header-narrow.html">Narrow</a></li>
                                  <li><a href="index-header-always-sticky.html">Always Sticky</a></li>
                                  <li class="dropdown-submenu">
                                    <a href="#">Transparent</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="index-header-transparent.html">Transparent</a></li>
                                      <li><a href="index-header-transparent-bottom-border.html">Transparent - Bottom Border</a></li>
                                      <li><a href="index-header-semi-transparent.html">Semi Transparent</a></li>
                                      <li><a href="index-header-semi-transparent-light.html">Semi Transparent - Light</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="index-header-full-width.html">Full-Width</a></li>
                                  <li class="dropdown-submenu">
                                    <a href="#">Navbar</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="index-header-navbar.html">Navbar</a></li>
                                      <li><a href="index-header-navbar-extra-info.html">Navbar + Extra Info</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="index-header-signin.html">Sign In / Sign Up</a></li>
                                  <li><a href="index-header-logged.html">Logged</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Navigations</a>
                                <ul class="dropdown-menu">
                                  <li><a href="index-classic.html">Default</a></li>
                                  <li><a href="index-navigation-stripe.html">Stripe</a></li>
                                  <li><a href="index-navigation-top-line.html">Top Line</a></li>
                                  <li><a href="index-navigation-dark-dropdown.html">Dark Dropdown</a></li>
                                  <li><a href="index-navigation-colors.html">Colors</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Footers</a>
                                <ul class="dropdown-menu">
                                  <li><a href="index-classic.html#footer">Default</a></li>
                                  <li><a href="index-footer-advanced.html#footer">Advanced</a></li>
                                  <li><a href="index-footer-simple.html#footer">Simple</a></li>
                                  <li><a href="index-footer-light.html#footer">Light</a></li>
                                  <li><a href="index-footer-light-narrow.html#footer">Light Narrow</a></li>
                                  <li class="dropdown-submenu">
                                    <a href="#">Colors</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="index-footer-color-primary.html#footer">Primary Color</a></li>
                                      <li><a href="index-footer-color-secondary.html#footer">Secondary Color</a></li>
                                      <li><a href="index-footer-color-tertiary.html#footer">Tertiary Color</a></li>
                                      <li><a href="index-footer-color-quaternary.html#footer">Quaternary Color</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="index-footer-latest-work.html#footer">Latest Work</a></li>
                                  <li><a href="index-footer-contact-form.html#footer">Contact Form</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Page Headers</a>
                                <ul class="dropdown-menu">
                                  <li><a href="index-page-header-default.html">Default</a></li>
                                  <li class="dropdown-submenu">
                                    <a href="#">Colors</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="index-page-header-color-primary.html">Primary Color</a></li>
                                      <li><a href="index-page-header-color-secondary.html">Secondary Color</a></li>
                                      <li><a href="index-page-header-color-tertiary.html">Tertiary Color</a></li>
                                      <li><a href="index-page-header-color-quaternary.html">Quaternary Color</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="index-page-header-light.html">Light</a></li>
                                  <li><a href="index-page-header-light-reverse.html">Light - Reverse</a></li>
                                  <li><a href="index-page-header-custom-background.html">Custom Background</a></li>
                                  <li><a href="index-page-header-parallax.html">Parallax</a></li>
                                  <li><a href="index-page-header-center.html">Center</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Admin Extension <span class="tip tip-dark">hot</span> <em class="not-included">(Not Included)</em></a>
                                <ul class="dropdown-menu">
                                  <li><a href="feature-admin-forms-basic.html">Forms Basic</a></li>
                                  <li><a href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
                                  <li><a href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
                                  <li><a href="feature-admin-forms-code-editor.html">Code Editor</a></li>
                                  <li><a href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
                                  <li><a href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
                                  <li><a href="feature-admin-tables-editable.html">Tables Editable</a></li>
                                  <li><a href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
                                  <li><a href="feature-admin-charts.html">Charts</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Sliders</a>
                                <ul class="dropdown-menu">
                                  <li><a href="index-classic.html">Revolution Slider</a></li>
                                  <li><a href="index-slider-2.html">Nivo Slider</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Layout Options</a>
                                <ul class="dropdown-menu">
                                  <li><a href="feature-layout-boxed.html">Boxed</a></li>
                                  <li><a href="feature-layout-dark.html">Dark</a></li>
                                  <li><a href="feature-layout-rtl.html">RTL</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Extra</a>
                                <ul class="dropdown-menu">
                                  <li><a href="feature-typography.html">Typography</a></li>
                                  <li><a href="feature-grid-system.html">Grid System</a></li>
                                  <li><a href="feature-page-loading.html">Page Loading</a></li>
                                  <li><a href="feature-lazy-load.html">Lazy Load</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                              Votaciones
                            </a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-submenu">
                                <a href="#">Shop</a>
                                <ul class="dropdown-menu">
                                  <li><a href="shop-full-width.html">Shop - Full Width</a></li>
                                  <li><a href="shop-sidebar.html">Shop - Sidebar</a></li>
                                  <li><a href="shop-product-full-width.html">Shop - Product Full Width</a></li>
                                  <li><a href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
                                  <li><a href="shop-cart.html">Shop - Cart</a></li>
                                  <li><a href="shop-login.html">Shop - Login</a></li>
                                  <li><a href="shop-checkout.html">Shop - Checkout</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                  <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                  <li><a href="blog-large-image.html">Blog Large Image</a></li>
                                  <li><a href="blog-medium-image.html">Blog Medium Image</a></li>
                                  <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                  <li><a href="blog-post.html">Single Post</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Layouts</a>
                                <ul class="dropdown-menu">
                                  <li><a href="page-full-width.html">Full width</a></li>
                                  <li><a href="page-left-sidebar.html">Left Sidebar</a></li>
                                  <li><a href="page-right-sidebar.html">Right Sidebar</a></li>
                                  <li><a href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                  <li><a href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
                                  <li><a href="page-secondary-navbar.html">Secondary Navbar</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a href="#">Extra</a>
                                <ul class="dropdown-menu">
                                  <li><a href="page-404.html">404 Error</a></li>
                                  <li><a href="page-coming-soon.html">Coming Soon</a></li>
                                  <li><a href="page-maintenance-mode.html">Maintenance Mode</a></li>
                                  <li><a href="sitemap.html">Sitemap</a></li>
                                </ul>
                              </li>
                              <li><a href="page-custom-header.html">Custom Header</a></li>
                              <li><a href="page-team.html">Team</a></li>
                              <li><a href="page-services.html">Services</a></li>
                              <li><a href="page-careers.html">Careers</a></li>
                              <li><a href="page-our-office.html">Our Office</a></li>
                              <li><a href="page-faq.html">FAQ</a></li>
                              <li><a href="page-login.html">Login / Register</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                              Leyes
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="portfolio-4-columns.html">4 Columns</a></li>
                              <li><a href="portfolio-3-columns.html">3 Columns</a></li>
                              <li><a href="portfolio-2-columns.html">2 Columns</a></li>
                              <li><a href="portfolio-lightbox.html">Portfolio Lightbox</a></li>
                              <li><a href="portfolio-timeline.html">Portfolio Timeline</a></li>
                              <li><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                              <li><a href="portfolio-single-project.html">Single Project</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                              Periodos
                            </a>
                            <ul class="dropdown-menu">
                              <?php
        $xml = file_get_contents("https://www.leychile.cl/Consulta/obtxml?opt=31&agr=2");
        $DOM = new DOMDocument('1.0', 'utf-8');
        $DOM->loadXML($xml);
        $Categorias = $DOM->getElementsByTagName('Categoria');
        ?>
        <?php
        foreach($Categorias as $Categoria) {
        echo '<li><a href="about-us.html'.$Categoria->getElementsByTagName("Descripcion")->item(0)->nodeValue.'" target="_blank">'.utf8_decode($Categoria->getElementsByTagName("Descripcion")->item(0)->nodeValue).'</a></li>';
        }
        ?>
        </ul>
        </li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                              Contacto
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="contact-us.html">Contact Us - Basic</a></li>
                              <li><a href="contact-us-advanced.php">Contact Us - Advanced</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>