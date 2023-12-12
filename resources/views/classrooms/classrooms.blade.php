@extends('page.base')

@section('content')
    
    <div class="border shadow mb-5">
        <h2 class="ms-2 text-primary">Classroom</h2>
    </div>

 
    <div class="container border shadow rounded" style="width: 90%">
        
            
        @if(session('message'))
        <div class="mb-2 mt-2 alert alert-success">
            {{session('message')}}
        </div>
        @endif

        <div class="row align-center">
            <p class="text-decoration-underline fw-bold mt-3 h5 text-success col-9">List of Classroom</p>
            <div class="col mt-3 ms-2">
              <input type="text" id="searchInput" placeholder="Search by ID" class="ms-4">
              <a href="{{url('/classrooms/create')}}" class=" btn bg-primary text-white">
                <i class="fa-solid fa-plus"></i>
            </a>  
              
            </div>
        </div>

        <div class="bg-white mt-2">
            <table class="table table-bordered table-striped " id="studentTable">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Capacity</th>
                        <th>Room Type</th>
                        <th>Room Number</th>
                        <th>Floor Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($classrooms as $classroom): ?>

                    <tr>
                        <td>{{$classroom->id}}</td>
                        <td>{{$classroom->capacity}}</td>
                        <td>{{$classroom->room_type}}</td>
                        <td>{{$classroom->room_num}}</td>
                        <td>{{$classroom->floor_level}}</td>
                        <td class="text-center">
                                <a href="{{url('/classrooms/' . $classroom->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                    </svg>
                                </a>  
                        </td>
                    </tr>

                
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
      
    </div>


    <script>
      function filterTable() {
          var input, filter, table, tr, td, i, txtValue;
          
          input = document.getElementById("searchInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("studentTable"); 
          tr = table.getElementsByTagName("tr");
  
          for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
  
              if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                  } else {
                      tr[i].style.display = "none";
                  }
              }
          }
      }
      $(document).ready(function () {
          $("#searchInput").on("input", function () {
              filterTable();
          });
      });
  </script>

@endsection