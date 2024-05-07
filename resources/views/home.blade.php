@extends('layouts.app')

@section('content')
  <div id="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
  </div>
  <div class="container-xl">
    {{-- jumbotron --}}
    
    {{-- comics --}}
    <div class="row g-4 my-4">

      @foreach ($comics as $comic)
        <div class="col-6 col-md-4 col-lg-3">
          <div class="card" id="comic_thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img">
            <div class="card-body">
              <p>{{ $comic['series'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
      
      <a class="btn btn-primary mx-auto" href="#" role="button" style="width: 200px; border-radius: 0; font-weight: bold;">LOAD MORE</a>
    </div>
  </div>
  

@endsection

