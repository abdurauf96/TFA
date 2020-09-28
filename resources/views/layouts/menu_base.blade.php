@foreach($items as $item)
<li><a href="{{ $item->url }}">{{ $item->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}	</a></li>
@endforeach