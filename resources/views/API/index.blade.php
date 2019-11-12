@extends('layouts.app')

@section('content')

@foreach($apiResponse['articles'] as $res)

<div class="card mb-3">
  <img src="{{$res['urlToImage']}}" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">{{ $res['title']}}</h5>
    <p class="card-text">{{ $res['description']}}</p>
    <p class="card-text"><small class="text-muted">{{ $res['publishedAt']}}</small></p>
  </div>
</div>

@endforeach

@endsection