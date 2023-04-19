@extends('welcome')

@section('content')


  <div class="container">
    <h1 class="py-3">Modifica Comic</h1>

    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Titolo</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="" name="title" value="{{ old('title', $comic['title']) }}">
          @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
          <input type="description" class="form-control  @error('description') is-invalid @enderror" id="exampleFormControlInput1" placeholder="" name="description" value="{{ old('description', $comic['description']) }}">
          @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Immagine</label>
          <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="exampleFormControlInput1" placeholder="" name="thumb" value="{{ old('thumb', $comic['thumb']) }}">
          @error('thumb')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
          <input type="number" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput1" placeholder="" name="price" value="{{ old('price', $comic['price']) }}">
          @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Serie</label>
          <input type="text" class="form-control @error('series') is-invalid @enderror" id="exampleFormControlInput1" placeholder="" name="series" value="{{ old('series', $comic['series']) }}">
          @error('series')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Data</label>
          <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="exampleFormControlInput1" placeholder="" name="sale_date" value="{{ old('sale_date', $comic['sale_date']) }}">
          @error('sale_date')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tipo</label>
          <input type="text" class="form-control @error('type') is-invalid @enderror" id="exampleFormControlInput1" placeholder="" name="type" value="{{ old('type', $comic['type']) }}">
          @error('type')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <input type="submit">
    </form>
  </div>
    
@endsection