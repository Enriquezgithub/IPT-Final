@extends('page.base')

@section('content')

    <div class="border shadow bg-white">
        <h2 class="ms-2 text-primary">Edit - Classroom</h2>
    </div>
    
    <div class="container fs-3 mt-3">
        <a href="{{url('classrooms/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mt-5" style="width: 50%">

        <form method="POST" action="{{url('classrooms/' . $classroom->id)}}">
            @csrf
            @method('PATCH')
            <div class="form-group mt-2">
                <label for="room_type">Room Type</label>
                <input type="text" name="room_type" class="form-control" value="{{$classroom->room_type}}">
                @error('room_type')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="room_num">Room Number</label>
                <input type="text" name="room_num" class="form-control" value="{{$classroom->room_num}}">
                @error('room_num')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="floor_level">Floor Level</label>
                <select name="floor_level" id="floor_level" > 
                    <option value="{{$classroom->floor_level}}">{{$classroom->floor_level}}</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                    <option value="Fourth">Fourth</option>
                </select>
                @error('floor_level')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <hr>
            <div class="form-group mt-2">
                <label for="capacity">Capacity</label>
                <input type="number" name="capacity" class="form-control" value="{{$classroom->capacity}}">
                @error('capacity')
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Classroom - {{$classroom->room_type}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('classrooms/delete/' . $classroom->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are you sure you want to delete this classroom?
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