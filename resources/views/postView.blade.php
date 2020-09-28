@extends('layouts.index')

@section('content')
<div class="container-fluid cardnews menu2">
	@include('layouts.menu')
</div>

<div class="container-fluid category">
  <view-detail></view-detail>
  
</div>
 <!-- @include('partials.news') -->
 <top-posts></top-posts>
 
@endsection