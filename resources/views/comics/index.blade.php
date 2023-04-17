@extends('welcome')

@section('content')

<div class="container-">
    <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi comic</a>
    <div class="row">
        @foreach($comics as $comic)
            <a class="col-3" href="{{ route('comics.show', $comic->id)}}">
                <div class="card text-center p-3 card-index mb-2">
                    <h4>{{ $comic->title }}</h4>
                    <p>{{ $comic->description }}</p>
                    <img class="index-img" src="{{ $comic->thumb }}" alt="">
                    <p>{{ $comic->price }} $</p>
                    <p>{{ $comic->series }}</p>
                    <p>{{ $comic->sale_date }}</p>
                    <p>{{ $comic->type }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection
