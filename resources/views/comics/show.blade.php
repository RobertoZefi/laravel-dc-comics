@extends('welcome')

@section('content')

<div class="card text-center py-3 card-show">
    <h4>{{ $comics->title }}</h4>
    <p>{{ $comics->description }}</p>
    <img class="img-show" src="{{ $comics->thumb }}" alt="">
    <p>{{ $comics->price }} $</p>
    <p>{{ $comics->series }}</p>
    <p>{{ $comics->sale_date }}</p>
    <p>{{ $comics->type }}</p>
</div>

@endsection