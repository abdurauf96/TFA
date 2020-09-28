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
          <a href="/posts">@lang('lang.novosti') </a>
          
        </div>
        @isset($category)
         <h3 class="way__head">{{ $category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</h3>  
        @endisset
    </div>
  </div>
  <div class="container-fluid category">
      <div class="container">
        <h2 class="category__head">@lang('page.cat_news'):</h2>
        <div class="category__wrapper">
          <div class="category__left">
            @include('layouts.categories')
          </div>
          <div class="category__right">
            <div class="container novosti__items">
                @foreach($posts as $post)
                <a class="novosti__item" href="/post/{{ $post->slug }}">
                    <div class="novosti__absolute">
                        <div class="novosti__absolute--top">
                        <p class="novosti__absolute--date">{{ $post->created_at->format('d M, Y') }}</p>
                        <p class="novosti__absolute--eye"><span class="fa fa-eye"></span>{{ $post->view }}</p>
                        </div>
                        <p class="novosti__absolute--bottom"> {{  $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }} </p>
                    </div>
                    <img src="{{ Voyager::image($post->image) }}" alt="novosti"/>
                </a>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection