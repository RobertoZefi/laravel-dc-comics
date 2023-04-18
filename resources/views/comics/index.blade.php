@extends('welcome')

@section('content')

<div class="container">
    <a class="btn btn-primary my-3" href="{{ route('comics.create') }}">Aggiungi comic</a>
    <div class="row">
        @foreach($comics as $comic)
            <div class="col-3">
                <a href="{{ route('comics.show', $comic->id)}}">
                    <div class="card text-center p-3 card-index mb-2">
                        <h4>{{ $comic->title }}</h4>
                        <!--<p>{{ $comic->description }}</p>-->
                        <img class="index-img" src="{{ $comic->thumb }}" alt="">
                        <p>{{ $comic->price }} $</p>
                        <p>{{ $comic->series }}</p>
                        <p>{{ $comic->sale_date }}</p>
                        <p>{{ $comic->type }}</p>
    
                        <a class="btn btn-primary button mx-auto" href="{{ route('comics.edit', $comic) }}">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic) }}" metod="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimina">
                        </form>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
