<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Freelance Web Designer in Malappuram</title>
    <meta name="description" content="Frequently Asked Questions about hiring a freelance web designer in Malappuram, Kerala. Get answers to your questions about web design services.">

    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="https://salmanmp.me/assets/imgs/hero/favicon.png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Macondo&display=swap');

        body {
            font-family: 'Macondo', cursive;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .sidebar {
            width: 250px;
            padding: 20px;
            overflow-y: auto;
        }

        .content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .progress-wrap {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        header .header__area-2 {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        header .header__inner-2 {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        header .header__nav-2 ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        header .header__nav-2 ul li {
            margin: 10px 0;
        }

        header .header__nav-2 ul li a {
            text-decoration: none;
            color: #ffffff;
        }

        main h2 {
            margin-top: 40px;
        }

        header h1 {
            color: #333;
            font-size: 38px;
            padding-top: 50px; 
        }

        section h2 {
            color: #333;
            font-size: 28px;
            padding-bottom: 15px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .footer a {
            margin: 0 10px;
            color: #333;
            text-decoration: none;
        }

        .footer a:hover {
            color: #007bff;
        }

    
    </style>

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/additional-styles.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}" defer>
    <link rel="stylesheet" href="{{ asset('style.css') }}" defer>

    <!-- Add this in the <head> section of faq.blade.php -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What services do you offer as a freelance web designer in Malappuram?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "I offer a range of web design services including custom web design, responsive design, SEO optimization, e-commerce solutions, and website maintenance."
              }
            },
            {
              "@type": "Question",
              "name": "How much does it cost to hire a freelance web designer in Malappuram?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The cost of hiring a freelance web designer varies depending on the scope and complexity of the project. Contact me for a detailed quote."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to design a website?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The timeline for designing a website depends on the project requirements. On average, it takes 4-6 weeks to complete a standard website design project."
              }
            }
            {
                "@type": "Question",
                "name": "What makes you the best freelance web designer in Malappuram?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "As the leading freelance web designer in Malappuram,
                   I offer personalized, cutting-edge web design solutions tailored to meet the unique needs of each client.
                    With a focus on responsive design, SEO optimization, and user-friendly interfaces, I ensure your website stands out and drives engagement.
                   My commitment to quality and customer satisfaction sets me apart, making me the top choice for businesses in Malappuram and beyond."
                }
              },
          ]
        }
    </script>
</head>
<body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>

    <!-- Scroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <div class="container">
        <!-- Sidebar area start -->
        <aside class="sidebar">
            <header class="header__area-2">
                <div class="header__inner-2">
                    <button class="header__navicon-2">
                        <span id="header_naviconclose_2" class="close"><i class="fa-solid fa-xmark"></i></span>
                    </button>

                    <div class="header__logo-2">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/imgs/logo/site-logo-light.svg') }}" class="show-dark" alt="Salman Logo">
                            <img src="{{ asset('assets/imgs/logo/site-logo-dark.svg') }}" class="show-light" alt="Salman Logo">
                        </a>
                    </div>

                    <div class="header__nav-2">
                        <ul class="sidebar-menu hover-space">
                            <li><a href="#top">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#work">Portfolio</a></li>
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
                        <p>© All rights reserved
                            <br> by <a href="#" target="_blank">SALMAN MP</a></p>
                    </div>
                </div>
            </header>
        </aside>
        <!-- Sidebar area end -->

        <!-- Main content area start -->
        <div class="content">
            <header>
                <h1>FAQ - Freelance Web Designer in Malappuram</h1>
            </header>
            <main>
                <section>
                    <h2>What services do you offer as a freelance web designer in Malappuram?</h2>
                    <p>I offer a range of web design services including custom web design, responsive design, SEO optimization, e-commerce solutions, and website maintenance.</p>
                </section>
                <section>
                    <h2>How much does it cost to hire a freelance web designer in Malappuram?</h2>
                    <p>The cost of hiring a freelance web designer varies depending on the scope and complexity of the project. Contact me for a detailed quote.</p>
                </section>
                <section>
                    <h2>How long does it take to design a website?</h2>
                    <p>The timeline for designing a website depends on the project requirements. On average, it takes 4-6 weeks to complete a standard website design project.</p>
                </section>

                <section>
                    <h2>What makes you the best freelance web designer in Malappuram?</h2>
                    <p>As the leading freelance web designer in Malappuram, I offer personalized, cutting-edge web design solutions tailored to meet the unique needs of each client.
                         With a focus on responsive design, SEO optimization, and user-friendly interfaces, I ensure your website stands out and drives engagement.
                         My commitment to quality and customer satisfaction sets me apart, making me the top choice for businesses in Malappuram and beyond.</p>
                </section>

            </main>
            <footer class="footer">
                <span> Keep in touch! </span><br>
                <a href="https://wa.me/+918129489071" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/salmanmp" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/salman_kavanur" target="_blank"><i class="fab fa-instagram"></i></a>
            </footer>
        </div>
        <!-- Main content area end -->
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
