@extends('page.base')

@section('content')
    
        
    <div class="border shadow title bg-white">
        <h2 class="ms-2 text-primary">Create - Teacher</h2>
    </div>

    <div class="container fs-3 mt-5">
        <a href="{{url('teachers/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>


    <div class="container border shadow mt-4" style="width: 50%">

        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
                @error('name')
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="email" class="col-form-label">Email:</label>
                  <input type="email" class="form-control" id="email" name="email">
                  @error('email')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="address" class="col-form-label">Address:</label>
                  <input type="text" class="form-control" id="address" name="address">
                  @error('address')
                  <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
              <div class="mb-3">
                  <label for="phone" class="col-form-label">Contact #:</label>
                  <input type="text" class="form-control" id="phone" name="phone">
                  @error('phone')
                  <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="department" class="col-form-label">Department:</label>
                    <select name="department" id="department" > 
                        <option hidden="true">Select Department</option>
                        <option selected disabled>Select Department</option> 
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
                <button class="btn btn-primary">
                    Add
                </button>
            </div>
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