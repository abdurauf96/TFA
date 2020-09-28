
        <h3 class="obuch__right--head">{{ $fea->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        <h4 class="obuch__right--text1">{{ $fea->getTranslatedAttribute('subtitle', \App::getLocale(), 'ru') }}</h4>
        <p class="obuch__right--text">{{ $fea->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
    
        <div class="obuch__right--img"><img src="{{ Voyager::image($fea->image) }}" alt="trinarovka"/></div>