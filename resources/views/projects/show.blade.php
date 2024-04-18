@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center mt-5">
   
    <div class="pointer">
        <h2>{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <img class="img-size" src="{{ $project->image }}" alt="{{ $project->image }}">
        <p>Tecnologia: {{ $project->technology }}</p>
    </div>

</div>

@endsection