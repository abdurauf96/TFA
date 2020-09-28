@if(count($students)>0)
    @foreach($students as $student)
    <div class="uchenik_article">
        <div class="uchenik_article_in">
            <div class="uchenik_img">
                <img src="{{ Voyager::image($student->image) }}" alt="">
            </div>
            <div class="uchenik_block">
                <div class="uchenik_col">
                <div class="uchenik_title">{{ $student->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</div>
                <div class="uchenik_year">{{ $student->age }} лет</div>
                </div>
                <div class="uchenik_text">группа {{ $student->gruppa }}</div>
            </div>
        </div>
    </div>
    @endforeach
@else
<div class="alert alert-info">
<p>not found</p>
</div>
@endif