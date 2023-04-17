@extends('welcome')

@section('content')


  <div class="container">
    <h1 class="py-3">Nuovo Comic</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descrizione</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Immagine</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="thumb">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="price">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Serie</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="series">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Data</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="sale_date">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tipo</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="type">
        </div>
        <input type="submit">
    </form>
  </div>
    
@endsection