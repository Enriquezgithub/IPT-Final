@extends('page.base')

@section('content')

    <div class="border shadow bg-white">
        <h2 class="ms-2 text-primary">Edit - Student - Class</h2>
    </div>
    
    <div class="container fs-3 mt-3">
        <a href="{{url('semesters/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mt-5" style="width: 50%">

        <form method="POST" action="{{url('semesters/' . $semester->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group mt-2">
                <label for="name">Course No</label>
                <select name="student_id" id="student_id" class="form-select">
                    @foreach ($student as $student)
                        <option value="{{$student->id}}" 
                            @if($student->id == $semester->student_id) 
                                selected 
                            @endif>
                            {{$student->name}}
                        </option>
                    @endforeach
                </select>
                @error('student_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="name">Description</label>
                <select name="loader_id" id="loader_id" class="form-select">
                    @foreach ($load as $load)
                        <option value="{{$load->id}}" 
                            @if($load->id == $semester->loader_id) 
                                selected 
                            @endif>
                            {{$load->id}}
                        </option>
                    @endforeach
                </select>
                @error('loader_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="submit" class="btn btn-primary">
                    Edit 
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                    Delete 
                </button>
            </div>
        </form>
    </div>

    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Student - Class - {{$semester->id}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('semesters/delete/' . $semester->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are you sure you want to delete this subject?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                 </form>    
            </div>
        </div>
    </div>

@endsection