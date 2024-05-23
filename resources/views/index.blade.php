<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="INFO HTML5 Template">

  <title> Salman MP - Web and Graphic Designer </title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/favicon.png') }}">

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
          <span data-text="I" class="characters">S</span>
          <span data-text="N" class="characters">A</span>
          <span data-text="F" class="characters">L</span>
          <span data-text="O" class="characters">M</span>
          <span data-text="O" class="characters">A</span>
          <span data-text="O" class="characters">N</span>
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
      <button id="switcher_open" aria-label="switcher-open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close" aria-label="switcher-close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">mode</p>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="dark" aria-label="active">dark</button>
          <button data-mode="light" aria-label="light">light</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr" aria-label="ltr">LTR</button>
          <button data-mode="rtl" aria-label="rtl">RTL</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width" aria-label="full width">Full Width</button>
          <button data-mode="box-layout" aria-label="box-layout">Box Layout</button>
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


  <!-- overlay switcher close  -->
  <div class="overlay-switcher-close"></div>

  <!-- Header area start -->
  <header class="header__area-2">
    <div class="header__inner-2">
      <button class="header__navicon-2">
        <span id="header_naviconclose_2" class="close"><i class="fa-solid fa-xmark"></i></span>
      </button>

      <div class="header__logo-2">
        <a href="{{ route('home') }}">
          <img src="{{ asset('assets/imgs/logo/site-logo-light.png') }}" class="show-dark" alt="Site Logo">
          <img src="{{ asset('assets/imgs/logo/site-logo-dark.png') }}" class="show-light" alt="Site Logo">
        </a>
      </div>

      <div class="header__nav-2">
        <ul class="sidebar-menu hover-space">
          <li><a href="#top">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#work">WorkK</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#testimonial">Testimonial</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="header__search-2">
        <form action="#">
          <input type="text" placeholder="search">
          <button class="icon-search"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
      <div class="copyright">
        <p>© Alrights reserved <br> by <a href="#" target="_blank">SALMAN MP</a></p>
      </div>
    </div>
  </header>
  <!-- Header area end -->



  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

      <main class="sidebar-left">

<div class="pd-header">
  <a href="{{ url('/') }}">
    <img src="{{ asset('assets/imgs/logo/site-logo-light.png') }}" alt="Site Logo">
  </a>
  <button class="header__navicon-2">
    <img id="header_navicon_2" class="icon" src="{{ asset('assets/imgs/logo/menu-icon-white.png') }}" alt="Icon">
  </button>
</div>


          <!-- Hero section start -->
          <section class="pdesigner-hero__area" id="top">
            <div class="container g-0 line">
              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="pdesigner-hero__left">
                    <div class="pb-20">
                      <h1 class="typed_title has_fade_anim">Hi 🖐 I’m
                        <span id="typed_list">
                          <span>Salman</span>
                          <span>Web Designer</span>
                          <span>Graphics Designer</span>
                        </span>
                        <span id="typed"></span>
                      </h1>
                    </div>
                    <div class="pb-30">
                      <h2 class="pdesigner-hero__title has_text_move_anim" data-delay=".7">A Web &
                        <span>Graphics</span>
                        Designer
                      </h2>
                    </div>
                    <div class="cf_btn has_fade_anim" data-fade-from="top" data-delay="1" data-ease="bounce">
                    <a href="{{ route('portfolio') }}" class="btn-hover-mask" data-text="View My Works">View My Works</a>
                    </div>

                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="pdesigner-hero__right">
                    <div class="pdesigner-hero__text">
                      <div class="cf-image has_fade_anim " data-on-scroll="0" data-delay="1.2">
                      <img src="{{ asset('assets/imgs/shape/9.png') }}" alt="Shape Image" class="mb-30">
                      </div>
                      <div class="cf-text has_fade_anim" data-delay="1.2">
                        <p>A Freelance Web & Graphics Designer and Developer <span>based in Kerala, India</span>. I strives to build
                          immersive and beautiful web applications through carefully crafted user-centric design.</p>
                      </div>
                    </div>
                    <div class="pdesigner-hero__experience has_fade_anim" data-on-scroll="0" data-delay="2">
                      <div class="pdesigner-hero__social-wrapper">
                        <h3 class="follow-me">Follow Me</h3>
                        <ul class="pdesigner-hero__social">
                          <li><a href="https://www.linkedin.com/in/salmanmp/"><i class="fa-brands fa-linkedin"></i></a></li>
                          <li><a href="https://www.instagram.com/salman_kavanur/"><i class="fa-brands fa-instagram"></i></a></li>
                          <li><a href="https://www.behance.net/salmanmp"><i class="fa-brands fa-behance"></i></a></li>
                          <li><a href="https://github.com/salmankavanur/"><i class="fa-brands fa-github"></i></a></li>
                        </ul>
                      </div>
                      <div class="work-process">
                        <a href="https://www.youtube.com/watch?v=LckQ4VVjHDs" class="image-link video-popup">
                          <i class="fa-solid fa-play"></i>
                        </a>
                        <span>work <br> Process</span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="cf_image has_fade_anim hero-shape" data-on-scroll="0" data-delay="2.5" data-fade-from="right"
                data-fade-offset="100">
  <img src="{{ asset('assets/imgs/shape/8.png') }}" alt="Shape Image">
</div>

<div class="cf_image has_fade_anim hero-img" data-on-scroll="0" data-delay=".7" data-fade-offset="80"
                data-duration="3">
  <img src="{{ asset('assets/imgs/hero/2.png') }}" alt="Hero image">
</div>

</div>
</section>
<!-- Hero section end -->



          <!-- About section start -->
          <section class="pdesigner-about__top">
            <div class="container g-0 line">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row g-0">
                <div class="col-xxl-12">
                  <div class="pdesigner-about__top-content">
                    <div class="pb-30">
                      <h2 class="hero-title has_text_reveal_anim">Salman MP <br> Web & Graphics Designer Based in
                        Kerala, India
                      </h2>
                    </div>

                    <div class="pdesigner-counter__grid">
                      <div class="pdesigner-counter__item has_fade_anim" data-fade-from="right">
                        <div class="counter__item">
                          <div class="number">
                            <h3 class="count wc-counter">5K+</h3>
                          </div>
                          <div class="text">
                            <p>project <br>completed</p>
                          </div>
                        </div>
                      </div>
                      <div class="pdesigner-counter__item has_fade_anim" data-delay=".7" data-fade-from="right">
                        <div class="counter__item">
                          <div class="number">
                            <h3 class="count wc-counter">7+</h3>
                          </div>
                          <div class="text">
                            <p>Years of <br> experience</p>
                          </div>
                        </div>
                      </div>
                      <div class="pdesigner-counter__item has_fade_anim" data-delay="0.9" data-fade-from="right">
                        <div class="counter__item">
                          <div class="number">
                            <h3 class="count wc-counter">12+</h3>
                          </div>
                          <div class="text">
                            <p>Skills <br> Achieved</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="cf_btn wc-btn has_fade_anim" data-fade-from="top" data-delay="1" data-ease="bounce">
                      <a href="#" class="btn-hover-mask">dOWNLOAD cv <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            
            <div class="pdesigner-about__img cf_image">
  <img src="{{ asset('assets/imgs/about/2.png') }}" alt="Author Image">
</div>

          </section>
          <!-- About section end -->


          <!-- Resume section start -->
          <section class="pdesigner-resume__area" id="about">
            <div class="pdesigner-resume__content">
              <div class="container g-0 line pt-130">
                <div class="line-col-3">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                      <div class="pb-20">
                        <h2 class="sec-sub-title has_char_anim">Resume</h2>
                      </div>
                      <h3 class="sec-title has_text_reveal_anim">My Resume</h3>
                    </div>
                  </div>

                  <div class="col-xxl-12">
                    <div class="developer-resume__tab-wrapper">
                      <div class="developer-resume__tab-menu">
                        <ul>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.5"><a href="#" class="active"
                              data-rel="resume-tab-1">about me</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.65"><a href="#"
                              data-rel="resume-tab-2" class="">experience</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="0.90"><a href="#"
                              data-rel="resume-tab-3" class="">education</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="1.05"><a href="#"
                              data-rel="resume-tab-4" class="">skills</a></li>
                          <li class="has_fade_anim" data-fade-from="left" data-delay="1.2"><a href="#"
                              data-rel="resume-tab-5" class="">awards</a></li>
                        </ul>
                      </div>

                      <div class="developer-resume__tab-list">
                        <div class="developer-resume-tab-box" id="resume-tab-1" style="display:block;">
                          <div class="developer-about__area">
                            <div class="developer-about__content">
                              <h2 class="developer-about__title has_text_reveal_anim">Product Designer</h2>
                              <div class="cf-text has_text_move_anim">
                                <p>Hi, my name is <span>Salman MP</span> and I began using WordPress when first began.
                                  spent most of
                                  my waking hours for the last ten years designing, programming and operating WordPress
                                  sites go beyond with exclusive designer.</p>
                              </div>
                              <ul class="about__bio has_text_move_anim">
                                <li>Name <span>:</span> <strong>Salman MP</strong></li>
                                <li>Nationality <span>:</span> <strong>Indian</strong></li>
                                <li>Phone <span>:</span> <strong>+918129489071</strong></li>
                                <li>Email <span>:</span> <strong>hello@salmanmp.me</strong></li>
                                <li>Experience <span>:</span> <strong>7+ years</strong></li>
                                <li>Freelance <span>:</span> <strong>Available</strong></li>
                                <li>Skype <span>:</span> <strong>salmanmp</strong></li>
                                <li>Language <span>:</span> <strong>Malayalam, English</strong></li>
                              </ul>
                            </div>
                            <div class="developer-about__img">
  <div class="cf_image has_fade_anim">
    <img src="{{ asset('assets/imgs/about/1.png') }}" alt="About Me" class="about-me">
  </div>
  <div class="cf_image has_fade_anim">
    <img src="{{ asset('assets/imgs/shape/3.png') }}" alt="Shape Image" class="about-shape-1">
  </div>
  <div class="cf_image has_fade_anim">
    <img src="{{ asset('assets/imgs/shape/4.png') }}" alt="Shape Image" class="about-shape-2">
  </div>
</div>


                            </div>
                          </div>
                        </div>

                        <div class="developer-resume-tab-box" id="resume-tab-2">
                          <div class="developer-experience__area">
                            <div class="experience__grid">
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="developer-resume-tab-box" id="resume-tab-3">
                          <div class="developer-experience__area">
                            <div class="experience__grid">
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                              <div class="experience__item">
                                <h2 class="exp-time"><span><i class="fa-regular fa-calendar-days"></i></span> 2017 -
                                  2019
                                </h2>
                                <h3 class="exp-title">Senior UI Designer</h3>
                                <h4 class="company">Historian</h4>
                                <p>Owing to advancements in product other designer technologies, chatbots have increased
                                  into greater popularity in the past few years.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="developer-resume-tab-box" id="resume-tab-4">
                          <div class="developer-skill__grid">
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="95">Figma</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="80">Adobe XD</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="85">Sketch</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">Prototype</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">WrodPress</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">React JS</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">Laravel</h3>
                            </div>
                            <div class="progress__item">
                              <h3 class="progress__label" data-width="75">WIrframe</h3>
                            </div>
                          </div>
                        </div>

                        <div class="developer-resume-tab-box" id="resume-tab-5">
                          <div class="developer-award__grid">
                            <div class="award__item">
                              <h2 class="award__date">01 <span>2018</span></h2>
                              <img src="{{ asset('assets/imgs/award/1.png') }}" alt="Award Image" class="show-dark">
                              <img src="{{ asset('assets/imgs/award/w-black.png') }}" alt="Award Image" class="show-light">

                              <h3 class="award__title">01x Developer Award</h3>
                              <h4 class="award__status">Nominee</h4>
                            </div>
                            <div class="award__item">
                              <h2 class="award__date">02 <span>2019</span></h2>
                              <img src="{{ asset('assets/imgs/award/2.png') }}" alt="Award Image" class="show-dark">
                              <img src="{{ asset('assets/imgs/award/Webby_Awards.png') }}" alt="Award Image" class="show-light">

                              <h3 class="award__title">02x Developer Award</h3>
                              <h4 class="award__status">winner</h4>
                            </div>
                            <div class="award__item">
                              <h2 class="award__date">03 <span>2021</span></h2>
                              <img src="{{ asset('assets/imgs/award/3.png') }}" alt="Award Image" class="show-dark">
                              <img src="{{ asset('assets/imgs/award/Webby_Awards.png') }}" alt="Award Image" class="show-light">

                              <h3 class="award__title">03x Developer Award</h3>
                              <h4 class="award__status">winner</h4>
                            </div>
                            <div class="award__item">
                              <h2 class="award__date">04 <span>2022</span></h2>
                              <img src="{{ asset('assets/imgs/award/4.png') }}" alt="Award Image" class="show-dark">
                              <img src="{{ asset('assets/imgs/award/4-dark.png') }}" alt="Award Image" class="show-light">

                              <h3 class="award__title">05x Developer Award</h3>
                              <h4 class="award__status">Ruuners Up</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- About section end -->


          <!-- Portfolio section end -->
          <section class="pdesigner-portfolio__area" id="work">
            <div class="container line pt-120 pb-130">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    <div class="pb-20">
                      <h2 class="sec-sub-title has_char_anim">Portfolio</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">Selected Work</h3>
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

                        <img src="{{ asset('assets/imgs/portfolio/3.jpg') }}" alt="Portfolio Thumbnail">

                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a>
                            </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item large mix development">
                        <a href="{{ route('portfolio-details') }}">
                          <img src="{{ asset('assets/imgs/portfolio/4.jpg') }}" alt="Portfolio Thumbnail">

                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a>
                            </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix branding">
                        <a href="{{ route('portfolio-details') }}">
                        <img src="{{ asset('assets/imgs/portfolio/5.jpg') }}" alt="Portfolio Thumbnail">

                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a>
                            </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="{{ route('portfolio-details') }}">
                        <img src="{{ asset('assets/imgs/portfolio/6.jpg') }}" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a>
                            </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix creative">
                        <a href="">
                        <img src="{{ asset('assets/imgs/portfolio/7.jpg') }}" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a>
                            </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item large mix branding">
                        <a href="">
                        <img src="{{ asset('assets/imgs/portfolio/8.jpg') }}" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a>
                            </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="pdesigner-portfolio__item mix web-design">
                        <a href="">
                        <img src="{{ asset('assets/imgs/portfolio/9.jpg') }}" alt="Portfolio Thumbnail">
                        </a>
                        <div class="pdesigner-portfolio__content">
                          <ul>
                            <li><a href="#" class="pdesigner-portfolio__category">UI Design</a>
                            </li>
                            <li><a href="{{ route('portfolio-details') }}" class="pdesigner-portfolio__title">User Experience</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xxl-12">
                  <div class="cf_btn wc-btn has_fade_anim" data-fade-from="top" data-ease="bounce">
                    <a href="{{ route('portfolio') }}" class="btn-hover-mask">Load more works <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Portfolio section start -->


          <!-- Service section start -->
          <section class="pdesigner-service__area" id="service">
            <div class="container g-0 line pt-120">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    <div class="pb-20">
                      <h2 class="sec-sub-title has_char_anim">Service</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">My Expertise <br> Area</h3>
                  </div>
                </div>
              </div>
              <div class="pdesigner-service__list">
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="expertise-element has_fade_anim">
                      <a href="{{ route('service-details') }}">
                        <div class="pdesigner-service__item">
                          <h2 class="pdesigner-service__number">01</h2>
                          <h3 class="pdesigner-service__title">Interaction <br> Design</h3>
                          <p>Owing to tremendous advancements in machine learning and other technology chatbots have the
                            year.</p>
                          <ul class="list-plus">
                            <li>UI/UX Design</li>
                            <li>Research</li>
                            <li>Mobile & Web App</li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <div class="expertise-element has_fade_anim">
                      <a href="{{ route('service-details') }}">
                        <div class="pdesigner-service__item">
                          <h2 class="pdesigner-service__number">02</h2>
                          <h3 class="pdesigner-service__title">Digital <br> Marketing</h3>
                          <p>Owing to tremendous advancements in machine learning and other technology chatbots have the
                            year.</p>
                          <ul class="list-plus">
                            <li>UI/UX Design</li>
                            <li>Research</li>
                            <li>Mobile & Web App</li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <div class="expertise-element has_fade_anim">
                      <a href="{{ route('service-details') }}">
                        <div class="pdesigner-service__item">
                          <h2 class="pdesigner-service__number">03</h2>
                          <h3 class="pdesigner-service__title">Brand <br> identity</h3>
                          <p>Owing to tremendous advancements in machine learning and other technology chatbots have the
                            year.</p>
                          <ul class="list-plus">
                            <li>UI/UX Design</li>
                            <li>Research</li>
                            <li>Mobile & Web App</li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <div class="expertise-element has_fade_anim">
                      <a href="{{ route('service-details') }}">
                        <div class="pdesigner-service__item">
                          <h2 class="pdesigner-service__number">04</h2>
                          <h3 class="pdesigner-service__title">Web <br> Development</h3>
                          <p>Owing to tremendous advancements in machine learning and other technology chatbots have the
                            year.</p>
                          <ul class="list-plus">
                            <li>UI/UX Design</li>
                            <li>Research</li>
                            <li>Mobile & Web App</li>
                          </ul>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Service section end -->


          <!-- Brand section start -->
          <section class="pdesigner-brand__area">
            <div class="container g-0 line pt-130 pb-130">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="pdesigner-brand__title-pb">
                    <h2 class="brand__title has_word_anim">Worked more than 50 global largest brands</h2>
                  </div>
                </div>
                <div class="col-xxl-12">
                  <div class="brand_logo_slider-width">
                    <div class="swiper brand_logo_slider" data-fade-from="right" data-fade-offset="150"
                      data-autoPlay="true" data-sliderSpeed="5000">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="brand__logo">
                          <img src="{{ asset('assets/imgs/brand/1.png') }}" alt="Brand Logo">

                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                          <img src="{{ asset('assets/imgs/brand/2.png') }}" alt="Brand Logo">

                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                          <img src="{{ asset('assets/imgs/brand/3.png') }}" alt="Brand Logo">

                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                          <img src="{{ asset('assets/imgs/brand/4.png') }}" alt="Brand Logo">

                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                          <img src="{{ asset('assets/imgs/brand/5.png') }}" alt="Brand Logo">

                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="brand__logo">
                          <img src="{{ asset('assets/imgs/brand/4.png') }}" alt="Brand Logo">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Brand section end -->


          <!-- Testimonial section start -->
          <section class="pdesigner-testimonial__area" id="testimonial">
            <div class="container g-0 line pt-120 pb-120">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    <div class="pb-20">
                      <h2 class="sec-sub-title has_word_anim">Testimonials</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">Clents Feedback</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="developer-testimonial__slider-wrapper">
                    <div class="swiper developer-testimonial__slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                            <div class="cf_image has_fade_anim" data-fade-from="in" data-ease="bounce">
                            
                            <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">

                            </div>

                            <div class="cf_text has_fade_anim">
                              <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                                was able to grasp the concept that was intended and helped me decide on clean and
                                beautiful
                                presentation guy. </p>
                            </div>
                            <h3 class="client-name has_char_anim">Mukkher Halk</h3>
                            <h4 class="client-role has_char_anim">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                          <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">

                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                          <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">

                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                          <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">

                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="developer-testimonial__slide">
                          <img src="{{ asset('assets/imgs/testimonial/client/1.png') }}" alt="Client Image">
                            <p>Joya was fantastic with being responsive, professional, knowledgeable, and skilled. He
                              was
                              able to grasp the concept that was intended and helped me decide on clean and beautiful
                              presentation guy. </p>
                            <h3 class="client-name">Mukkher Halk</h3>
                            <h4 class="client-role">CEO, Admand</h4>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="btn-swiper btn-next"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="btn-swiper btn-prev"><i class="fa-solid fa-arrow-left"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Testimonial section end -->


          <!-- Blog section start -->
          <section class="pdesigner-blog__area" id="blog">
            <div class="container g-0 line pb-130">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    <div class="pb-20">
                      <h2 class="sec-sub-title has_char_anim">Blog</h2>
                    </div>
                    <h3 class="sec-title has_text_reveal_anim">Recent Blog</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xx-l-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="has_fade_anim" data-fade-from="left">
                    <div class="pdesigner-blog__item pdesigner__blog-hover">
                      <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/imgs/blog/4.jpg') }}" alt="Blog Thumbnail">
</a>
                      <div class="pdesigner-blog__content">
                        <div>
                          <ul class="pdesigner-blog__meta">
                            <li><a href="#">Ui design</a></li>
                            <li><a href="#">03 May 2019</a></li>
                          </ul>
                          <a href="{{ route('blog-details') }}">
                            <h4 class="pdesigner-blog__title">A Sneak-Peek Inside The Southeast Asian Web Community</h4>
                          </a>
                          <a href="{{ route('blog-details') }}" class="pdesigner-blog__link">Read More <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <div class="col-xx-l-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="has_fade_anim" data-fade-from="left" data-delay="0.8">
                    <div class="pdesigner-blog__item pdesigner__blog-hover">
                      <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/imgs/blog/8.jpg') }}" alt="Blog Thumbnail">
</a>
                      <div class="pdesigner-blog__content">
                        <div>
                          <ul class="pdesigner-blog__meta">
                            <li><a href="#">Ui design</a></li>
                            <li><a href="#">03 May 2019</a></li>
                          </ul>
                          <a href="{{ route('blog-details') }}">
                            <h4 class="pdesigner-blog__title">A Sneak-Peek Inside The Southeast Asian Web Community</h4>
                          </a>
                          <a href="{{ route('blog-details') }}" class="pdesigner-blog__link">Read More <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <div class="col-xx-l-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="has_fade_anim" data-fade-from="left" data-delay="1.1">
                    <div class="pdesigner-blog__item pdesigner__blog-hover">
                      <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/imgs/blog/9.jpg') }}" alt="Blog Thumbnail">
</a>
                      <div class="pdesigner-blog__content">
                        <div>
                          <ul class="pdesigner-blog__meta">
                            <li><a href="#">Ui design</a></li>
                            <li><a href="#">03 May 2019</a></li>
                          </ul>
                          <a href="{{ route('blog-details') }}">
                            <h4 class="pdesigner-blog__title">A Sneak-Peek Inside The Southeast Asian Web Community</h4>
                          </a>
                          <a href="{{ route('blog-details') }}" class="pdesigner-blog__link">Read More <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </section>
          <!-- Blog section end -->


          <!-- Contact section start -->
          <section class="pdesigner-contact__area" id="contact">
            <div class="container g-0 line pt-130 pb-130">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
              <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                  <div class="pdesigner-contact__left">
                    <div class="sec-title-wrapper">
                      <div class="pb-20">
                        <h2 class="sec-sub-title">Contact</h2>
                      </div>
                      <h3 class="sec-title">Get in Touch</h3>
                      <p>Don’t be afraid man! Just <br> say hello</p>
                    </div>
                    <div class="pdesigner-contact__grid">
                      <div class="pdesigner-contact__type">
                        <div class="icon">
                          <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                          <h4 class="pdesigner-contact__name">Phone</h4>
                          <a href="tel:02251398203">+(02+ 251 398 203)</a>
                        </div>
                      </div>
                      <div class="pdesigner-contact__type">
                        <div class="icon">
                          <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        <div>
                          <h4 class="pdesigner-contact__name">Email</h4>
                          <a href="mailto:info@example.com">info@example.com</a>
                        </div>
                      </div>
                      <div class="pdesigner-contact__type">
                        <div class="icon">
                          <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                          <h4 class="pdesigner-contact__name">Address</h4>
                          <p>Graaf Florisstraat 22A, 3021 CH <br>Burline, Germany</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                  <div class="pdesigner-contact__right">
                    <div class="pdesigner-contact__form">
                      <form action="#">
                        <div class="input-item">
                          <p>Name</p>
                          <input type="text" placeholder="Your name" name="name">
                        </div>
                        <div class="input-item">
                          <p>Email</p>
                          <input type="email" placeholder="Your email" name="email">
                        </div>
                        <div class="input-item">
                          <p>Phone (Optional)</p>
                          <input type="text" placeholder="Your phone" name="phone">
                        </div>
                        <div class="input-item">
                          <p>Subject</p>
                          <input type="text" placeholder="Your subject" name="subject">
                        </div>
                        <div class="input-item full">
                          <p>Message</p>
                          <textarea name="message" placeholder="Type your message..."></textarea>
                        </div>
                        <div class="input-item submit">
                          <button type="submit" class="btn-hover-mask">
                            submit <i class="fa-solid fa-arrow-right"></i>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Contact section end -->


          <!-- Footer section start -->
          <footer class="footer__area-2">
            <div class="container g-0 pb-90 line">
              <div class="line-col-3">
                <div></div>
                <div></div>
                <div></div>
              </div>
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


        </main>

      </div>
    </div>
  </div>



<!-- All JS files -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
<script src="{{ asset('assets/js/typed.js') }}"></script>
<script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/progressbar.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/beforeafter.jquery-1.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/basictable.min.js') }}"></script>
<script src="{{ asset('assets/js/backToTop.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/error-handling.js') }}"></script>
<script src="{{ asset('assets/js/offcanvas.js') }}"></script>
<script src="{{ asset('assets/js/wc-cursor.js') }}"></script>




</body>

</html>
