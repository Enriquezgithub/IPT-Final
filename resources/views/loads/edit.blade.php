@extends('page.base')

@section('content')

    <div class="border shadow bg-white">
        <h2 class="ms-2 text-primary">Edit - Class</h2>
    </div>
    
    <div class="container fs-3 mt-3">
        <a href="{{url('loads/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mt-5" style="width: 50%">

        <form method="POST" action="{{url('loads/' . $load->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group mt-2">
                <label for="name">Course No</label>
                <select name="subject_id" id="subject_id" class="form-select">
                    @foreach ($subject as $subject)
                        <option value="{{$subject->id}}" 
                            @if($subject->id == $load->subject_id) 
                                selected 
                            @endif>
                            {{$subject->name}}
                        </option>
                    @endforeach
                </select>
                @error('subject_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="name">Description</label>
                <select name="subject_id" id="subject_id" class="form-select">
                    @foreach ($description as $description)
                        <option value="{{$description->id}}" 
                            @if($description->id == $load->subject_id) 
                                selected 
                            @endif>
                            {{$description->description}}
                        </option>
                    @endforeach
                </select>
                @error('subject_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="room_type">Room Type</label>
                <select name="classroom_id" id="classroom_id" class="form-select">
                    @foreach ($classroom as $classroom)
                        <option value="{{$classroom->id}}" 
                            @if($classroom->id == $load->classroom_id) 
                                selected
                            @endif>
                            {{$classroom->room_type}}
                        </option>
                    @endforeach
                </select>
                @error('classroom_id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="time">Time</label>
                <input type="text" name="time" class="form-control" value="{{$load->time}}">
                @error('time')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="day">Day</label>
                <select name="day" id="day" > 
                    <option value="{{$load->day}}">{{$load->day}}</option>
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
                    @foreach ($teacher as $teacher)
                        <option value="{{$teacher->id}}" 
                            @if($teacher->id == $load->teacher_id) 
                                selected 
                            @endif>
                            {{$teacher->name}}
                        </option>
                    @endforeach
                </select>
                @error('teacher_id')
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Class - {{$load->id}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('loads/delete/' . $load->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are you sure you want to delete this class?
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