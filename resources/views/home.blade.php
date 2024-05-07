@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    {{-- jumbotron --}}
    <div id="jumbotron">
      <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    {{-- comics --}}
    <div class="row g-4 p-4">
      <h2>CARD HERE:</h2>
      @foreach ($comics as $comic)
        <div class="col-6 col-md-4 col-lg-3 mb-4">
        
          <div class="card border-0" id="comic_thumb">
            <img src="{{ $comic['thumb'] }}" alt="" class="card-img-top">
            <div class="card-body">
              <p>{{ $comic['title'] }}</p>
            </div>
          </div>

        </div>
      @endforeach
      <h1>
        prova
      </h1>
      
    </div>
  </div>
  

@endsection

