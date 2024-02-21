@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('My Project') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <a class="btn btn-sm btn-primary" href="{{route('admin.dashboard')}}">Dashboard</a>
        </div>
    </div>
</div>
@endsection