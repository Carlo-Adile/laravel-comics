@extends('layouts.app')

@section('content')

<section id="product">
  <div class="container">
    <div class="row py-4">
      <div class="col-4">
        <div class="card border-0" id="single_comic">
          <img src="{{ $selectedComic['thumb']}}" alt="">
        </div>
      </div>
      <div class="col-8">
        <div class="d-flex flex-column justify-content-between h-100 py-2">
          <div>
            <h3>{{ $selectedComic['title'] }}</h3>
            <p>{{ $selectedComic['description'] }}</p>
          </div>
          <div class="mt-auto">
            <h5>Price: {{ $selectedComic['price'] }}</h5>
            <a href="" class="btn btn-primary btn-sm rounded-0">ADD TO CART</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection