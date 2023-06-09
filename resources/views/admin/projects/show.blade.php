@extends('layouts.admin')

@section('content')
    <div class="card my-4 text-white bg-dark">
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->content }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-white bg-dark"><strong>ID: </strong>{{ $project->id }}</li>
            <li class="list-group-item text-white bg-dark"><strong>SLUG: </strong>{{ $project->slug }}</li>
        </ul>
        <div class="card-body">
            <a href="{{ route('admin.projects.index') }}" class="card-link"><i class="fa-solid fa-square-caret-left"></i> Torna alla lista</a>
            <a href="#" class="card-link text-danger"><i class="fa-solid fa-trash-can"></i> Cancella</a>
        </div>
    </div>
@endsection