@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th class="text-center" scope="col">command</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project['id'] }}</th>
                    <td>{{ $project['name'] }}</td>
                    <td>{{ Str::limit($project['description'], 50) }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"
                            class="btn btn-sm btn-primary">
                            <i class="fa-solid fa-eye fa-xs"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-pen-to-square fa-xs"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="fa-solid fa-trash-can fa-xs"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
