@extends('layouts.app')
@section('content')
 


    

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        
    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class = "my-2" > 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>
                Patinets List    
            </h5>
            <div>
                <a href="{{ route('PatientRegistration') }}" class = "btn btn-outline-primary  my-1"  title = " " >  
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16" >
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg> 
                    Register Patient 
                </a>
            </div>
        </div>
    </div>


   
 <!--  -->

 <div class="card mb-5 shadow " style = "background-color:" >
   <div class="card-body  table-responsive    ">

        <table class="table   bg-white"  id = "searchTab"  >
            <thead style = "  background-color:#4a3aae;  ">
                <tr style = " background-color:#4a3aae; color:white;  border-radius:10px; font-weight:bold;   " >
                <th tyle = "border-top-left-radius:10px; border-bottom-left-radius:10px; " >Name</th>
                <th>Mobile</th>
                <th>Identity Type</th>
                <th>Identity ID </th>
                <th>Nationality</th>
                <th>DOB</th>
                <th>Gender</th>
                <th style = "border-top-right-radius:10px; border-bottom-right-radius:10px;"  >Action</th>
            </tr>
          </thead>
          <tbody>

          @foreach($PATIENTS as $PATIENT)
          <tr>
            <td>{{$PATIENT->full_name}}  </td>
            <td>{{$PATIENT->mobile}}  </td>
            <td>{{$PATIENT->id_type}}  </td>
            <td>{{$PATIENT->passport_id}}  </td>
            <td>{{$PATIENT->nationality}}  </td>
            <td>DOB </td>
            <td>{{$PATIENT->gender}}  </td>
            <td>
                <a href="" class = "text-warning m-0 p-0 " > 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
            </td>
          </tr>
            @endforeach

     
          </tbody>
        </table>
 

</div>
 </div>
 </div>










@endsection 



