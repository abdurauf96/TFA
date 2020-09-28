@extends('layouts.index')

@section('content')
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>

<div class="container-fluid way">
    <div class="container">
        <div class="way__wrapper"><a href="/">@lang('page.home') \  </a>
            <a href="/posts">@lang('lang.novosti') \</a>
            <a class="way-active" href="#">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</a>
        </div>
        <h3 class="way__head">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        <p class="way__text">@lang('page.data'):  <span>{{ $post->created_at->format('d M, Y') }}</span></p>
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
            <img class="category__right--img" src="{{ Voyager::image($post->image) }}" alt=""/>
        <p class="category__right--text">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p>
        <p class="category__right--text">{{  $post->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
        
        </div>
    </div>
    </div>
</div>
 @include('partials.news')
@endsection