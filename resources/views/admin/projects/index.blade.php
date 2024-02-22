@extends('layouts.app')

@section('content')
    <div class="d-flex h-100">
        <aside class="asideMenu">
            <ul class=" list-unstyled ">
                <li>
                    <a class="asideMenuLink" href="{{ route('admin.dashboard') }}">
                        <i class="fa-solid fa-gauge fa-lg" style="color: #FFf;"></i>
                        {{ __('Dashboard') }}
                    </a>
                </li>
                <li>
                    <a class="asideMenuLink" href="{{ route('admin.projects.index') }}">
                        <i class="fa-solid fa-folder-tree fa-lg" style="color: #fff;"></i>
                        {{ __('Project') }}
                    </a>
                </li>
            </ul>
        </aside>
        <div class="rightMain px-3 overflow-y-scroll ">
            <h2 class="fs-4 my-4 px-3 ">
                {{ __('My Projects') }}
            </h2>

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
                            <th scope="row">{{$project['id']}}</th>
                            <td>{{ $project['name'] }}</td>
                            <td>{{ Str::limit($project['description'], 50) }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-eye fa-xs"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="fa-solid fa-pen-to-square fa-xs"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash-can fa-xs"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
