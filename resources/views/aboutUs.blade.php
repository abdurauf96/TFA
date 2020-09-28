@extends('layouts.index')

@section('content')
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper"><a href="/">@lang('page.home')  \  </a>
    <a class="way-active" href="#">@lang('lang.about')</a></div>
    <h3 class="way__head">{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
  </div>
</div>
<div class="container-fluid ob">
  <div class="container">
    <div class="ob__wrapper">
      <div class="ob__wrapper--left"><img class="ob__img" src="{{ Voyager::image($page->image) }}" alt="ob"/>
        <div class="ob__logo"><img src="img/logo.png" alt="kuting"/></div>
      </div>
      <div class="ob__wrapper--right">
        <p class="ob__text">{{ $page->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru') }}</p>
      </div>
    </div>
    <p class="ob__text">{{ $page->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
   
  </div>
</div>
<div class="container-fluid obslider1">
  <div class="container">
    <h3 class="obslider1__head">@lang('page.rukovod')</h3>
  </div>
  <div class="container">
    <div class="oslider1">
      @foreach($treners as $trener)
      <div class="oslider1__item">
        <img class="oslider1__img" src="{{ Voyager::image($trener->image) }}" alt="trineer"/>
        <div class="block">
          <div class="oslider1__avtor">{{ $trener->name }}</div>
          <div class="oslider1__professi">{{ $trener->getTranslatedAttribute('position', \App::getLocale(), 'ru') }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<div class="container-fluid dosti">
  <div class="container">
    <h3 class="dosti__head">@lang('page.success')</h3>
  </div>
  <div class="container dosti__wrapper">
    @foreach($success as $suc)
    <div class="dosti__item">
      <div class="dosti__left">
        <h3 class="dosti__left--head">{{ $suc->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        <p class="dosti__left--text">@php $text=Str_limit($suc->getTranslatedAttribute('body', \App::getLocale(), 'ru'), 300) @endphp {{ $text }}</p>
        <!-- <a  class="dosti__left--link" href="#">Показать все &rarr;</a> -->

      </div>
      <div class="dosti__right"><img class="dosti__right--img" src="{{ Voyager::image($suc->image) }}" alt="kuting"/></div>
    </div>
    
    @endforeach
  </div>
</div>
<div class="container-fluid">
  <div class="container">
    <div class="obslider2">
      @foreach($partners as $partner)
      <div class="obslider2__item"><img class="obslider2__img" src="{{ Voyager::image($partner->image) }}" alt="kuting"/></div>
      @endforeach
    </div>
  </div>
</div>
<div class="container-fluid sertifikat">
  <div class="container">
    <h3 class="sertifikat__head">@lang('page.sertific')</span></h3>
  </div>
  <div class="container">
    <div class="obslider3">
    @foreach($sertificats as $ser)
      <div class="obslider3__item"><img class="sertifikat__img" src="{{ Voyager::image($ser->image) }}" alt="kuting"/></div>
    @endforeach
    </div>
  </div>
</div>

@endsection