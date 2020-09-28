@extends('layouts.index')

@section('content')
<section class="kontakty">
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container head_title">
    <div class="way__wrapper"><a href="/">@lang('page.home') \  </a>
    <a class="way-active" href="#">@lang('page.contact')</a></div>
   
  </div>
</div>
<div class="container-fluid category">
  <div class="container">
    <div class="contact">
      <div class="contact_col">
        <div class="contact_img"><img src="img/phone-call.png" alt=""></div>
        <div class="contact_block">
          <a href="tel:+998998426161" class="contact_block-link">{{ setting('site.phone2') }}</a>
          <a href="tel:+998998426161" class="contact_block-link">{{ setting('site.fax') }}</a>
        </div>
      </div>
      <div class="contact_col">
        <div class="contact_img"><img src="img/envelope.png" alt=""></div>
        <div class="contact_block">
          <a href="mailto:uzlogistic@bk.ru" class="contact_block-link2">{{ setting('site.email') }}</a>
        </div>
      </div>
      <div class="contact_col">
        <div class="contact_img"><img src="img/placeholder.png" alt=""></div>
        <div class="contact_block">
        @lang('page.adres')
        </div>
      </div>
        <div class="mensenjer"><a href="#">
        <img src="img/facebook.svg" alt="facebook"/></a><a href="#"><img src="img/instagram.svg" alt="instagram"/></a>
        <a href="#"><img src="img/youtube.svg" alt="youtube"/></a></div>
    </div>
    <div class="form">
      <div class="form_title">@lang('page.svyaz')</div>
       <contact></contact> 
  </div>
</div>
</section>
@endsection