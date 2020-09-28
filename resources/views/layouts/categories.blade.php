<div class="category__left--link">
    @foreach($categories as $category)
    <a class="category-link" href="/posts/category/{{ $category->slug }}">
        {{ $category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}
    </a>
    @endforeach
</div>