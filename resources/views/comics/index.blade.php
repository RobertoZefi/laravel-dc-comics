@extends('welcome')

@section('content')

@foreach($comics as $comic)
    <a href="{{ route('comics.index') }}">
        <div class="card">
            <h4>{{ $comic->title }}</h4>
            
        </div>
    </a>
@endforeach

@endsection
