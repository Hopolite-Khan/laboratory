@extends('layouts.app')
@section('content')


<div class="card">
    <div class="card-body fs-5 fw-bold d-flex justify-content-between">
        <span>{{ __('Patient Profile') }}</span>
        <span>
            <a href="{{  route('PrintPatientsBarcode' , ['id' =>  $RESERVATION->id ] )  }}" class = "btn btn-sm btn-primary" >Print Barcode</a>
        </span>
    </div>
</div>






<div class="row">
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon purple">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style = "color:white;" fill="currentColor"  viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                        </svg>


                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Payment Method</h6>
                        <h6 class="font-extrabold mb-0">0</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style = "color:white;" fill="currentColor"   viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                        </svg>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Paid Amount</h6>
                        <h6 class="font-extrabold mb-0">{{number_format($RESERVATION->payment_amount ,2)}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon green">
                            <svg xmlns="http://www.w3.org/2000/svg"width="30" height="30" style = "color:white;"  fill="currentColor"   viewBox="0 0 16 16">
                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
                            <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Reservation</h6>
                        <h6 class="font-extrabold mb-0">{{$RESERVATION->reservation_count}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon red">
                            <svg width="30" height="30" viewBox="0 0 337 337" style = "color:white;"  fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M225.302 95.6333H104.502C104.502 95.6333 104.502 95.6333 104.402 95.6333H86.1016C73.4016 95.6333 63.1016 105.933 63.1016 118.633V202.133C63.1016 214.833 73.4016 225.133 86.1016 225.133H104.402H225.302H243.602C256.302 225.133 266.602 214.833 266.602 202.133V118.633C266.602 105.933 256.302 95.6333 243.602 95.6333H225.302ZM251.602 141.533V179.133C234.302 179.933 220.202 193.133 218.002 210.033H111.702C109.502 193.133 95.4016 179.933 78.1016 179.133V141.533C95.4016 140.733 109.502 127.533 111.702 110.633H218.002C220.202 127.533 234.302 140.733 251.602 141.533ZM86.1016 110.633H96.5016C94.5016 119.233 87.1016 125.733 78.1016 126.533V118.633C78.1016 114.233 81.7016 110.633 86.1016 110.633ZM78.1016 202.033V194.133C87.1016 194.833 94.5016 201.433 96.5016 210.033H86.1016C81.7016 210.033 78.1016 206.433 78.1016 202.033ZM243.702 210.033H233.302C235.302 201.433 242.702 194.933 251.702 194.133V202.033C251.602 206.433 248.102 210.033 243.702 210.033ZM251.602 118.533V126.433C242.602 125.733 235.202 119.133 233.202 110.533H243.602C248.102 110.633 251.602 114.233 251.602 118.533Z" fill="white"/>
                                <path d="M164.899 193.033C182.899 193.033 197.599 178.333 197.599 160.333C197.599 142.333 182.899 127.633 164.899 127.633C146.899 127.633 132.199 142.333 132.199 160.333C132.199 178.333 146.799 193.033 164.899 193.033ZM164.899 142.633C174.699 142.633 182.599 150.533 182.599 160.333C182.599 170.133 174.699 178.033 164.899 178.033C155.099 178.033 147.199 170.133 147.199 160.333C147.199 150.533 155.099 142.633 164.899 142.633Z" fill="white"/>
                                <path d="M168.2 336.533C213.1 336.533 255.3 319.033 287.1 287.233C316.6 257.733 334 218.533 336.1 176.833C336.3 172.733 333.1 169.133 329 168.933C324.9 168.733 321.3 171.933 321.1 176.033C319.2 213.933 303.3 249.633 276.4 276.533C247.5 305.433 209 321.433 168.1 321.433C127.2 321.433 88.7 305.533 59.8 276.533C0.099987 216.833 0.099987 119.633 59.8 59.9331C110.7 9.03311 189.9 0.533108 250.1 38.8331L233.2 59.5331L281.7 54.6331L276.8 6.13311L259.7 27.1331C193.4 -16.0669 105.5 -6.96689 49.2 49.3331C-16.4 114.933 -16.4 221.533 49.2 287.133C81.1 319.033 123.3 336.533 168.2 336.533Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6 class="text-muted font-semibold"> Refund </h6>
                        <h6 class="font-extrabold mb-0">0</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





 <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between ">
                <h4 class="card-title fw-bold fs-5"> Patient Information</h4>
                <div class="badge bg-dark badge-pill badge-round ">{{$RESERVATION->status}}</div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> {{$RESERVATION->full_name}} </span>
                        <span class="badge bg-dark badge-pill badge-round ml-1">Full Name</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> {{$RESERVATION->id}} </span>
                        <span class="badge bg-dark badge-pill badge-round ml-1">ID</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> {{$RESERVATION->mobile}} </span>
                        <span class="badge bg-dark badge-pill badge-round ml-1">Mobile</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> {{$RESERVATION->gender}} </span>
                        <span class="badge bg-dark badge-pill badge-round ml-1">Gender</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> {{$RESERVATION->country}} </span>
                        <span class="badge bg-dark badge-pill badge-round ml-1">Country</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> {{$RESERVATION->passport_id}} </span>
                        <span class="badge bg-dark badge-pill badge-round ml-1">Passport</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span> {{$RESERVATION->id_type}} </span>
                        <span class="badge bg-dark badge-pill badge-round ml-1">ID Type</span>
                    </li>

                </ul>
            </div>
        </div>
     </div>




 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-0 ">
    <div class="card mb-3 " >
        <div class="card-body   ">
            <ul class="list-group ">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span> {{$HOSPITAL && $HOSPITAL->name}} </span>
                    <span class="badge bg-dark badge-pill badge-round ml-1">Hospital Name</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span> {{$HOSPITAL && $HOSPITAL->address }}  </span>
                    <span class="badge bg-dark badge-pill badge-round ml-1">Address</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span> {{$HOSPITAL && $HOSPITAL->landmark}}   </span>
                    <span class="badge bg-dark badge-pill badge-round ml-1">Landmark</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span> {{$HOSPITAL && $HOSPITAL->status }}   </span>
                    <span class="badge bg-dark badge-pill badge-round ml-1">Status</span>
                </li>
            </ul>
        </div>
    </div>



    <div class="card ">
        <div class="card-body fs-5 fw-bold  ">
            <div class = "text-center" >
                <div class = "mb-1" ><?php  echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("{$RESERVATION->mobile}" , 'C39+',1,40 ) . '" alt="barcode"   />'; ?> </div>
                <div style = "font-size:12px;" > {{$RESERVATION->mobile}} / DOB: {{$RESERVATION->dob}}  </div>
                <div class = "fs-3" >{{$RESERVATION->full_name}} </div>
            </div>
        </div>
    </div>





 </div>





 <div class="card mb-5 shadow "  >
   <div class="card-body  table-responsive    ">

        <table class="table bg-white" id = "searchTab" >
                <tr  style = " background-color:#4a3aae; color:white;   font-weight:bold;   " >
                    <th  style = "border-top-left-radius:10px; border-bottom-left-radius:10px;" >Test ID</th>
                    <th>Test Type</th>
                    <th>Test Name</th>
                    <th>Test Price</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th style = " border-top-right-radius:10px; border-bottom-right-radius:10px; " >Action</th>
                </tr>


            @foreach($RESERVE as $reserve)
                <tr>
                    <td>{{$reserve->lab_test_id}}  </td>
                    <td>{{$reserve->test_type}}  </td>
                    <td> {{$reserve->test_name}} </td>
                    <td>{{$reserve->test_price}}  </td>
                    <td>{{$reserve->payment_method}}  </td>
                    <td> {{$reserve->status}}</td>
                    <td>
                        <a href="#" class = "btn btn-dark btn-sm ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                        </svg>
                        Print</a>
                    </td>
                </tr>
            @endforeach
        </table>



 </div>
 </div>







@endsection
