@extends('page.base')

@section('content')

    <div class="border shadow mb-3 title bg-white">
        <h2 class="ms-2 text-primary">Create - Student</h2>
    </div>
    
    <div class="container fs-3 mt-5">
        <a href="{{url('students/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mb-5" style="width: 50%">

        <form method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control">
                @error('address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" >
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="phone">Contact</label>
                <input type="text" name="phone" class="form-control" >
                @error('phone')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="birthdate">Birth Date</label>
                <input type="date" name="birthdate" class="form-control">
                @error('birthdate')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="year_level">Year Level</label>
                <input type="text" name="year_level" class="form-control">
                @error('year_level')
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