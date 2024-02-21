@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="d-flex justify-content-between align-items-center ">
            <h2 class="fs-4 text-secondary my-4">
                {{ __('My Projects') }}
            </h2>
            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </div>
        </div>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-3 my-3 ">

                    <div class="card" style="width: 18rem;">
                        <img src="{{$project['img']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$project['name']}}</h5>
                            <p class="card-text">{{ Str::limit($project['description'], 50) }}</p>
                            <div class=" text-end ">
                                <a href="{{route('admin.projects.show', ['project' => $project->slug])}}" class="btn btn-primary">Detailes</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
