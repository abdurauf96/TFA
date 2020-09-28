<div  class='accordion'>

    @foreach($faqs as $faq)
        <h3 class="faq__accordion--head">{{ $faq->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
        <p class="faq__accordion--body">{{ $faq->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
    @endforeach

</div>