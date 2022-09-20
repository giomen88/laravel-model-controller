@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
<div class="container d-flex flex-wrap text-center">
@forelse($movies as $movie)
<div class="movie card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <p class="card-text">{{ $movie->date }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  @empty
  <h3>Nessun film disponibile</h3>
@endforelse 
</div>
@endsection