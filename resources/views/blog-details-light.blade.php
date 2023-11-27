<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="INFO HTML5 Template">

  <title>Blog</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="../assets/imgs/logo/favicon.png">


  <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">



  <!-- All CSS files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../assets/css/progressbar.css">
  <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="../assets/css/magnific-popup.css">
  <link rel="stylesheet" href="../assets/css/basictable.min.css">
  <link rel="stylesheet" href="../assets/css/master.css">
  <link rel="stylesheet" href="../style.css">



</head>


<body class="font-heading-estedad light">

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
          <a href="index.html">
            <img src="../assets/imgs/logo/site-logo-light.png" alt="Offcanvas Logo" class="show-dark">
            <img src="../assets/imgs/logo/site-logo-dark.png" alt="Offcanvas Logo" class="show-light">
          </a>
          <p>Create live segments and target the right people for messages based on their behaviors.</p>
        </div>

        <div class="offcanvas__menu-area">
          <div class="offcanvas__menu-wrapper">
            <nav class="offcanvas__menu">
              <ul>
                <li><a href="index.html">home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="#">Pages</a>
                  <ul>
                    <li> <a href="index-light.html">home <span class="new">light</span></a></li>
                    <li> <a href="portfolio-light.html">Portfolio <span class="new">light</span></a></li>
                    <li><a href="blog-light.html">blog <span class="new">light</span></a></li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
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
              <a href="index.html">
                <img src="../assets/imgs/logo/site-logo-light.png" class="show-dark" alt="Site Logo">
                <img src="../assets/imgs/logo/site-logo-dark.png" class="show-light" alt="Site Logo">
              </a>
            </div>
            <div class="header__nav">
              <nav class="main-menu">
                <ul>
                  <li><a href="index.html">home</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="dp-menu">
                      <li><a href="portfolio.html">Portfolio dark</a></li>
                      <li><a href="portfolio-light.html">Portfolio light</a></li>
                      <li><a href="portfolio-details.html">Portfolio details dark</a></li>
                      <li><a href="portfolio-details-light.html">Portfolio details light</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="dp-menu">
                      <li><a href="index.html">home dark</a></li>
                      <li><a href="index-light.html">home light</a></li>
                      <li><a href="service-details.html">service details dark</a></li>
                      <li><a href="service-details-light.html">service details light</a></li>
                      <li><a href="blog.html">Blog dark</a></li>
                      <li><a href="blog-light.html">Blog light</a></li>
                      <li><a href="blog-details.html">Blog details dark</a></li>
                      <li><a href="blog-details-light.html">Blog details light</a></li>
                    </ul>
                  </li>
                  <li><a href="blog.html">Blog</a></li>
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



          <!-- Blog Details section end -->
          <section class="blog__details__area pt-130 pb-60">
            <div class="container ptf-80">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="blog__details-top cf_parallax_image">
                    <img src="../assets/imgs/blog/blog-d-product.jpg" alt="Image" data-speed="0.9">
                  </div>

                  <div class="blog__details-wrap">
                    <div class="blog__details-info">
                      <h1 class="blog__details_title">Designing the perfect feature <br> comparison table</h1>
                      <ul>
                        <li class="author">
                          <img src="../assets/imgs/testimonial/client/1.png" alt="Thumbnail">
                          <div>
                            <span>Writen by</span>
                            <a href="#">Wolk Heyman</a>
                          </div>
                        </li>
                        <li>
                          <span>Category</span>
                          <a href="#">User Experience</a>
                        </li>
                        <li>
                          <span>Start Date</span>
                          <a href="javascript:void(0)">02/08/2019</a>
                        </li>
                      </ul>
                    </div>

                    <div class="blog__details">
                      <p>Roma Norte district, the possibility of acquiring a house with a garden in the
                        residential area of ​​San Jeronimo, in the south of the city, arises during the March 2020
                        confinement
                        visually restrained, but stylish. Informative and pleasant to use, with an elegant aftertaste of
                        a
                        serious financial institution.
                        Combined with elements of french typography and visually restrained.</p>
                      <h2>Deffination of UX</h2>
                      <p>Minimalism combined with elements of french typography and brutalism helped us to
                        realize the site exactly as we imagined with the client at the beginning: visually restrained,
                        but
                        stylish. Informative and pleasant to use, with an elegant aftertaste of a serious financial
                        institution.
                        Combined with elements of french typography and visually restrained, but stylish. Informative
                        and
                        pleasant to use, with an elegant aftertaste of a serious financial institutional client, and
                        close
                        collaboration.</p>
                      <ul>
                        <li>+ Advantage</li>
                        <li>+ Accomplished</li>
                        <li>+ Marketplace startups</li>
                        <li>+ SaaS startups</li>
                      </ul>
                      <img src="../assets/imgs/blog/blog-d-product-2.jpg" alt="Thumbnail">
                      <h2>Sensivity</h2>
                      <p>The basic idea was to find a balance between the thin, wispy sans-serif used to
                        indicate a ‘futuristic‘ tone, and a bold, masculine font synonymous with ‘construction‘. We came
                        up
                        with something in the middle, leaning towards lighter-weighted fonts, but still with a hint of
                        that
                        blocky ‘construction’ vibe. We use Chaney for general display and when we want to drive
                        attention
                        to
                        the content, and the technical and geometric Sora font for the body copy and paste overall
                        hierachy.
                      </p>
                      <p>In order to explain Impro’s key benefits at the Collision conference, we created a video
                        presentation and adapted all their marketing and sales collateral to the new brand look and
                        feel.
                        We
                        are currently working on the redesign of their old web application. Stay tuned to see the final
                        results.</p>
                    </div>

                    <div class="blog__tag">
                      <p class="blog__tag-title">Tags : </p>
                      <ul>
                        <li><a href="#">design,</a></li>
                        <li><a href="#">system,</a></li>
                        <li><a href="#">hierachy</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Blog Details section start -->


          <!-- Recent Blog section start -->
          <section class="blog__related pb-120">
            <div class="container">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper pt-120">
                    <h2 class="sec-sub-title mb-20">Blog</h2>
                    <h3 class="sec-title">Releted Articles</h3>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xx-l-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="has_fade_anim" data-fade-from="left">
                    <div class="pdesigner-blog__item pdesigner__blog-hover">
                      <a href="blog-details.html"><img src="../assets/imgs/blog/4.jpg" alt="Blog Thumbnail"></a>
                      <div class="pdesigner-blog__content">
                        <div>
                          <ul class="pdesigner-blog__meta">
                            <li><a href="#">Ui design</a></li>
                            <li><a href="#">03 May 2019</a></li>
                          </ul>
                          <a href="blog-details.html">
                            <h4 class="pdesigner-blog__title">A Sneak-Peek Inside The Southeast Asian Web Community</h4>
                          </a>
                          <a href="blog-details.html" class="pdesigner-blog__link">Read More <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <div class="col-xx-l-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="has_fade_anim" data-fade-from="left" data-delay="0.8">
                    <div class="pdesigner-blog__item pdesigner__blog-hover">
                      <a href="blog-details.html"><img src="../assets/imgs/blog/8.jpg" alt="Blog Thumbnail"></a>
                      <div class="pdesigner-blog__content">
                        <div>
                          <ul class="pdesigner-blog__meta">
                            <li><a href="#">Ui design</a></li>
                            <li><a href="#">03 May 2019</a></li>
                          </ul>
                          <a href="blog-details.html">
                            <h4 class="pdesigner-blog__title">A Sneak-Peek Inside The Southeast Asian Web Community</h4>
                          </a>
                          <a href="blog-details.html" class="pdesigner-blog__link">Read More <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <div class="col-xx-l-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="has_fade_anim" data-fade-from="left" data-delay="1.1">
                    <div class="pdesigner-blog__item pdesigner__blog-hover">
                      <a href="blog-details.html"><img src="../assets/imgs/blog/9.jpg" alt="Blog Thumbnail"></a>
                      <div class="pdesigner-blog__content">
                        <div>
                          <ul class="pdesigner-blog__meta">
                            <li><a href="#">Ui design</a></li>
                            <li><a href="#">03 May 2019</a></li>
                          </ul>
                          <a href="blog-details.html">
                            <h4 class="pdesigner-blog__title">A Sneak-Peek Inside The Southeast Asian Web Community</h4>
                          </a>
                          <a href="blog-details.html" class="pdesigner-blog__link">Read More <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </section>
          <!-- Recent Blog section end -->


        </main>


        <!-- Footer section start -->
        <footer class="footer__area pt-50 pb-50">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <ul class="footer__social-2">
                  <li><a href="#" class="btn-hover-mask"><span><i class="fa-brands fa-facebook-f"></i></span>
                      facebook</a></li>
                  <li><a href="#" class="btn-hover-mask">
                      <span><i class="fa-brands fa-twitter"></i></span> Twitter
                    </a></li>
                  <li><a href="#" class="btn-hover-mask"><span><i class="fa-brands fa-instagram"></i></span>
                      Instagram</a></li>
                  <li><a href="#" class="btn-hover-mask"><span><i class="fa-brands fa-dribbble"></i></span>
                      Dribbble</a></li>
                  <li><a href="#" class="btn-hover-mask"><span><i class="fa-brands fa-linkedin"></i></span>
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