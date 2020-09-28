@isset($posts) 
<div class="container-fluid novosti" id="novosti">
    <div class="container">
      <div class="novosti__wrapper">
        <h3 class="novosti__head">@lang('lang.newstitle')</h3>
        <h1 class="novosti__soya">news</h1><a class="novosti__link" href="/posts">@lang('lang.othernews') &rarr;</a>
      </div>
    </div>
    <div class="container novosti__items">
      @foreach($posts as $post)
      <a class="novosti__item" href="/post/{{ $post->slug }}">
      <div class="novosti__absolute">
        <div class="novosti__absolute--top">
          <p class="novosti__absolute--date"> {{ $post->created_at->format('d M, Y') }}</p>
          <p class="novosti__absolute--eye"><span class="fa fa-eye"></span>{{ $post->view }}</p>
        </div>
        <p class="novosti__absolute--bottom">{{ $post->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p>
      </div>
      <img src="{{ Voyager::image($post->image) }}" alt="novosti"/>
      </a>
      @endforeach
    </div>
</div>
@endisset