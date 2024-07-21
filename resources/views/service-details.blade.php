<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Salman MP - Freelance Web Designer & Developer in Malappuram.
   Offering top-notch web design and digital marketing services in Malappuram.">

  <title>Freelance Web Designer & Developer in Malappuram - Salman MP </title>

  <link rel="canonical" href="{{ url()->current() }}" />

  <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">

  <!-- Fav Icon -->
 <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/favicon.png') }}">

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="https://salmanmp.me/assets/imgs/hero/favicon.png">


</head>


<body class="font-heading-estedad">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text="S" class="characters">S</span>
                <span data-text="A" class="characters">A</span>
                <span data-text="L" class="characters">L</span>
                <span data-text="M" class="characters">M</span>
                <span data-text="A" class="characters">A</span>
                <span data-text="N" class="characters">N</span>
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

  <!-- Offcanves start -->
  <div class="offcanvas__area">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasOne">
      <button class="offcanvas__close" data-bs-dismiss="offcanvas"><i class="fa-solid fa-xmark"></i></button>
      <div class="offcanvas__body">
        <div class="offcanvas__logo">
          <a href="index.html">
            <img src="{{ asset('assets/imgs/logo/site-logo-light.svg') }}" alt="Offcanvas Logo" class="show-dark">
            <img src="{{ asset('assets/imgs/logo/site-logo-dark.svg') }}" alt="Offcanvas Logo" class="show-light">
          </a>
          <p>Freelance Web Designer based in Malappuram with Extensive Experience in SEO, Digital Marketing, and Media Strategies.</p>
        </div>

        <div class="offcanvas__menu-area">
          <div class="offcanvas__menu-wrapper">
            <nav class="offcanvas__menu">
              <ul>
                <li><a href="{{ route('home') }}">home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Pages</a>
                  <ul>
                    <li> <a href="{{ route('home') }}">home <span class="new">light</span></a></li>
                    <li> <a href="#">Portfolio <span class="new">light</span></a></li>
                    <li><a href="#">blog <span class="new">light</span></a></li>
                  </ul>
                </li>
                <li><a href="#">Blog</a></li>
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
            
            <li><a href="https://www.linkedin.com/in/salmanmp/"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/salman_kavanur/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.behance.net/salmanmp"><i class="fa-brands fa-behance"></i></a></li>
            <li><a href="https://github.com/salmankavanur/"><i class="fa-brands fa-github"></i></a></li>
            
            
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
                <img src="{{ asset('assets/imgs/logo/site-logo-light_salman.png') }}" class="show-dark" alt="Site Logo">
                <img src="{{ asset('assets/imgs/logo/site-logo-dark.svg') }}" class="show-light" alt="Site Logo">
              </a>
            </div>
            <div class="header__nav">
              <nav class="main-menu">
                <ul>
                  <li><a href="{{ route('home') }}">home</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Portfolio</a>
                    <ul class="dp-menu">
                      <li><a href="#">Portfolios</a></li>
                    
                      <li><a href="#">Web Designing</a></li>
                      
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="dp-menu">
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li><a href="#">services</a></li>
                      <li><a href="#">Blogs</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog</a></li>
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


          <!-- Service details start  -->
          <section class="pt-190 pb-150">
            <div class="container">
              <div class="dancer__classDetailHero-wrapper">
                <h1 class="dancer__classDetailHero-title text-uppercase has_text_reveal_anim" data-on-scroll="0">Web Designing
                </h1>
                <h2 class="dancer__classDetailHero-dis text-uppercase has_text_reveal_anim" data-on-scroll="0">
                  & Development</h2>
                <div class="detail-thumb-anim cf_image mt-70 mb-60" style="height: 70vh;">
                  <img src="{{ asset('assets/imgs/portfolio/web-design.jpg') }}" alt="Responsive Web Design & SEO" data-speed="auto">
                </div>
                <div class="dancer__classDetailHero-content mb-60">
                  <h3 class="dancer__classDetailHero-title2 text-uppercase has_text_reveal_anim mb-30">
                    Consideration and <br> Approach
                  </h3>
                  <div class="cf_text dancer__classDetailHero-dis2">
                    <p>Being a web designer takes thinking, feeling, and acting like a designer.
                       I’ve been reflecting on what it means to be designerly, and by using six such skills and behaviors,
                        I can achieve the best results in my projects.</p>
                  </div>
                </div>
                <div class="dancer__classDetailHero-items">
                  <div class="dancer__classDetailHero-item">
                    <div class="dancer__classDetailHero-left">
                      <h3 class="dancer__classDetailHero-list text-uppercase">
                        01/ <span>RESEARCH AND DISCOVERY</span>
                      </h3>
                    </div>
                    <div class="dancer__classDetailHero-right">
                      <div class="cf_text">
                        <p>To start any project, I delve deep into research to understand the client’s needs, target audience, and industry trends.
                           Adapting the first rule of design,
                            my approach involves conducting comprehensive research and user interviews to
                             gather insights and ensure the design aligns with the client’s vision and user expectations.</p>
                      </div>
                      <ul class="dancer__classDetailHero-servicelist list-plus">
                        <li>User Research</li>
                        <li>Market Analysis</li>
                        <li>Competitive Analysis</li>
                      </ul>
                    </div>
                  </div>
                  <div class="dancer__classDetailHero-item">
                    <div class="dancer__classDetailHero-left">
                      <h3 class="dancer__classDetailHero-list text-uppercase">
                        02/ <span>PLANNING AND STRATEGY</span>
                      </h3>
                    </div>
                    <div class="dancer__classDetailHero-right cf_text">
                      <p>With the insights gathered, I create a detailed plan and strategy for the project. This phase involves defining the project scope,
                         setting goals, and creating a roadmap.
                         I ensure that the plan is aligned with the client’s objectives and provides a clear direction for the project.
                      </p>

                      <ul class="dancer__classDetailHero-servicelist list-plus">
                        <li>Project Planning</li>
                        <li>Goal Setting</li>
                        <li>Strategy Development</li>
                      </ul>

                    </div>
                  </div>
                  <div class="dancer__classDetailHero-item">
                    <div class="dancer__classDetailHero-left">
                      <h3 class="dancer__classDetailHero-list text-uppercase">
                        03/ <span>WIREFRAMING AND PROTOTYPING</span>
                      </h3>
                    </div>
                    <div class="dancer__classDetailHero-right">
                      <div class="cf_text">
                        <p>Before diving into the design, I create wireframes and prototypes to visualize the layout and functionality of the website.
                           This step allows me to experiment with different structures and user flows, ensuring that the design is intuitive and user-friendly.
                        </p>

                        <ul class="dancer__classDetailHero-servicelist list-plus">
                          <li>Wireframing</li>
                          <li>Prototyping</li>
                          <li>User Experience (UX) Design</li>
                        </ul>

                      </div>
                      <div class="dancer__classDetailHero-thumb1">
                        <img src="../assets/imgs/inner/dancer/detail-img.png" alt="img">
                      </div>
                    </div>
                  </div>
                  <div class="dancer__classDetailHero-item">
                    <div class="dancer__classDetailHero-left">
                      <h3 class="dancer__classDetailHero-list text-uppercase">
                        04/ <span>DESIGN AND STYLING</span>
                      </h3>
                    </div>
                    <div class="dancer__classDetailHero-right cf_text">
                      <p>At this stage, I bring the project to life with visually appealing designs.
                         Using tools like Adobe Creative Suite and Figma, I craft responsive and aesthetically pleasing designs that reflect the client’s brand identity.
                         I focus on creating a seamless and engaging user experience across all devices.</p>

                         <ul class="dancer__classDetailHero-servicelist list-plus">
                          <li>Graphic Design</li>
                          <li>Responsive Design</li>
                          <li>Adobe Suite</li>
                          <li>Figma</li>
                        </ul>

                    </div>
                  </div>


                  <div class="dancer__classDetailHero-item">
                    <div class="dancer__classDetailHero-left">
                      <h3 class="dancer__classDetailHero-list text-uppercase">
                        05/ <span>DEVELOPMENT AND IMPLEMENTATION</span>
                      </h3>
                    </div>
                    <div class="dancer__classDetailHero-right cf_text">
                      <p>With the design finalized, I move on to the development phase. Using technologies such as HTML, CSS, JavaScript,
                         and frameworks like Laravel and WordPress, I build the website, ensuring that it is fully functional, responsive,
                          and optimized for performance and SEO.</p>

                         <ul class="dancer__classDetailHero-servicelist list-plus">
                          <li>Front-End Development</li>
                          <li>HTML/CSS</li>
                          <li>JavaScript</li>
                          <li>WordPress</li>
                          <li>Laravel</li>
                          <li>SEO</li>
                        </ul>

                    </div>
                  </div>


                </div>
              </div>
            </div>
          </section>
          <!-- /Service details end  -->


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
