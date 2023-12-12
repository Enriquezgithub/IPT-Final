@extends('page.base')

@section('content')

<div class="border shadow mb-3">
    <h2 class="ms-2 text-primary">Edit - Teacher</h2>
</div>

    <div class="container mb-3 fs-3">
        <a href="{{url('teachers/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow" style="width: 50%">

        <form action="{{url('teachers/' . $teacher->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$teacher->name}}">
                @error('name')
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{$teacher->email}}">
                  @error('email')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="address" class="col-form-label">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" value="{{$teacher->address}}">
                  @error('address')
                  <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
              <div class="mb-3">
                  <label for="phone" class="col-form-label">Contact #:</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{$teacher->phone}}">
                  @error('phone')
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="department" class="col-form-label">Department:</label>
                    <select name="department" id="department" >  
                        <option value="{{$teacher->department}}">{{$teacher->department}}</option>
                        <option value="COE">COE</option>
                        <option value="CAST">CAST</option>
                        <option value="CON">CON</option>
                        <option value="CCJ">CCJ</option>
                        <option value="CABM">CABM</option>
                    </select>
                  @error('department')
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User - {{$teacher->name}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('teachers/delete/' . $teacher->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Are you sure you want to delete this teacher?
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
