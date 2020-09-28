@extends('layouts.index')

@section('content')
<div class="header">
  @include('layouts.menu')
  @include('partials.slider')
</div>
  @include('partials.section1')
  @include('partials.section2')
  @include('partials.treners')
  @include('partials.gallery')
  @include('partials.otbor')
  @include('partials.news')
  @include('partials.faq')
@endsection