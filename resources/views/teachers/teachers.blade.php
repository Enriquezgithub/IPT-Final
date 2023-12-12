@extends('page.base')

@section('content')
    
    <div class="border shadow mb-5">
        <h2 class="ms-2 text-primary">Teacher</h2>
    </div>


{{-- 

    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Create new student</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
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
                    <select name="department" id="department">  
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
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </form>
        </div>
      </div>
    </div>  --}}

 
    <div class="container border shadow rounded" style="width: 90%">
        
            
        @if(session('message'))
        <div class="mb-2 mt-2 alert alert-success">
            {{session('message')}}
        </div>
        @endif

        <div class="row align-center">
            <p class="text-decoration-underline fw-bold mt-3 h5 text-success col-9">List of Teacher</p>
            <div class="col mt-3 ms-2">
              <input type="text" id="searchInput" placeholder="Search by ID" class="ms-4">
              <a href="{{url('/teachers/create')}}" class=" btn bg-primary text-white">
                <i class="fa-solid fa-plus"></i>
            </a>  
              
            </div>
        </div>

        <div class="bg-white mt-2">
            <table class="table table-bordered table-striped " id="studentTable">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teachers as $teacher): ?>

                    <tr>
                        <td>{{$teacher->id}}</td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->address}}</td>
                        <td>{{$teacher->phone}}</td>
                        <td>{{$teacher->department}}</td>
                        <td class="text-center">
                                <a href="{{url('/teachers/' . $teacher->id)}}">
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