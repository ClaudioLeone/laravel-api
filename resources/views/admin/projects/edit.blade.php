@extends('layouts.admin')

@section('content')
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

    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
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
        <button class="btn btn-success" type="submit">Conferma modifiche</button>
    </form>

    <form action="{{ route('admin.projects.index') }}">
        <button class="btn btn-danger" type="submit">Torna alla lista</button>
    </form>
@endsection