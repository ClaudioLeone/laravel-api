@extends('layouts.admin')

@section('content')
    <div class="card my-4 p-4 text-white bg-dark">
        <h3 class="text-center py-3">Modifica Progetto: <span class="edit-title">{{ $project->title }}</span></h3>
    
        @if ($errors->any())
            <div class="errors-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif
    
        <form class="mb-2" action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Descrizione</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{ old('content', $project->content) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <select class="form-select" id="type" name="type_id">
                    <option value="">Scegli un tipo di progetto</option>
                    @foreach ($types as $type)
                        <option @selected($type->id == old('type_id', $project->type?->id)) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn ms-confirm-btn" type="submit"><i class="fa-solid fa-check-double"></i> Conferma modifiche</button>
        </form>
    
        <form action="{{ route('admin.projects.index') }}">
            @csrf
            <button class="btn ms-undo-btn" type="submit"><i class="fa-solid fa-square-caret-left"></i> Torna alla lista</button>
        </form>
    </div>
@endsection