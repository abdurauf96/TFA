<div class="container-fluid galareya__otziv">
  <div class="container">
    <h3 class="galareya__head">@lang('lang.gallery_title')</h3>
    <div class="galareya__otziv--link"><a class="galareya__link galareya-active" href="#" id="id1">@lang('lang.gallery')</a><a class="galareya__link" href="#" id="id2">@lang('lang.otziv')</a></div>
  </div>
  <div class="container galareya">
    <div class="galareya__item1">
      <p class="galareya__item1--text">@lang('lang.gallery_desc')</p>
      <div class="galareya__item1--img galareya--img"><img src="{{ Voyager::image($image->image1) }}" alt="galareya"/></div>
    </div>
    <div class="galareya__item2">
     
      <div class="galareya__item2--img galareya--img"><img src="{{ Voyager::image($image->image2) }}" alt=""/>
      </div>
      <div class="galareya__item2--img galareya--img"><img src="{{ Voyager::image($image->image3) }}" alt=""/>
      </div>
    
    </div>
    <div class="galareya__item3 galareya__item1">
      <div class="galareya__item3--img galareya--img"><img src="{{ Voyager::image($image->image4) }}" alt="galareya"/></div>
      <div class="galareya__item3--link"><a href="{{ route('media') }}">@lang('lang.pereyti') </a></div>
    </div>
  </div>
  @isset($thoughts)
  <div class="container otziv">
    <div class="row">
      <div class="otziv__slider col-lg-8 offset-lg-2">
        @foreach($thoughts as $th)
        <div class="otziv__slider--item">
          <div class="otziv__head">
            <h4>{!! $th->name !!}</h4>
          </div>
          <p class="otziv__slider--text">{{ $th->getTranslatedAttribute('body', \App::getLocale(), 'ru') }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endisset
</div>