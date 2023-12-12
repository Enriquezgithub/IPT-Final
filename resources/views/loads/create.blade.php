@extends('page.base')

@section('content')

    <div class="border shadow mb-3 title bg-white">
        <h2 class="ms-2 text-primary">Create - Class</h2>
    </div>
    
    <div class="container fs-3 mt-5">
        <a href="{{url('loads/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mt-5" style="width: 50%">

        <form method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="name">Course No</label>
                <select name="subject_id" id="subject_id" class="form-select">
                    <option hidden="true">Select Subject</option>
                    <option selected disabled>Select Subject</option>
                        @foreach ($subjects as $subjectId => $subject)
                            <option value="{{ $subjectId }}">{{ $subject }}</option>
                        @endforeach
                </select>
                @error('subject_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="name">Description</label>
                <select name="subject_id" id="subject_id" class="form-select">
                    <option hidden="true">Select Subject</option>
                    <option selected disabled>Select Subject</option>
                        @foreach ($descriptions as $descriptionId => $description)
                            <option value="{{ $descriptionId }}">{{ $description }}</option>
                        @endforeach
                </select>
                @error('subject_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="room_type">Room Type</label>
                <select name="classroom_id" id="classroom_id" class="form-select">
                    <option hidden="true">Select Subject</option>
                    <option selected disabled>Select Subject</option>
                        @foreach ($classrooms as $classroomId => $classroom)
                            <option value="{{ $classroomId }}">{{ $classroom }}</option>
                        @endforeach
                </select>
                @error('classroom_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="time">Time</label>
                <input type="text" name="time" class="form-control">
                @error('time')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="day">Day</label>
                <select name="day" id="day" > 
                    <option hidden="true">Select Day</option>
                    <option selected disabled>Select Day</option> 
                    <option value="M-W-F">M-W-F</option>
                    <option value="T-TH">T-TH</option>
                    <option value="S">S</option>
                </select>
                @error('day')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="teacher_id">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-select">
                    <option hidden="true">Select Subject</option>
                    <option selected disabled>Select Subject</option>
                        @foreach ($teachers as $teacherId => $teacher)
                            <option value="{{ $teacherId }}">{{ $teacher }}</option>
                        @endforeach
                </select>
                @error('teacher_id')
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