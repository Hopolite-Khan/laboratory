

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href=" {{asset('assets/css/main/app.css')}} ">
     
</head>

<body>
    


 
 <div class="card mb-5 ">
    <div class="card-body fs-5 fw-bold d-flex justify-content-between">
        <span>{{ __('Patient Barcode') }}</span>
    </div>
</div>



    <div class="card ">
        <div class="card-body fs-5 fw-bold  ">
            <div class = "text-center" >
                <div class = "mb-1" ><?php  echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('4', 'C39+',3,40 ) . '" alt="barcode"   />'; ?> </div>   
                <div style = "font-size:12px;" > {{$RESERVATION[0]->mobile}} / DOB: {{$RESERVATION[0]->dob}}  </div> 
                <div class = "fs-3" >{{$RESERVATION[0]->full_name}} </div>
            </div>
        </div>
    </div>



    
    
</body>

</html>
 