@extends('layouts.index')

@section('content')
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper"><a href="/">@lang('page.home') \  </a>
    <a class="way-active" href="#">@lang('page.faq')</a></div>
    <h3 class="way__head">@lang('page.faq')</h3>
  </div>
</div>
<div class="container-fluid category">
  <div class="container">
    <h2 class="category__head">@lang('page.cat_faq') :</h2>
    <div class="category__wrapper">
      <div class="category__left">
        <div class="category__left--link">
          @foreach($categories as $cat)
          <a class=" getFaq category-link" data-id={{ $cat->id }} href="#">{{ $cat->getTranslatedAttribute('name', \App::getLocale()) }}</a>
          @endforeach
        </div>
      </div>
      <div class="category__right">
        <div id="resultFaq">
          <div  class='accordion'>
            @foreach($faqs as $faq)
            <h3 class="faq__accordion--head">{{ $faq->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
            <p class="faq__accordion--body">{{ $faq->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
            @endforeach
          </div>
        </div>
        <div class="form">
          <div class="form_title">@lang('page.nenashli')</div>
          <div class="form_text">@lang('page.otprav')</div>
            <contact></contact>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection