@extends('layouts.index')

@section('content')
<section class="vakansii">
  <div class="container-fluid cardnews menu2">
  	@include('layouts.menu')
  </div>
  <div class="container-fluid way">
    <div class="container">
      <div class="way__wrapper"><a href="/">@lang('page.home') \  </a>
      <a class="way-active" href="#">@lang('page.vak')</a></div>
      <h3 class="way__head">@lang('page.vak')</h3>
    </div>
  </div>
  <div class="container-fluid category">
    <div class="container">
      <div class="category__wrapper">
        <div class="category__left">
          <div class="category__left--link">
            <ul class="navv">
              @foreach($jobs as $job)
              <li class="getJob" data-id="{{$job->id}}" ><a href="" class="navv_link">{{ $job->getTranslatedAttribute('job_name', \App::getLocale(), 'ru') }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="category__right">
          <div id="result_job">
            <div class="spisok_title">@lang('page.dolj'):</div>
            <ul class="spisok">
              @foreach($jobs as $job)
             <li class="spisok_nav"> {!! $job->getTranslatedAttribute('obizannosti', \App::getLocale(), 'ru') !!}</li>
              @break
              @endforeach
            </ul>
            <div class="spisok_title">@lang('page.treb'):</div>
            <ul class="spisok">
              @foreach($jobs as $job)
              <li class="spisok_nav">{!! $job->getTranslatedAttribute('trebovaniya', \App::getLocale(), 'ru') !!}</li>
               @break
              @endforeach
             
            </ul>
          </div>
          <div class="form">
            <div class="form_text">@lang('page.forma'):</div>
            <form method="post" action="{{ route('send_resume') }}" 
            enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form_col">
                <div class="form-title">@lang('page.nazvanie')</div>
                <input type="text" required name="job_name" class="form-text">
              </div>
              <div class="form_col">
                <div class="form-title">@lang('page.name')</div>
                <input type="text" name="name" class="form-text">
              </div>
              <div class="form_col2">
                  <div class="form_col3">
                    <div class="form-title">@lang('page.phone')</div>
                    <input name="phone" type="text" class="form-text">
                  </div>
                  <div class="form_col3">
                    <div class="form-title">Email</div>
                    <input name="email" type="text" class="form-text">
                  </div>
              </div>
              <div class="form_col2"> 
                <input type="file" required name="resume" class="form_save"></input>
                <input type="submit" value="@lang('page.send')" class="form-send">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection