@extends('layouts.admin')

@section('content')
    <h3 class="text-center py-3">Lista dei progetti</h3>


    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">TITOLO</th>
            <th scope="col">SLUG</th>
            <th scope="col">AZIONI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a class="ms-btn btn btn-info" href="{{ route('admin.projects.show', $project->slug) }}"><i class="fa-regular fa-eye"></i></a>
                        <a class="ms-btn btn btn-warning" href=""><i class="fa-regular fa-pen-to-square"></i></a>
                        <a class="ms-btn btn btn-danger" href=""><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="add-btn-container d-flex align-items-center justify-content-center">
        <a class="ms-btn ms-add-btn btn btn-success" href="{{ route('admin.projects.create', $project->slug) }}"><i class="fa-regular fa-plus"></i></a>
    </div>
@endsection