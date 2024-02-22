@extends('layouts.admin')

@section('content')
    <div class="rightMain px-3 overflow-y-scroll ">
        <div class="d-flex justify-content-between align-items-center ">
            <h2 class="fs-4 my-4 px-3 ">
                {{ __('My Projects') }}
            </h2>

            <a class="btn btn-sm btn-primary mx-3" href="{{ route('admin.projects.create') }}">
                <i class="fa-solid fa-folder-plus px-1"></i>
                Add Project
            </a>

        </div>

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
                            <a href="#" class="btn btn-sm btn-warning mx-2 ">
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

    </div>
@endsection
