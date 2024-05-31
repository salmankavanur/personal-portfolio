<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Experienced and passionate Web and Graphic Designer based in Kerala, India with over 7 years of expertise in both fields. My strong portfolio features a variety of design projects, including brochures, flyers, posters, and social media designs. Proficient in Adobe Suite (Photoshop, Illustrator, Premiere, After Effects, and InDesign) and Canva, I excel at creating visually stunning and effective marketing materials, as well as modern, user-friendly websites.">

  <title>Portfolio -  Experienced and Passionate Web & Graphic Designer</title>

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="Portfolio of Salman MP - Experienced and Passionate Web & Graphic Designer">
  <meta property="og:description" content="Experienced and passionate Web and Graphic Designer based in Malappuram,Kerala, India with over 7 years of expertise in web and graphic design, videography, video editing, photography, and more.">
  <meta property="og:image" content="{{ asset('assets/imgs/hero/personal-photo-bg-low.webp') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Portfolio of Salman MP - Experienced and Passionate Web & Graphic Designer">
  <meta name="twitter:description" content="Experienced and passionate Web and Graphic Designer based in Malappuram, Kerala, India with over 7 years of expertise in web and graphic design, videography, video editing, photography, and more.">
  <meta name="twitter:image" content="{{ asset('assets/imgs/hero/personal-photo-bg-low.webp') }}">

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/site-logo-light.svg') }}">

  <style> @import url('https://fonts.googleapis.com/css2?family=Macondo&display=swap'); </style>
    
  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>


<body class="font-heading-estedad">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="I" class="characters">I</span>
          <span data-text="N" class="characters">N</span>
          <span data-text="F" class="characters">F</span>
          <span data-text="O" class="characters">O</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>


  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>


  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">mode</p>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="dark">dark</button>
          <button data-mode="light">light</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->


  <!-- Offcanves start -->
  <div class="offcanvas__area">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasOne">
      <button class="offcanvas__close" data-bs-dismiss="offcanvas"><i class="fa-solid fa-xmark"></i></button>
      <div class="offcanvas__body">
        <div class="offcanvas__logo">
          <a href="{{ route('home') }}">
            <img src="../assets/imgs/logo/site-logo-light.png" alt="Offcanvas Logo" class="show-dark">
            <img src="../assets/imgs/logo/site-logo-dark.png" alt="Offcanvas Logo" class="show-light">
          </a>
          <p>Create live segments and target the right people for messages based on their behaviors.</p>
        </div>

        <div class="offcanvas__menu-area">
          <div class="offcanvas__menu-wrapper">
            <nav class="offcanvas__menu">
              <ul>
                <li><a href="{{ route('home') }}">home</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="#">Pages</a>
                  <ul>
                    <li> <a href="index-light.html">home <span class="new">light</span></a></li>
                    <li> <a href="portfolio-light.html">Portfolio <span class="new">light</span></a></li>
                    <li><a href="blog-light.html">blog <span class="new">light</span></a></li>
                  </ul>
                </li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="offcanvas__gallery">
          <p class="offcanvas__title">gallery</p>
          <div class="gallery__items">
            <div class="gallery__item">
              <a href="#"><img src="../assets/imgs/thumb/gallery.jpg" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="../assets/imgs/thumb/gallery-2.jpg" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="../assets/imgs/thumb/gallery-3.jpg" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="../assets/imgs/thumb/gallery-4.jpg" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="../assets/imgs/thumb/gallery-5.jpg" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
            <div class="gallery__item">
              <a href="#"><img src="../assets/imgs/thumb/gallery-6.jpg" alt="gallery Image">
                <span><i class="fa-brands fa-instagram"></i></span></a>
            </div>
          </div>
        </div>
        <div class="offcanvas__media">
          <p class="offcanvas__title">Follow</p>
          <ul>
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Offcanves end -->


  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">


        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>

        <!-- Header area start -->
        <header class="header__area pos-abs plr-50">
          <div class="header__inner">
            <div class="header__logo-3">
              <a href="{{ route('home') }}">
                <img src="../assets/imgs/logo/site-logo-light.png" class="show-dark" alt="Site Logo">
                <img src="../assets/imgs/logo/site-logo-dark.png" class="show-light" alt="Site Logo">
              </a>
            </div>
            <div class="header__nav">
              <nav class="main-menu">
                <ul>
                  <li><a href="{{ route('home') }}">home</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="dp-menu">
                      <li><a href="{{ route('portfolio') }}">Portfolio dark</a></li>
                      <li><a href="portfolio-light.html">Portfolio light</a></li>
                      <li><a href="{{ route('portfolio-details') }}">Portfolio details dark</a></li>
                      <li><a href="portfolio-details-light.html">Portfolio details light</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="dp-menu">
                      <li><a href="{{ route('home') }}">home dark</a></li>
                      <li><a href="index-light.html">home light</a></li>
                      <li><a href="{{ route('service-details') }}">service details dark</a></li>
                      <li><a href="service-details-light.html">service details light</a></li>
                      <li><a href="{{ route('blog') }}">Blog dark</a></li>
                      <li><a href="blog-light.html">Blog light</a></li>
                      <li><a href="{{ route('blog-details') }}">Blog details dark</a></li>
                      <li><a href="blog-details-light.html">Blog details light</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
              </nav>
            </div>
            <div class="header__nav-icon-3">
              <button class="menu-icon" id="open_offcanvas" data-bs-toggle="offcanvas" data-bs-target="#offcanvasOne">
                <span></span> </button>
            </div>
          </div>
        </header>
        <!-- Header area end -->


        <main>

          <!-- Portfolio section end -->
          <section class="portfolio__area pt-130 pb-130">
            <div class="container line ptf-70">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper text-center pb-50">
                    <h1 class="sec-sub-title pb-20 has_char_anim">Portfolio</h1>
                    <h2 class="sec-title has_text_reveal_anim">Exposing Me</h2>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xxl-12">
                  <div class="pdesigner-portfolio__btn-list has_pdlist_btn_animation">
                    <button data-filter="all"><span>07</span> View All</button>
                    <button data-filter=".creative"><span>02</span> Creative</button>
                    <button data-filter=".development"><span>05</span> Development</button>
                    <button data-filter=".branding"><span>03</span> Branding</button>
                    <button data-filter=".web-design"><span>03</span> Web Design</button>
                  </div>

                  <div class="mixitup-active">
                    <div class="pdesigner-portfolio__flex has_pdportfolio_animation">
                      <div class="pdesigner-portfolio__item mix creative">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/3.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item large mix development">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/4.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix branding">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/5.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/6.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix creative">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/7.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item large mix branding">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/8.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/16.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/work-02.png" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/9.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/work-01.png" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/17.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item large mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="../assets/imgs/portfolio/18.jpg" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a> </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Portfolio section start -->


        </main>


        <!-- Footer section start -->
        <footer class="footer__area pt-50 pb-50">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <ul class="footer__social-2">
                    <li><a href="https://www.instagram.com/salman_kavanur/" class="btn-hover-mask"><span><i class="fa-brands fa-instagram"></i></span>
                        Instagram</a></li>
                    <li><a href="https://www.behance.net/salmanmp" class="btn-hover-mask"><span><i class="fa-brands fa-behance"></i></span>
                        Behance</a></li>
                    <li><a href="https://github.com/salmankavanur/" class="btn-hover-mask"><span><i class="fa-brands fa-github"></i></span>
                        GitHub</a></li>
                    <li><a href="https://www.linkedin.com/in/salmanmp/" class="btn-hover-mask"><span><i class="fa-brands fa-linkedin"></i></span>
                        Linkedin</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
        <!-- Footer section end -->


      </div>
    </div>
  </div>



  <!-- All JS files -->
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/swiper-bundle.min.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/typed.js"></script>
  <script src="../assets/js/mixitup.min.js"></script>
  <script src="../assets/js/progressbar.js"></script>
  <script src="../assets/js/gsap.min.js"></script>
  <script src="../assets/js/ScrollSmoother.min.js"></script>
  <script src="../assets/js/ScrollToPlugin.min.js"></script>
  <script src="../assets/js/ScrollTrigger.min.js"></script>
  <script src="../assets/js/SplitText.min.js"></script>
  <script src="../assets/js/TweenMax.min.js"></script>
  <script src="../assets/js/jquery.meanmenu.min.js"></script>
  <script src="../assets/js/tilt.jquery.min.js"></script>
  <script src="../assets/js/basictable.min.js"></script>
  <script src="../assets/js/beforeafter.jquery-1.0.0.min.js"></script>
  <script src="../assets/js/backToTop.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/error-handling.js"></script>
  <script src="../assets/js/wc-cursor.js"></script>



</body>

</html>
