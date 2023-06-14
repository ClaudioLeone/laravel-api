@extends('layouts.admin')

@section('content')
    <div class="card my-4 text-white bg-dark">
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->content }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-white bg-dark"><strong>ID: </strong>{{ $project->id }}</li>
                <li class="list-group-item text-white bg-dark"><strong>SLUG: </strong>{{ $project->slug }}</li>
                <li class="list-group-item text-white bg-dark"><strong>TIPO: </strong>{{ $project->type?->name }}</li>
            </ul>
        </div>
        
        <div class="card-body">
            <a href="{{ route('admin.projects.index') }}" class="btn ms-confirm-btn"><i class="fa-solid fa-square-caret-left"></i> Torna alla lista</a>

            <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn ms-undo-btn" href="{{ route('admin.projects.destroy', $project->slug) }}"><i class="fa-regular fa-trash-can"></i> Cancella</button>
            </form>

            <div class="d-flex align-items-center justify-content-between mt-4">
                <h6 class="text-warning d-inline-block text-end"><em>Creato da: {{ $project->user ? $project->user->name: 'Utente Sconosciuto' }}</em></h6>
                @forelse ($project->technologies as $technology)
                    <span class="badge rounded-pill text-bg-info">{{ $technology }}</span>
                @empty
                    <span class="badge rounded-pill text-bg-danger">Nessuna tecnologia selezionata</span>
                @endforelse                
            </div>  
        </div>
    </div>
@endsection