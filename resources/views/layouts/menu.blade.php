<div class="container-fluid header__menu">
  <div class="header__menu--item">
    <a href="/" title="title">
      <img class="header__menu--img" src="/img/logo.png" alt="Logotip uchun joy"/>
    </a>
  </div>
  <div class="header__menu--item">
    <nav class="flexmenu">
      <ul class="navmenu">
        {{ menu('main', 'layouts.menu_base') }}
      
      </ul>
    </nav>
  </div>
  <div class="header__menu--item call_and_email">
    <a class="header__menu--call" href="tel: {{ setting('site.phone1') }}">
      <i class="fa fa-phone"></i>
      <div class="block">   <span>{{ setting('site.phone2') }}</span>
        <div class="span__hover">Вам перезвонить?</div>
      </div>
    </a>
    <a class="header__menu--email" href="email:">
      <span class="fa fa-envelope"></span>
     <span>mail@sitename.uz </span>
    </a>
  </div>
  <div class="header__menu--item order-1">
    <div class="btn-group" role="group" aria-label="myaria">
      <div class="btn-group" role="group">
        <button class="btn dropdown-toggle" id="dropdownId" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="call__none">
         @if(\App::getLocale()=='ru') Русский @else O`zbekcha @endif
      </span> &nbsp;
      @if(\App::getLocale()=='ru') 
      <img src="/img/rus_flag.png" alt="rus flag joy"/>
      @else  <img src="/img/uz.png" alt="rus flag joy"/> 
      @endif
     
    </button>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" href="/lang/en">O'zbekcha</a>
          <a class="dropdown-item" href="/lang/ru">Русский</a>
        </div>
      </div>
    </div>
  </div>
</div>