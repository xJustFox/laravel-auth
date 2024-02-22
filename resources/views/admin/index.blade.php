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
                <a class="asideMenuLink" href="{{ route('admin.projects.index')}}">
                    <i class="fa-solid fa-folder-tree fa-lg" style="color: #fff;"></i>
                    {{ __('Project') }}
                </a>
            </li>
        </ul>
    </aside>
    <div class="rightMain px-3">
        <h2 class="fs-4 my-4 px-3">
            {{ __('Dashboard') }}
        </h2>
    </div>
</div>
@endsection
