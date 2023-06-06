@extends('layouts.admin')

@section('content')
    <h3 class="text-center py-3">Crea Progetto</h3>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Descrizione</label>
            <textarea class="form-control" id="content" rows="3"></textarea>
        </div>
        <button class="btn btn-success" type="submit">Crea</button>
    </form>
@endsection