<div class="container-fluid obuch">
  <div class="container">
    <h3 class="obuch__head">@lang('lang.chto')</h3>
  </div>
  <div class="container">
    <div class="row obuch__wrapper">
      <div class="col-lg-4 obuch__left">
        <ul class="nav flex-column">
        @foreach($features as $fea)
          <li class="nav-item @if($loop->first) nav-active @endif">
          <a class="nav-link getFeature" data-id="{{ $fea->id }}" href="#">{{ $fea->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</a>
          </li>
        @endforeach
        </ul>
      </div>
      <div class="col-lg-6 col-md-8 obuch__right" id="resFeatures">
       @foreach($features as $fea)
        <h3 class="obuch__right--head">{{ $fea->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        <h4 class="obuch__right--text1">{{ $fea->getTranslatedAttribute('subtitle', \App::getLocale(), 'ru') }}</h4>
        <p class="obuch__right--text">{{ $fea->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
        <!-- <div class="obuch__right--link">
          <ul>
            <li>ПРОГРАММА ОБУЧЕНИЯ</li>
            <li>ТЕХНИКА </li>
            <li>ДРИБЛИНГ</li>
          </ul>
        </div> -->
        <div class="obuch__right--img"><img src="{{ Voyager::image($fea->image) }}" alt="trinarovka"/></div>
        @break
        @endforeach
      </div>
    </div>
  </div>
</div>