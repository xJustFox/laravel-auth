@extends('layouts.app')

@section('content')
    <div class="container-lg mt-3 ">
        <img class="float-end mx-2" src="{{$project['img']}}" alt="">
        <h1>{{$project['name']}}</h1>
        <p>{{$project['description']}}</p>
        <div>
            <span>
                Start Project:
                {{$project['date_start']}}
            </span>
            &VerticalSeparator;
            <span>
                End Project:
                @if ($project['date_end'] != null)
                    {{$project['date_end']}} 
                @else
                    In progress...
                @endif
            </span>
        </div>
        <div class="text-end mt-4">
            <a class="px-2" href="{{$project['repository_link']}}">Link Repository</a>
        </div>
    </div>
@endsection