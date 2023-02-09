@extends('layouts.app')

@section('title', 'Home')

@section('main-app')
<main>
    <div class="container">
        <div class="row align-items-stretch row-cols-1 row-cols-lg-3">
            @foreach ($movies as $movie)
            <div class="col g-4">
                <div class="movie-card card d-flex justify-content-center text-center">
                    <h2>Titolo: <span class="fw-bold fs-3">{{$movie->title}} </h2></span>
                        <h4>Titolo Originale: {{$movie->original_title}}</h4>
                        <h5>Nazionalità: {{$movie->nationality}} </h5>
                        <h5>Data di uscita: {{$movie->date}}</h5>
                        <h5>Voto: {{$movie->vote}}</h5>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection