@isset($faqs)
<div class="container-fluid faq">
  <div class="container faq__wrapper">
    <div class="faq__accordion">
      <h3 class="faq__soya">FAQ</h3>
      <div class="accordion">
        @foreach($faqs as $faq)
        <h3 class="faq__accordion--head">{{ $faq->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        <p class="faq__accordion--body">{{ $faq->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
        @endforeach
      </div><a class="faq__accordion--link" href="{{ route('faq') }}">@lang('lang.pokazat') &rarr;</a>
    </div>
    <div class="faq__pontyor">
    <a class="faq__pontyor--item" href="#"> <img src="img/pontyor1.png" alt=""/></a>
    <a class="faq__pontyor--item" href="#"> <img src="img/pontyor2.png" alt=""/></a><a class="faq__pontyor--item" href="#"> <img src="img/pontyor3.png" alt=""/></a><a class="faq__pontyor--item" href="#"> <img src="img/pontyor4.png" alt=""/></a><a class="faq__pontyor--item" href="#"> <img src="img/pontyor5.png" alt=""/></a><a class="faq__pontyor--item" href="#"> <img src="img/pontyor6.png" alt=""/></a></div>
  </div>
</div>
@endisset