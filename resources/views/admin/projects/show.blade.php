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
            <a href="{{ route('admin.projects.index') }}" class="btn ms-confirm-btn"><i class="fa-solid fa-square-caret-left"></i> Torna alla lista</a>
            {{-- <a href="#" class="btn ms-undo-btn"><i class="fa-solid fa-trash-can"></i> Cancella</a> --}}

            <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn ms-undo-btn" href="{{ route('admin.projects.destroy', $project->slug) }}"><i class="fa-regular fa-trash-can"></i> Cancella</button>
            </form>
        </div>
    </div>
@endsection