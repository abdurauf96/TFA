@extends('layouts.index')

@section('content')
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper"><a href="/">@lang('page.home') \</a>
    <a class="way-active" href="#">@lang('page.obucheniya')</a></div>
    <h3 class="way__head">@lang('page.obuch_desc')</h3>
  </div>
</div>
<div class="container-fluid obujeniya">
  <div class="container">
    <h3 class="obujeniya__head">@lang('page.obuch_title')</h3>
    <p class="obujeniya__hover">@lang('page.obuch_subtitle') </p>
  </div>
  <div class="container">
    <div class="let">
      <div class="let__left--item let-link2 let-active">
        <h3 class="let__left--number">01</h3>
        <div class="let__left--yosh"> 
          <p>3-5 @lang('page.let') </p><span> 2013-2015 г.р</span>
        </div>
      </div>
      <div class="let__left--item let-link2">
        <h3 class="let__left--number">02</h3>
        <div class="let__left--yosh"> 
          <p>6-7 @lang('page.let') </p><span> 2011-2012 г.р</span>
        </div>
      </div>
      <div class="let__left--item let-link2">
        <h3 class="let__left--number">03</h3>
        <div class="let__left--yosh"> 
          <p>8-15 @lang('page.let') </p><span> 2005-2010 г.р</span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <p class="obujeniya__text">@lang('page.obuch_body')</p>
   
  </div>
</div>
@endsection