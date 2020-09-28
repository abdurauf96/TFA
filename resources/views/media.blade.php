@extends('layouts.index')

@section('content')
<section class="mediaa">
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>
<div class="container-fluid way">
  <div class="container">
    <div class="way__wrapper"><a href="/">@lang('page.home') \  </a>
    <a class="way-active" href="#"></a></div>
    <h3 class="way__head">@lang('lang.media')</h3>
  </div>
</div>
<div class="container-fluid category">
  <div class="container">
    <div class="galeriyan_block">
      <div class="galeriyan_col">
      @foreach($images as $image)
        <div class="container galareyan">
            <div class="galareya__item1">
              <p class="galareya__item1--text">@lang('page.media_title')</p>
              <div class="galareya__item1--img galareya--img"><img src="{{ Voyager::image($image->image1) }}" alt="galareya"/></div>
            </div>
            <div class="galareya__item2">
              <div class="galareya__item2--img galareya--img"><img src="{{ Voyager::image($image->image2) }}" alt=""/></div>
              <div class="galareya__item2--img galareya--img"><img src="{{ Voyager::image($image->image3) }}" alt=""/></div>
            </div>
            <div class="galareya__item3 galareya__item1">
              <div class="galareya__item3--img galareya--img"><img src="{{ Voyager::image($image->image4) }}" alt="galareya"/></div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="galareyan_arrow">
        <div class="galareyan_prew"></div>
        <div class="galareyan_next"></div>
      </div>
    </div>
    <div class="video">
      <div class="video_first">
        <div class="video_first-vid">
          <iframe width="770" height="430" src="https://www.youtube.com/embed/4Sx3TEXUxdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video_first-col">
          <div class="video_first-vid2"><iframe width="370" height="205" src="https://www.youtube.com/embed/4Sx3TEXUxdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
          <div class="video_first-vid2"><iframe width="370" height="205" src="https://www.youtube.com/embed/4Sx3TEXUxdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
      </div>
      <div class="video_second">
        <div class="video_second-vid"><iframe width="370" height="210" src="https://www.youtube.com/embed/4Sx3TEXUxdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="video_second-vid"><iframe width="370" height="210" src="https://www.youtube.com/embed/4Sx3TEXUxdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div class="video_second-vid"><iframe width="370" height="210" src="https://www.youtube.com/embed/4Sx3TEXUxdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection