@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" d-flex justify-content-between align-items-center ">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div>
            <a class="btn btn-sm btn-primary" href="{{route('admin.projects.index')}}">projects</a>
        </div>
    </div>
    <div class="row justify-content-center">
    </div>
</div>
@endsection
