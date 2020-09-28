@extends('layouts.index')

@section('content')
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper"><a href="/">@lang('page.home') \</a>
    <a class="way-active" href="#">@lang('lang.zapis')</a></div>
    <h3 class="way__head">@lang('lang.zapis')</h3>
  </div>
</div>
<div class="container-fluid obujeniya">
  
  
  <div class="container">
    <p class="obujeniya__text">zapis v akademiyu</p>
   
  </div>
</div>
@endsection