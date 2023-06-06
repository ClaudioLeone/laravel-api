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
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection