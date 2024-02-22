@extends('layouts.admin')

@section('content')
    <div class="container-fluid overflow-y-scroll formProj">
        <div class="container w-50">
            <h1 class="my-4">Modify Project</h1>
            <form class="row" action="{{ route('admin.projects.update', $project->slug)}}" method="post">
                @csrf
                @method('PUT')
    
                {{-- Name Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="nameProject">Name Project</label>
                    <input class="form-control form-control-sm @error('name') is-invalid border-danger @enderror" type="text" name="name" id="nameProject" aria-describedby="nameError" required>
                    @error('name')
                        <div id="nameError" class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
    
                {{-- Link Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="linkProject">Link Project</label>
                    <input class="form-control form-control-sm @error('repository_link') is-invalid border-danger @enderror" type="text" name="repository_link" id="linkProject" aria-describedby="linkProjectError" required>
                    @error('repository_link')
                        <div id="linkProjectError" class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
    
                {{-- Img Proj --}}
                <div class="col-12 mt-3 ">
                    <label class="form-label my-label" for="imgProject">Project Image</label>
                    <input class="form-control form-control-sm" type="text" name="img" id="imgProject">
                </div>
    
                {{-- Date Start Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="startDateProject">Start Date Project</label>
                    <input class="form-control form-control-sm @error('date_start') is-invalid border-danger @enderror" type="date" name="date_start" id="startDateProject" aria-describedby="startDateError" required>
                    @error('date_start')
                        <div id="dateStartError" class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
    
                {{-- Date End Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="endDateProject">End Date Project</label>
                    <input class="form-control form-control-sm @error('date_end') is-invalid border-danger @enderror" type="date" name="date_end" id="endDateProject" aria-describedby="endDateError">
                    @error('date_end')
                        <div id="dateEndError" class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
    
                <div class="col-12 mt-3 ">
                    <label class="form-label my-label" for="descriptionProject">Project Description</label>
                    <textarea class="form-control form-control-sm @error('description') is-invalid border-danger @enderror" name="description" id="descriptionProject" cols="30" rows="10" aria-describedby="descriptionError" required></textarea>
                    @error('description')
                        <div id="descriptionError" class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-12 mt-3 text-end">
                    <button class="btn btn-sm btn-primary" type="submit">Modify</button>
                </div>
            </form>
        </div>
    </div>
@endsection