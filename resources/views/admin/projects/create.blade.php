@extends('layouts.admin')

@section('content')
    <div class="container-fluid overflow-y-scroll formProj">
        <div class="container w-50">
            <h1 class="my-4">Add Project</h1>
            <form class="row" action="{{ route('admin.projects.store')}}" method="post">
                @csrf
    
                {{-- Name Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="nameProject">Name Project</label>
                    <input class="form-control form-control-sm border-black" type="text" name="name" id="nameProject" required>
                </div>
    
                {{-- Link Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="linkProject">Link Project</label>
                    <input class="form-control form-control-sm border-black" type="text" name="repository_link" id="linkProject" required>
                </div>
    
                {{-- Img Proj --}}
                <div class="col-12 mt-3 ">
                    <label class="form-label my-label" for="imgProject">Project Image</label>
                    <input class="form-control form-control-sm border-black" type="text" name="img" id="imgProject">
                </div>
    
                {{-- Date Start Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="startDateProject">Start Date Project</label>
                    <input class="form-control form-control-sm border-black" type="date" name="date_start" id="startDateProject" required>
                </div>
    
                {{-- Date End Proj --}}
                <div class="col-6 mt-3 ">
                    <label class="form-label my-label" for="endDateProject">End Date Project</label>
                    <input class="form-control form-control-sm border-black" type="date" name="date_end" id="endDateProject">
                </div>
    
                <div class="col-12 mt-3 ">
                    <label class="form-label my-label" for="descriptionProject">Project Description</label>
                    <textarea class="form-control form-control-sm border-black" name="description" id="descriptionProject" cols="30" rows="10" required></textarea>
                </div>

                <div class="col-12 mt-3 text-end">
                    <button class="btn btn-sm btn-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection