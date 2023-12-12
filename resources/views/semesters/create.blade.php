@extends('page.base')

@section('content')

    <div class="border shadow mb-3 title bg-white">
        <h2 class="ms-2 text-primary">Create - Student - Class</h2>
    </div>
    
    <div class="container fs-3 mt-5">
        <a href="{{url('semesters/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mt-5" style="width: 50%">

        <form method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="name">Student</label>
                <select name="student_id" id="student_id" class="form-select">
                    <option hidden="true">Select Student</option>
                    <option selected disabled>Select Student</option>
                        @foreach ($students as $studentId => $student)
                            <option value="{{ $studentId }}">{{ $student }}</option>
                        @endforeach
                </select>
                @error('student_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="name">Load</label>
                <select name="loader_id" id="loader_id" class="form-select">
                    <option hidden="true">Select Load</option>
                    <option selected disabled>Select Load</option>
                        @foreach ($loads as $loadId => $load)
                            <option value="{{ $loadId }}">{{ $load }}</option>
                        @endforeach
                </select>
                @error('loader_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">
                    Add
                </button>
        </form>
    </div>

    <style>
        .title{
            position: fixed;
            width: 100%;
            z-index: 111;
        }
    </style>

@endsection