@extends('layouts.app')

@section('content')
  <div id="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
  </div>
  <div class="container-xl">
    
    <div class="row g-1 mt-4 py-4">
      <h2>LATEST DC COMICS</h2>
      {{-- comics --}}
      @foreach ($comics as $index => $comic)
        <div class="col-6 col-md-4 col-lg-3 p-4">
          <div class="card border-0" id="comic_thumb">
            <a href="{{ route('product', ['coordinate' => $index]) }}">
              <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img">
            </a>
            <div class="card-body">
              <p>{{ $comic['series'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
      
      <a class="btn btn-primary mx-auto mb-4" href="#" role="button" style="width: 200px; border-radius: 0; font-weight: bold;">LOAD MORE</a>
    </div>
  </div>
  

@endsection

