@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    {{-- jumbotron --}}
    <div id="jumbotron">
      <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    {{-- comics --}}
    <div class="row g-4">
      <h2>CARD HERE:</h2>
      @foreach ($comics as $comic)
        <div class="col">
        
          <div class="card border-0" id="comic_thumb">
            <img src="{{ $comic['thumb'] }}" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <p>{{ $comic['title'] }}</p>
              
            </div>
          </div>

        </div>
      @endforeach
      
    </div>
  </div>
  

@endsection

