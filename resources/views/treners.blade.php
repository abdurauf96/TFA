@extends('layouts.index')

@section('content')
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper"><a href="/">@lang('page.home') \  </a>
    <a class="way-active" href="#">@lang('lang.treneri')</a></div>
    <h3 class="way__head">@lang('page.sostav')</h3>
  </div>
</div>
<div class="contaniner-fluid search">
  <div class="container">
    <div class="search__wrapper">
      <form class="form-group" action="">
        <label for="imya">@lang('page.imya_fam')</label>
        <input class="form-control key" type="text"  id="imya"/>
        <input class="btn search_trener" type="submit" value="@lang('page.nayti')"/>
      </form>
    </div>
    <div class="filter__wrapper">
      <form class="form-group" action="">
        <label for="vozrost">@lang('page.age_cat')</label>
        <select name="age" class="age_cat" id="vozrost">
          <option value="5-10">5-10</option>
          <option value="10-20">10-20</option>
          <option value="20-30">20-30 </option>
        </select>
        <label class="form-group" for="group">@lang('page.gruppa')</label>
        <select name="gruppa" class="group_cat" id="group">
          @foreach($groups as $group)
          <option value="{{ $group->id }}">{{ $group->getTranslatedAttribute('name',\App::getLocale(), 'ru') }}</option>
          @endforeach
        </select>
        <input type="submit" class="get_trener_by_age" value="@lang('page.show')"/>
      </form>
    </div>
  </div>
</div>
<div class="container-fluid triner triner__page">
  <div class="container triner__wrapper" id="resultTrener">
  @foreach($treners as $trener)
    <div class="triner__item">
      <div class="triner__item--img"><img src="{{ Voyager::image($trener->image) }}" alt="triner"/></div>
      <div class="triner__about">
        <h4 class="triner__about--name">{{ $trener->name }}</h4>
        <ul>
          <li><span>-</span> {{ $trener->getTranslatedAttribute('position', \App::getLocale(), 'ru') }}</li>
          <li><span>-</span> {{ $trener->getTranslatedAttribute('year', \App::getLocale(), 'ru') }}</li>
          <li><span>-</span> {{ $trener->getTranslatedAttribute('info', \App::getLocale(), 'ru') }}</li>
          <li><span>-</span> {{ $trener->getTranslatedAttribute('success', \App::getLocale(), 'ru') }}</li>
          <li><span>-</span> {{ $trener->getTranslatedAttribute('experience', \App::getLocale(), 'ru') }}</li>
        </ul>
      </div>
    </div> 
  @endforeach
  </div>
</div>
<!-- <all-treners></all-treners> -->

<div class="container-fluid pagenation">
  <div class="contaoiner pagenation__wrapper">
   {{ $treners->links('layouts.pagination') }}
  </div>
</div>
@endsection