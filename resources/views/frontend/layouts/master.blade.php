@php
    $generalSetting = \App\Models\GeneralSetting::first();
    $seoSetting = \App\Models\SeoSetting::first();
@endphp
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio | @yield('title')</title>
  <!-- Include CSS Stylesheet -->
  @include('frontend.layouts.inc.style')

  <style>

     * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: #f9f9f9;
        }

        header {
            background: #ffffff;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: bold;
        }

        .logo-icon {
           
          
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: #000;
            font-weight: 500;
        }

        .hero {
            background: #007BDB;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .hero button {
            padding: 10px 20px;
            font-size: 16px;
            background: white;
            color: #007BDB;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .section {
            padding: 50px 40px;
            background: white;
            text-align: center;
        }

        .section h2 {
            font-size: 28px;
            margin-bottom: 30px;
        }

       .services {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    padding-bottom: 10px;
    scrollbar-width: thin;
    scroll-behavior: smooth;
}
.services::-webkit-scrollbar {
    height: 8px;
}
.services::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
}

        .service img {
            width: 40px;
            margin-bottom: 15px;
        }

        .portfolio {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .portfolio div {
            background: #e0e0e0;
            width: 150px;
            height: 100px;
            border-radius: 8px;
        }

        .features {
            display: flex;
            justify-content: space-around;
            text-align: left;
            margin-top: 40px;
        }

        .features ul {
            list-style: none;
        }

        .features ul li::before {
            content: "✔️";
            margin-right: 10px;
            color: #007BDB;
        }

        .testimonial {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 6px;
            margin-top: 20px;
        }

        .cta {
            margin-top: 50px;
            text-align: center;
        }

        .cta button {
            padding: 10px 25px;
            font-size: 16px;
            background: #007BDB;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .services, .features {
                flex-direction: column;
                align-items: center;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            .portfolio {
                flex-direction: column;
                align-items: center;
            }
        }
           #contact-fab-group {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 12px;
    }
    .fab-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #007bff;
        color: #fff;
        border: none;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        cursor: pointer;
        transition: background 0.2s, opacity 0.2s, transform 0.2s;
        opacity: 1;
    }
    .fab-btn:hover {
        background: #0056b3;
    }
    .fab-btn.fab-whatsapp {
        background: #25d366;
    }
    .fab-btn.fab-whatsapp:hover {
        background: #128c7e;
    }
    .fab-btn.fab-hidden {
        opacity: 0;
        pointer-events: none;
        transform: scale(0.8);
    }
    #contact-fab-actions {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 12px;
        margin-bottom: 8px;
        transition: opacity 0.2s, transform 0.2s;
    }
    #contact-fab-actions.fab-hidden {
        opacity: 0;
        pointer-events: none;
        transform: scale(0.8);
    }
    #contact-page {
        display: none;
    }
    #contact-page.active {
        display: block;
        animation: fadeInUp 0.4s;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px);}
        to { opacity: 1; transform: translateY(0);}
    }
  
  
  
  </style>





</head>

<body>
  <div class="preloader">
    <img src="{{ asset('frontend/assets') }}/images/" alt="">
  </div>

  <!-- include header -->
   @if(Request::is('/'))
    <div class="container">
    <!-- Header -->
        <a class="navbar-brand" href="/">

     <header>
    <div class="logo">
        <div class="logo-icon">
            <img src="{{ asset('frontend/assets/images/Screenshot_20250327_230626.jpg') }}" alt="Logo" style="height: 30px;">
        </div>
        <span><span style="color: #00aaff;">WE</span>-Hance</span>
    </div>
</a>

  
  <a class="navbar-brand ms-2" href="/"></a>
   </div>
    <nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
  <ul class="navbar-nav ms-auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="far fa-bars"></i>
    </button>
             <li>
          <a class="nav-link active" aria-current="page" href="#home-page">Home</a>
        </li>
            <li><a href="#services" class="hover:text-blue-500">Services</a></li>
            <li class="nav-item">
            <a class="nav-link" href="#portfolio-page">Portfolio <i class="fas fa-angle-down"></i></a>
            <ul class="sub_menu">
              <li><a href="/portfolio">All Portfolio</a></li>
            </ul>
          </li>

       <li class="nav-item">
            <a class="nav-link" href="#blog-page">Blog <i class="fas fa-angle-down"></i></a>
            <ul class="sub_menu">
              <li><a href="{{route('blog')}}">All Blog</a></li>
            </ul>
          </li>
        <li >
          <a class="nav-link" href="#about-page">About</a>
        </li>
      <!--  <li >
          <a class="nav-link" href="#contact-page">Contact</a>
        </li>-->
        </ul>
    </nav>
</header>
@else
@include('frontend.layouts.inc.navbar')
@endif

  <!-- include Navbar -->
   <!--
@if(Request::is('/'))
<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset($generalSetting->logo)}}" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="far fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home-page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-page">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio-page">Portfolio <i class="fas fa-angle-down"></i></a>
            <ul class="sub_menu">
              <li><a href="/portfolio">All Portfolio</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills-page">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog-page">Blog <i class="fas fa-angle-down"></i></a>
            <ul class="sub_menu">
              <li><a href="{{route('blog')}}">All Blog</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-page">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@else
@include('frontend.layouts.inc.navbar')
@endif -->





 <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">

    @yield('content')

    <!-- Include Footer -->
  <!-- @include('frontend.layouts.inc.footer') -->
  </div>

  <!-- Include JS script -->
  @include('frontend.layouts.inc.script')


  <!-- Floating Contact Us & WhatsApp Button -->


<div id="contact-fab-group">
    <div id="contact-fab-actions" class="fab-hidden">
        <button id="contact-fab-email" class="fab-btn" title="Contact Us">
            <i class="fal fa-envelope"></i>
        </button>
        <button id="whatsapp-fab" class="fab-btn fab-whatsapp" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </button>
    </div>
    <button id="contact-fab-main" class="fab-btn" title="Contact Options" type="button">
        <i class="fal fa-comment-dots"></i>
    </button>
</div>

<script>
    $(function(){
        let expanded = false;
        $('#contact-fab-main').on('click', function(e){
            e.stopPropagation();
            expanded = !expanded;
            $('#contact-fab-actions').toggleClass('fab-hidden', !expanded);
        });

        // Hide actions when clicking outside
        $(document).on('click', function(e){
            if(expanded && !$(e.target).closest('#contact-fab-group').length){
                $('#contact-fab-actions').addClass('fab-hidden');
                expanded = false;
            }
        });

        $('#contact-fab-email').on('click', function(){
            $('#contact-page').addClass('active');
            $('html, body').animate({
                scrollTop: $('#contact-page').offset().top - 80
            }, 500);
            $('#contact-fab-actions').addClass('fab-hidden');
            expanded = false;
        });
        $('#whatsapp-fab').on('click', function(){
            window.open('https://wa.me/+96176809258', '_blank');
            $('#contact-fab-actions').addClass('fab-hidden');
            expanded = false;
        });
    });
</script>
</body>

</html>
