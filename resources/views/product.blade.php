@extends('layouts.app')

@section('content')

<section id="product">
  <div class="container">
    <div class="row py-4">
      <div class="col-4">
        <div class="card border-0 py-4" id="single_comic">
          <img src="{{ $selectedComic['thumb']}}" alt="">
        </div>
      </div>
      <div class="col-8">
        <div class="d-flex flex-column h-100 py-2 justify-content-around">
          <div>
            <p style="text-transform: uppercase">{{ $selectedComic['type'] }}</p>
            <h3>{{ $selectedComic['title'] }}</h3>
            <p>{{ $selectedComic['description'] }}</p>
          </div>
          <div>
            <h5>Price: {{ $selectedComic['price'] }}</h5>
          </div>
        </div>
      </div>
      {{-- buttons --}}
      <div class="d-flex justify-content-center my-4">
        <a href="/" class="btn btn-primary mx-2"  role="button" style="width: 200px; border-radius: 0; font-weight: bold;">FIND A COMIC SHOP</a>
        <a href="/" class="btn btn-primary mx-2"  role="button" style="width: 200px; border-radius: 0; font-weight: bold;">RETURN HOME</a>
      </div>
    </div>
  </div>

</section>


@endsection