@extends('welcome')

@section('content')

@foreach($comics as $comic)
    <a href="{{ route('comics.show', $comic->id)}}">
        <div class="card">
            <h4>{{ $comic->title }}</h4>
            <p>{{ $comic->description }}</p>
        </div>
    </a>
@endforeach

@endsection
