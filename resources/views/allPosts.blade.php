@extends('layouts.index')

@section('content')
<section class="nov">
  <div class="container-fluid cardnews menu2">
  	@include('layouts.menu')
  </div>
  <div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper">
    <a href="/">@lang('page.home') \ </a>
    <a href="#">@lang('lang.novosti') </a>
    </div>
    
  </div>
  </div>

 <get-news></get-news>
</section>
@endsection