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