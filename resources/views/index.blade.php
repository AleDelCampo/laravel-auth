@extends('layouts.app')
@section('content')

<div class="content">
    <div class="container text-center mt-4">
        <h1>WELCOME TO MY PORTFOLIO</h1>
    </div>

    <div class="d-flex justify-content-center text-center gap-4 mt-5">
        @foreach($projects as $project)
        <a class="text-decoration-none" href="{{ route('projects.show', $project->id) }}">
        <div class="pointer">
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>
            <img class="img-size" src="{{ $project->image }}" alt="{{ $project->image }}">
            <p>Tecnologia: {{ $project->technology }}</p>
        </div>
        </a>
        @endforeach
    </div>

</div>

@endsection