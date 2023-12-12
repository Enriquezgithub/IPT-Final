@extends('page.base')

@section('content')

    <div class="border shadow mb-3 title bg-white">
        <h2 class="ms-2 text-primary">Create - Classroom</h2>
    </div>
    
    <div class="container fs-3 mt-5">
        <a href="{{url('classrooms/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mt-5" style="width: 50%">

        <form method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="room_type">Room Type</label>
                <input type="text" name="room_type" class="form-control">
                @error('room_type')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="room_num">Room Number</label>
                <input type="text" name="room_num" class="form-control">
                @error('room_num')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="floor_level">Floor Level</label>
                <select name="floor_level" id="floor_level" > 
                    <option hidden="true">Select Floor</option>
                    <option selected disabled>Select Floor</option> 
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
                <input type="number" name="capacity" class="form-control">
                @error('capacity')
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