@extends('layouts.app')
@section('content')




<style>
    .stepper-wrapper {
    font-family: Arial;
    margin-top: 10px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 0px;
    }
    .stepper-item {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;


    @media (max-width: 768px) {
        font-size: 12px;
    }
    }

    .stepper-item::before {
    position: absolute;
    content: "";
    border-bottom: 2px solid #ccc;
    width: 100%;
    top: 20px;
    left: -50%;
    z-index: 2;
    }

    .stepper-item::after {
    position: absolute;
    content: "";
    border-bottom: 2px solid #ccc;
    width: 100%;
    top: 20px;
    left: 50%;
    z-index: 2;

    }

    .stepper-item .step-counter {
    position: relative;
    z-index: 5;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #ccc;
    margin-bottom: 6px;
    /* background-color: yellow; */

    }

    .stepper-item.active {
    font-weight: bold;
    color:#0F3460
    }

    .stepper-item.completed .step-counter {
    background-color: #6BCB77;
    color:white;
    }
    /* #198754 */
    .stepper-item.completed::after {
    position: absolute;
    content: "";
    border-bottom: 2px solid #6BCB77;
    width: 100%;
    top: 20px;
    left: 50%;
    z-index: 3;
    }

    .stepper-item:first-child::before {
    content: none;
    }
    .stepper-item:last-child::after {
    content: none;
    }


</style>



    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class = "my-2" >
                <i class="bi-card-list fs-2"    ></i>
               Booking Sales
</h5>
            <div>
                <a href="{{ route('LabTest') }}" class = "btn btn-outline-primary  my-1"  title = " " >
                   Back
                </a>
            </div>
        </div>
    </div>

 


    
    <div class="card mb-3 shadow">
        <div class="card-body  ">
            <div class="stepper-wrapper">
                <div class="stepper-item    " id = "first_circle"  >
                    <div class="step-counter " >1</div>
                    <div class=" ">Select Account</div>
                </div>

                <div class="stepper-item " id = "second_circle">
                    <div class="step-counter " >2</div>
                    <div class="" >Add Test</div>
                </div>

                <div class="stepper-item   " id = "third_circle">
                    <div class="step-counter "  >3</div>
                    <div class="" >Booking Review</div>
                </div>
            </div>
        </div>
    </div>




    <div class="card   mb-5 shadow ">
	<div class="card-body">

        <div class="row  " id = "FirstStep"    >
            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12  " style="z-index: 11;">
                    <div class="form-group position-relative has-icon-right">
                        <input type="text" class="form-control" name="patient_name" onclick="HideLiveSearch()" placeholder="Search Patients "
                        onkeyup = "AjaxSearch(this.value)"  id="patient_name" autocomplete="off">
                        <div class="form-control-icon">
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                    <div class="list-group shadow z-index-2 position-absolute mt-1" id = "patients_list" style = "display:none;"> </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12  mb-2 ">
                <a href="{{route('PatientRegistration'); }}" class="btn  w-100" style = "background-color:#4a3aae;color:white;  "    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class=" bi-plus-circle" viewBox="0 0 16 16"  >
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                New Patient
                </a>
            </div><!-- END OF FIRST ROW IN THE PAGE  -->


            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12  ">
                <select class="form-select  " name = "booking_type"   id="booking_type">
                        <option value="Normal Booking">Normal Booking</option>
                        <option value="Special Booking">Package Booking</option>
                </select>
            </div>

        </div><!-- END OF FIRST ROW IN THE PAGE  -->




        <div class="row">
            <div class="col">

                <table class="table   bg-white"  id = "SecondStep" style = "display:none;"  >
                <thead style = "  background-color:#4a3aae;  ">
                        <tr style = " background-color:#4a3aae; color:white;  border-radius:10px; font-weight:bold;   " >
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody id = "SecondStepTbody" >
                    @foreach($PATIENTS as $PATIENT)
                        <tr style = "display:none;" id = "tr_{{$PATIENT->id}}" >
                            <td>{{$PATIENT->full_name}} </td>
                            <td>{{$PATIENT->mobile}} </td>
                            <td>{{$PATIENT->gender}} </td>
                            <td><button type="button" class="btn btn-primary "   data-bs-toggle="modal" data-bs-target="#large"> Add Test </button></td>
                        </tr>
                    @endforeach
                </tbody>
                </table>

                <table class="table   bg-white"  id = "ThirdStep" style = "display:none;"  >
                    <thead style = "  background-color:#4a3aae;  ">
                        <tr style = " background-color:#4a3aae; color:white;  border-radius:10px; font-weight:bold;   " >
                            <th>Test</th>
                            <th>Booking Type</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Identity Type</th>
                            <th>Identity ID </th>
                            <th>Nationality</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody id = "reservationTbody" >
                @foreach($PATIENTS as $PATIENT)
                <tr style = "display:none;" id = "tr1_{{$PATIENT->id}}" >
                    <td>{{$PATIENT->full_name}}  </td>
                    <td>{{$PATIENT->mobile}}  </td>
                    <td>{{$PATIENT->id_type}}  </td>
                    <td>{{$PATIENT->passport_id}}  </td>
                    <td>{{$PATIENT->nationality}}  </td>
                    <td>DOB </td>
                    <td>{{$PATIENT->gender}}  </td>
                    <td>
                    </td>
                </tr>
                    @endforeach
                </tbody>
                </table>

            </div>
        </div>

      
        <div class="row mt-2">
            <div class="col d-flex justify-content-end">
                <button type="submit"  id = 'first_next'  onclick = "FirstStep()" class = "btn" style = "background-color:#4a3aae;color:white; border-radius:5px; "  disabled> NEXT</button>
                <button type="submit"  id = 'second_next_back' class = "btn mx-2"
                style = "background-color:#4a3aae;color:white; border-radius:5px;  display:none;" onclick = "FirstStepBack()"   > PREVIOUS</button>
                <a  id = 'third_next_back' class = "btn mx-2"
                style = "background-color:#4a3aae;color:white; border-radius:5px; display:none;" onclick="SecondStepBack();"  > PREVIOUS</a>
                <button type="button" class="btn btn-primary "  id = 'third_next'  data-bs-toggle="modal" data-bs-target="#large1" style = "display:none;" onclick=" "> Booking Details </button>
            </div>
        </div>


    </div><!-- END OF Card-body -->
    </div>








    <div class="modal fade text-left" id="large" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Assign Tests to the selected patient</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                
                <div class="card">
                    <div class="card-header">

                        <div class="form-group position-relative has-icon-right">
                            <input type="text" class="form-control" name="test_name_search" onclick="HideLiveSearch()" placeholder="Search Tests "
                            onkeyup = "AjaxSearch(this.value, true)"  id="test_name_search" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-search"></i>
                            </div>
                        </div>
                        <div class="list-group shadow z-index-2 position-absolute mt-1" id = "tests_list" style = "display:none;"> </div>

                    </div>
                </div>
                

                    <table class="table mt-3 bg-white"  id = "searchTab"  >
                        <thead style = "  background-color:#4a3aae;  ">
                            <tr style = " background-color:#4a3aae; color:white;  border-radius:10px; font-weight:bold;   " >
                                <th>ID</th>
                                <th>Test Name</th>
                                <th>Type</th>
                                <th>Test Price   <span class = "badge bg-warning" > SAR</span></th>
                                <th>Action </th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php $counter = 1; $class = 'none'; ?>
                                @foreach($TESTS as $test)

                                    @if($counter >=  3)
                                        <?php  $class  = '';  ?>
                                    @endif  <?php $counter++ ?>


                                    <tr style = "display: {{$class}}"  id = "test_tr_{{$test->id}}" >
                                        <td>{{$test->id}}</td>
                                        <td>{{$test->test_name}}</td>
                                        <td>{{$test->test_type}}</td>
                                        <td>{{number_format($test->test_price , 2 )}}</td>
                                        <td>
                                            <div class="form-check">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="form-check-input form-check-blue form-check-glow fs-5" onclick="AssignTestToPatient({{$test->id}} , '{{$test->test_name}}'  , {{$test->test_price}} )" id = "add_{{$test->id}}"  >
                                                    <label class="form-check-label  fs-5" for="customColorCheck3">Add</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                  
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal" onclick="BookingReview()">
                        <span class="d-none d-sm-block">Assign</span>
                    </button>
                </div>
            </div>
        </div>
    </div>






    <div class="modal fade text-left" id="large1" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Booking Quotation</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table mt-3 bg-white"  id = "searchTab"  >
                        <thead style = "  background-color:#4a3aae;  ">
                            <tr style = " background-color:#4a3aae; color:white;  border-radius:10px; font-weight:bold;   " >
                                <th>Test Name</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody id = "BookingQuotationTbody" >
                            <tr colspan = '2'  > <td class="fw-bold">Total</td><td class="fw-bold" id = "total_price_td"></td> </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <form method="post" action="{{ route('StoreReservation') }}"  id = "reservationForm" > @csrf 

                        <input type="hidden" name="patient_id" id = "patient_id" >
                        <input type="hidden" name="booking_type" id = "BookingType" >

                        <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal" onclick="BookingReview()">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Cash on Delivery</span>
                        </button>

                    </form> 

                </div>
            </div>
        </div>
    </div>










<script>

    let FINAL  = '';
    let reservation = {};
    let test_total_price = 0 ; 



    
    function HideLiveSearch(){
        document.getElementById('patients_list').style.display = 'none';
    }

    function AjaxSearch(str , tests=false){

        if (  str.trim().length === 0) {  return ;  }
        else {

            var xhr = new XMLHttpRequest();

            if(tests){

                document.getElementById('tests_list').style.display = '';
                xhr.open('get' , "{{url('/TestSearch')}}/" + str , true );
                xhr.onload  = function () {
                    var result = JSON.parse(this.responseText);
                    if(result == '') {
                        document.getElementById('tests_list').innerHTML = '<button type="button" class="list-group-item"  > No Result Found Yet </button> ' ;
                        return ;
                    }
                    var HTML = '';
                    for(var count = 0; count < result.length; count++) {
                            HTML += '<button type="button" class="list-group-item text-start" onclick = "ActivateNewTest(' +  result[count].id + ',`' + result[count].test_name  + '`,' + result[count].test_price + ')   ">';
                            HTML += result[count].test_name + ' : ' + result[count].test_price + " SARS"; 
                            HTML += '</button>';
                    }
                    document.getElementById('tests_list').innerHTML = HTML ;
                }
            }
            else {

                document.getElementById('patients_list').style.display = '';
                xhr.open('get' , "{{url('/PatientSearch')}}/" + str , true );
                xhr.onload  = function () {
                    var result = JSON.parse(this.responseText);
                    if(result == '') {
                        document.getElementById('patients_list').innerHTML = '<button type="button" class="list-group-item "  > No Result Found Yet </button> ' ;
                        return ;
                    }
                    var HTML = '';
                    for(var count = 0; count < result.length; count++) {
                            HTML += ' <button type="button" onclick = "PutPatientIdToHiddenField(' + result[count].id + ',`' + result[count].full_name + ' - ' + result[count].mobile  +   '` )" class="list-group-item text-start">';
                            HTML += result[count].full_name + ' - ' + result[count].mobile;
                            HTML += '</button>';
                    }
                    document.getElementById('patients_list').innerHTML = HTML ;
                }
            }
        xhr.send();


        }







    }



    function ActivateNextBtn(){
        document.getElementById('first_next').disabled='';
    }

    function FirstStep( ){

        // hight lighlight second circle
        document.getElementById('SecondStep').style.display = '';
        document.getElementById('FirstStep').style.display = 'none';

        // show second step next and abck button and hide the first step next button
        document.getElementById('second_next_back').style.display = '';
        // document.getElementById('second_next').style.display = '';
        document.getElementById('first_next').style.display = 'none';

        let patient_id = document.getElementById('patient_id').value;

        let bt = document.getElementById('booking_type');
        let booking_type = bt.options[bt.selectedIndex].value;

        document.getElementById('BookingType').value = booking_type;

        reservation['patient_id'] = patient_id;
        reservation['booking_type'] = booking_type;

        let tr = document.getElementById('tr_'+ reservation['patient_id']);
        tr.style.display = '';

        document.getElementById('second_circle' ).classList += ' completed';

    }

    function FirstStepBack( ){

        let tr = document.getElementById('tr_'+ reservation['patient_id']);
        tr.style.display = 'none';
        document.getElementById('SecondStep').style.display = 'none';
        document.getElementById('FirstStep').style.display = '';

        document.getElementById('first_next').style.display = '';
        document.getElementById('second_next_back').style.display = 'none';

    }






    function AssignTestToPatient(test_id , test_name , test_price){
            let addCheckBox = document.getElementById('add_'+ test_id);

            if(addCheckBox.checked) {

                if(reservation['patient_id'] == '') {
                    alert('Please Select Patient First!');
                    addCheckBox.checked = false;
                    return;
                }
                else {

                    reservation['testId'] = test_id;
                    reservation['test_name'] = test_name;
                    reservation['test_price'] = test_price; 
                    

                    let tr = document.getElementById('tr1_'+ reservation['patient_id']);
                    var NewTr= tr.cloneNode(true);

                    const td1 = document.createElement("td");
                    const td2 = document.createElement("td");

                    td1.innerHTML = test_name;
                    td2.innerHTML = reservation['booking_type'];
                    NewTr.prepend(td2 );
                    NewTr.prepend(td1 );

                    document.getElementById('reservationTbody').appendChild( NewTr) ;
                    NewTr.style.display = '';

                    const TestIdInput = document.createElement("input");
                    TestIdInput.setAttribute("type", "hidden");
                    TestIdInput.setAttribute("name", "test_id_"+test_id);
                    TestIdInput.setAttribute("value", test_id);
                    document.getElementById('reservationForm').prepend(TestIdInput ) ;
                 
                    BookingPrice( test_price , test_name); 
                    test_total_price +=  test_price  
                    document.getElementById('total_price_td').innerHTML = test_total_price;




                }

            }
            else {


            }// END OF ELSE

        }// END OF AssignTestToPatient

        function BookingPrice( test_price , test_name){
            let BQT =  document.getElementById('BookingQuotationTbody');

            const tr = document.createElement("tr");
            const td_name = document.createElement("td");
            const td_price = document.createElement("td");

            td_name.innerHTML = test_name;
            td_price.innerHTML = test_price;

            tr.appendChild(td_name); 
            tr.appendChild(td_price); 
            BQT.prepend(tr); 
        

        }

        function BookingReview() {
            // show hide second step and show third step card
            document.getElementById('SecondStep').style.display = 'none';
            document.getElementById('ThirdStep').style.display = '';
            document.getElementById('second_next_back').style.display = 'none';
            document.getElementById('third_next_back').style.display = '';
            document.getElementById('third_next').style.display = '';
            document.getElementById('third_circle' ).classList += 'completed';
        }

 



    function SecondStepBack(){
        document.getElementById('SecondStep').style.display = '';
        document.getElementById('ThirdStep').style.display = 'none';
        document.getElementById('second_next_back').style.display = '';
        document.getElementById('third_next_back').style.display = 'none';
        document.getElementById('third_next').style.display = 'none';

        // document.getElementById('second_circle' ).classList += 'completed';
    }


    function PutPatientIdToHiddenField(id , val ){
        document.getElementById('patient_id').value = id ;
        document.getElementById('patient_name').value = val ;
        document.getElementById('patients_list').style.display = 'none';
        ActivateNextBtn();
        document.getElementById('first_circle').classList += 'completed';

    }

    function ActivateNewTest(id , test_name , test_price ){
        document.getElementById('test_tr_'+  id).style.display = '';
        document.getElementById('add_'+  id).checked = true; 
        document.getElementById('tests_list').style.display = 'none'; 

        AssignTestToPatient(id , test_name  , test_price );  
        console.log('Assign Test is working ');

    }






   





























</script>



@endsection
