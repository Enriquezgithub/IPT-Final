<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        ul{
            list-style: none;
            margin-left: -2rem;
        }
        body{
            display: flex;
        }
        li{
            color: gray;
            margin-bottom: 10px;
        }
        li:hover{
            color: #fff;
            /* transition: all .0s ease; */
        }

        .header a{
            text-decoration: none
        }

        .bg-dark{
            position: fixed;
            z-index: 1111;
        }
    </style>
</head>
<body>
    <div class="bg-dark text-white" style="width:15%; height:100vh;">
        <div class="header">
            <a href="{{url('/')}}" class="d-flex gap-2 fs-4 p-3 text-white">            
                <div><i class="fas fa-circle-user"></i></div>
                <div>Final - Project</div>
            </a>
        </div>
        <hr>
        <ul class="fs-5">
            <li class="nav-item p-2">
                <a href="{{url('/')}}" class="nav-link"><i class="fas fa-home me-2"></i>Home</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{url('/students')}}" class="nav-link "><i class="fa-solid fa-user me-2"></i>Student</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{url('/teachers')}}" class="nav-link "><i class="fa-solid fa-person-chalkboard me-2"></i>Teacher</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{url('/classrooms')}}" class="nav-link "><i class="fa-solid fa-door-open me-2"></i>Classroom</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{url('/subjects')}}" class="nav-link "><i class="fa-solid fa-book me-2"></i>Subject</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{url('/loads')}}" class="nav-link "><i class="fas fa-file-signature me-2"></i>Student_Load</a>
            </li>
            <li class="nav-item p-2">
                <a href="{{url('/semesters')}}" class="nav-link "><i class="fas fa-th-large me-2"></i>Student_Class</a>
            </li>
        </ul>
    </div>

    <div style="width: 90%; margin-left: 14rem;">
        @yield('content')
    </div>
</body>
</html>