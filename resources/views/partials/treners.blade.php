@isset($treners)
<div class="container-fluid triner">
  <div class="container conta__soya">
    <h3 class="triner__head">@lang('lang.treners')</h3>
    <h1 class="triner__soya">coaching staff</h1>
  </div>
  <div class="container triner__wrapper">
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
@endisset