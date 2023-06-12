@extends('layouts.main')

@section('content')
  <h1>ELENCO FUMETTI</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Categoria</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->type }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    {{$comics->links()}}
  </div>
@endsection
