@extends('layouts.admin')

@section('content')
    <div class="card my-4 p-4 text-white bg-dark">
        <h3 class="text-center py-3 text-white">Lista dei progetti</h3>


        <div>
            <table class="table table-dark">
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
                                <a class="ms-btn btn ms-info-clr" href="{{ route('admin.projects.show', $project->slug) }}"><i class="fa-regular fa-eye"></i></a>
                                <a class="ms-btn btn ms-edit-clr" href="{{ route('admin.projects.edit', $project->slug) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="ms-btn btn ms-delete-clr" href="{{ route('admin.projects.destroy', $project->slug) }}"><i class="fa-regular fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <div class="add-btn-container d-flex align-items-center justify-content-center">
            <a class="ms-btn ms-add-btn btn btn-success" href="{{ route('admin.projects.create', $project->slug) }}"><i class="fa-regular fa-plus"></i></a>
        </div>
    </div>
@endsection