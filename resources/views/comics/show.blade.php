@extends('layouts.main')

@section('content')
  <h1>DETTAGLIO FUMETTI</h1>
  <div class="card my-3">
    <div class="row g-0">
      <div class="col-md-4 p-5">
        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">{{ $comic->title }}</h3>
          <p class="card-text">
            <strong>Descrizione: </strong>
            {{ $comic->description }}
          </p>
          <p class="card-text">
            <strong>Serie: </strong>
            {{ $comic->series }}
          </p>
          <p class="card-text">
            <strong>Data di uscita: </strong>
            {{ date_format(date_create($comic->sale_date), "d/m/Y") }}
          </p>
          <p class="card-text">
            <strong>Categoria: </strong>
            {{ $comic->type }}
          </p>
          <div class="row row-col-2">
            <div class="col">
                <strong>Artisti: </strong>
                <ul>
                    @foreach (explode('|', $comic->artists) as $artist)
                      <li>{{ $artist }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <strong>Scrittori: </strong>
                <ul>
                    @foreach (explode('|', $comic->writers) as $writer)
                      <li>{{ $writer }}</li>
                    @endforeach
                </ul>
            </div>
          </div>
          <p class="card-text">
            <small class="text-body-secondary">
            <strong>Prezzo: </strong>
            {{ $comic->price }}
            </small>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
