@extends('welcome')

@section('content')


  <div class="container">
    <h1 class="py-3">Modifica Comic</h1>

    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title" value="{{ $comic['title'] }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
          <input type="description" class="form-control" id="exampleFormControlInput1" placeholder="" name="description" value="{{ $comic['description'] }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Immagine</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="thumb" value="{{ $comic['thumb'] }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="price" value="{{ $comic['price'] }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Serie</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="series" value="{{ $comic['series'] }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Data</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sale_date" value="{{ $comic['sale_date'] }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tipo</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="type" value="{{ $comic['type'] }}">
        </div>
        <input type="submit">
    </form>
  </div>
    
@endsection