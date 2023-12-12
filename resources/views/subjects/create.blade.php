@extends('page.base')

@section('content')

    <div class="border shadow mb-3 title bg-white">
        <h2 class="ms-2 text-primary">Create - Subject</h2>
    </div>
    
    <div class="container fs-3 mt-5">
        <a href="{{url('subjects/')}}" class="text-secondary">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>

    <div class="container border shadow mt-5" style="width: 50%">

        <form method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="name">Course No</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
                @error('description')
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