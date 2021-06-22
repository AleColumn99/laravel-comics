@extends('layouts.main')

@section('content')

  <main>

    <div class="jumbotron"></div>

    <div class="comics container">

      <div class="title">
        current series
      </div>

      @foreach ($comics as $comic)
        <div class="comic">
          <img src="{{ $comic['thumb'] }}">
          <h5>{{ $comic['series'] }}</h5>
        </div>
      @endforeach

    </div>

  </main>

@endsection