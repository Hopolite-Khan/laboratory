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
                All Availabile Test     
            </h5>
            <div>
                <a href="{{ route('LabTestsRegistration') }}" class = "btn btn-outline-primary  my-1"  title = " " >  
                        <svg width="15" height="25" viewBox="0 0 10 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.05194 0.498047H1.7204C1.04525 0.498047 0.497986 1.04536 0.497986 1.72046C0.497986 2.39561 1.0453 2.94287 1.7204 2.94287H8.05194C8.72709 2.94287 9.27435 2.39556 9.27435 1.72046C9.2744 1.04536 8.72709 0.498047 8.05194 0.498047Z" fill="#D5E2E8"/>
                        <path d="M7.88672 2.94238H1.88574V9.94336H7.88672V2.94238Z" fill="#D5E2E8"/>
                        <path d="M1.88574 9.94434V21.5018C1.88574 23.1589 3.2291 24.5023 4.88623 24.5023C6.54336 24.5023 7.88672 23.1589 7.88672 21.5018V9.94434H1.88574Z" fill="#FF422D"/>
                        <path d="M9.77241 1.72041C9.77241 0.771826 9.00064 0 8.05195 0H1.72041C0.771778 0 0 0.771826 0 1.72041C0 2.55522 0.597755 3.25283 1.3877 3.40825V9.94394V21.5015C1.38774 23.4306 2.95713 25 4.88623 25C6.81533 25 8.38472 23.4306 8.38472 21.5015V9.94404V3.40825C9.17461 3.25283 9.77241 2.55522 9.77241 1.72041ZM7.38872 9.446H2.38374V3.44087H7.38872V9.446ZM7.38872 21.5015C7.38872 22.8814 6.26611 24.004 4.88623 24.004C3.50635 24.004 2.38374 22.8814 2.38374 21.5015V10.442H7.38872V21.5015ZM8.05195 2.44487H7.88672H1.88574H1.72046C1.321 2.44487 0.996045 2.11992 0.996045 1.72046C0.996045 1.321 1.321 0.995996 1.72046 0.995996H8.052C8.45146 0.995996 8.77647 1.32095 8.77647 1.72041C8.77647 2.11987 8.45147 2.44487 8.05195 2.44487Z" fill="black"/>
                        <path d="M3.60823 17.7214C3.88328 17.7214 4.10623 17.4985 4.10623 17.2234V16.6123C4.10623 16.3372 3.88328 16.1143 3.60823 16.1143C3.33318 16.1143 3.11023 16.3372 3.11023 16.6123V17.2234C3.11023 17.4985 3.33318 17.7214 3.60823 17.7214Z" fill="black"/>
                        <path d="M3.60823 15.2203C3.88328 15.2203 4.10623 14.9974 4.10623 14.7223V11.833C4.10623 11.5579 3.88328 11.335 3.60823 11.335C3.33318 11.335 3.11023 11.5579 3.11023 11.833V14.7223C3.11023 14.9974 3.33318 15.2203 3.60823 15.2203Z" fill="black"/>
                        </svg>
                    Register Test 
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
                <th>Name</th>
                <th>Type</th>
                <th>Date</th>
                <th>Price </th>
                <th>Tax</th>
                <th>Discount</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>

          @foreach($LabTests as $PATIENT)
          <tr>
            <td>{{$PATIENT->test_name}}  </td>
            <td>{{$PATIENT->test_type}}  </td>
            <td>{{$PATIENT->test_date}}  </td>
            <td>{{$PATIENT->test_price}}  </td>
            <td>{{$PATIENT->tax}}  </td>
            <td>{{$PATIENT->discount}}  </td>
            <td>
            <a href="" class = "text-warning m-0 p-0 " > 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25-" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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



