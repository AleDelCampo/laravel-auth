@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Inserisci il tuo project/manga preferito</h1>

    <form action="{{route('projects.update', $project->id)}}" method="POST">
        @csrf

        @method("PUT")

        <div class="mb-2">
          <label for="title" class="form-label">Titolo: </label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') ?? $project->title }}" name="title" required>
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description') ?? $project->description }}</textarea>
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="image" class="form-label">Anteprima: </label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" value="{{ old('image') ?? $project->image }}" name="image">
            @error('image')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="technology" class="form-label">Tecnologie Utilizzate: </label>
            <input type="text" class="form-control @error('technology') is-invalid @enderror" id="technology" value="{{ old('technology') ?? $project->technology }}" name="technology">
            @error('technology')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrows-rotate"></i> Registra!!</button>

    </form>
</div>

@endsection