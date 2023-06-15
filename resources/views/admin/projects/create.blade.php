@extends('layouts.admin')

@section('content')
    <div class="card my-4 p-4 text-white bg-dark">
        <h3 class="text-center py-3">Crea Progetto</h3>

        @if ($errors->any())
            <div class="errors-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form class="mb-2" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <select class="form-select" id="type" name="type_id">
                    <option value="">Scegli un tipo di progetto</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <span>Seleziona le tecnologie per il tuo progetto:</span>
                <div class="d-flex flex-wrap">
                    @foreach ($technologies as $technology)
                        <div class="form-check mt-2 me-4">
                            <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $technology->id }}" id="tech-{{ $technology->id }}" @checked(in_array($technology->id, old('technologies', [])))>
                            <label class="form-check-label" for="tech-{{ $technology->id }}">
                                {{ $technology->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="btn ms-confirm-btn" type="submit"><i class="fa-solid fa-star-of-life"></i> Crea</button>
        </form>
        
        <form action="{{ route('admin.projects.index') }}">
            <button class="btn ms-undo-btn" type="submit"><i class="fa-solid fa-square-caret-left"></i> Annulla</button>
        </form>
    </div>
@endsection