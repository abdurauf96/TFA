@extends('layouts.index')

@section('content')
<section class="nashi">
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper"><a href="/">@lang('page.home') \  </a>
    <a class="way-active" href="#">@lang('lang.ucheniki')</a></div>
    <h3 class="way__head">@lang('lang.ucheniki')</h3>
  </div>
</div>
<div class="contaniner-fluid search">
  <div class="container">
    <div class="search__wrapper">
      <form class="form-group" action="">
        <label for="imya">@lang('page.imya_fam')</label>
        <input class="form-control" type="text" id="imya"/>
        <input class="btn search_student" type="submit" value="@lang('page.nayti')"/>
      </form>
    </div>
    <div class="filter__wrapper">
      <form class="form-group" action="">
        <label for="vozrost">@lang('page.age_cat')</label>
        <select name="age" id="vozrost">
          <option value="5-10">5-10</option>
          <option value="10-20">10-20</option>
          <option value="20-30">20-30 </option>
        </select>
        <label class="form-group" for="group">@lang('page.gruppa')</label>
        <select name="group" id="group">
         @foreach($groups as $group)
          <option value="{{ $group->id }}">{{ $group->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</option>
         @endforeach
        </select>
        <input type="submit" class="btn searchStudentsByAge" value="@lang('page.show')"/>
      </form>
    </div>
  </div>
</div>
<div class="container-fluid triner triner__page">
  <div class="container">
    <div class="uchenik" id="resultStudent">
      @foreach($students as $student)
      <div class="uchenik_article">
        <div class="uchenik_article_in">
        <div class="uchenik_img">
          <img src="{{ Voyager::image($student->image) }}" alt="">
        </div>
        <div class="uchenik_block">
          <div class="uchenik_col">
            <div class="uchenik_title">{{ $student->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</div>
            <div class="uchenik_year">{{ $student->age }} @lang('page.let')</div>
          </div>
          <div class="uchenik_text">@lang('page.gruppa') {{ $student->gruppa }}</div>
        </div>
         </div>
      </div>
      @endforeach
    </div>
  </div>
  </div>
</div>
<div class="container-fluid pagenation">
  <div class="contaoiner pagenation__wrapper">
      {{ $students->links('layouts.pagination') }}
  </div>
</div>

</section>