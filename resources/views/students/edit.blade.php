@extends('page.base')

@section('content')

<div class="border shadow mb-3">
    <h2 class="ms-2 text-primary">Edit - Student</h2>
</div>

    <div class="container mb-3 fs-3">
        <a href="{{url('students/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow" style="width: 50%">

        <form action="{{url('students/' . $student->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group mt-2">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$student->name}}">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" value="{{$student->address}}">
                @error('address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{$student->email}}">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="phone">Contact</label>
                <input type="text" name="phone" class="form-control" value="{{$student->phone}}">
                @error('phone')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="birthdate">Birth Date</label>
                <input type="date" name="birthdate" class="form-control" value="{{$student->birthdate}}">
                @error('birthdate')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="year_level">Year Level</label>
                <input type="text" name="year_level" class="form-control" value="{{$student->year_level}}">
                @error('year_level')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="submit" class="btn btn-primary">
                    Edit User
                </button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                    Delete User
                  </button>
            </div>
        </form>
    </div>

    
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User - {{$student->name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('students/delete/' . $student->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are you sure you want to delete this student?
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
