<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>TFA – Tashkent Football  Academy</title>
     <meta name="description" content="Cамая крупная футбольная школа в городе Ташкент.
     По состоянию на май 2019 в нашей школе занимается более 560 детей возрасте от 3 до 16 лет.">
    <!-- title-->
    <!-- title the end-->
    <!-- all css files goes here-->
    <link rel="stylesheet" href="/css/slick-theme.css"/>
    <link href="/css/slick.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link href="/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/jquery-ui.css"/>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'locale'=>\App::getLocale()
        ]); ?>
    </script>
    <!-- css files the end-->
  </head>
  <body>
    <div id="app">

      @yield('content')
      
    </div>
    
    <div class="container-fluid footer">
      <div class="container footer__wrapper">
        <div class="footer__item footer__item1"><a class="footer__logo" href="index.html" title="title"> <img src="/img/logo.png" alt="Logotip uchun joy"/></a><a class="footer__call" href="tel: +998998426161">+998 (94) 490-5011</a><a href="email: mail@sitename.uz">mail@sitename.uz</a><a href="#">Факс: +998 (71) 490-5011</a>
          <div class="mensenjer">
            <a href="#"><img src="/img/facebook.svg" alt="facebook"/></a>
            <a href="#"><img src="/img/instagram.svg" alt="instagram"/></a>
            <a href="#"><img src="/img/youtube.svg" alt="youtube"/></a>
          </div>
          <a class="footer__link" href="/subscribe">@lang('lang.zapis')</a>
        </div>
        <div class="footer__item">
          <h3 class="footer__item--head">@lang('lang.about') </h3>
          <div class="footer__items">
            <div class="block"><a href="/aboutUs">@lang('lang.o_nas')</a>
            <a href="/treners">@lang('lang.treneri')</a>
            <a href="/students">@lang('lang.ucheniki')</a>
            <a href="/faq">FAQ</a></div>
            <div class="block">
              <a href="/posts">@lang('lang.novosti')</a>
              <a href="/media">@lang('lang.media')</a>
              <a href="/jobs">@lang('lang.vacancy')</a>
              <a href="/education">@lang('lang.obuch')</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footer__bottom">
      <div class="container footer__bottom--wrapper">
        <p>© 2019 Все права защищены.</p>
        <p>Создание сайтов <a class="sozdat" href="#">Webmasters</a></p>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- all js files goes here-->
    <script src="/js/jquery-2.1.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/myjs/modernizr.custom.js"></script>
    <script src="/js/myjs/flexmenu.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/myjs/jquery-ui.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/my.js"></script>
    
    <script>
      jQuery(document).ready(function($){
          $('ul.navmenu').flexMenu({
              threshold: 6,
              cutoff: 1,
              showOnHover: false,
              linkText: "<span class='fa fa-bars'><span>",
              linkTitle: "Показать еще",
              linkTextAll: "<span class='fa fa-bars'><span>",
              linkTitleAll: "Развернуть меню",
              //popupAbsolute: false,
              popupClass: 'more_dropdown'
          });
      });
      
    </script>
    <!-- script files the end-->
  </body>
</html>

