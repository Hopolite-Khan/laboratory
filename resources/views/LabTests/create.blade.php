@extends('layouts.app')
@section('content')


<div class="container">
    
    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class = "my-2" > 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>
                Lab Test Registeration Form     
            </h5>
            <div>
                <a href="{{ route('LabTest') }}" class = "btn btn-outline-primary  my-1"  title = " " >  
                   Back
                </a>
            </div>
        </div>
    </div>



    <div class="card mt-4 mb-5 shadow ">
	<div class="card-body">
		<form action="{{ route('StoreLabTests') }}" method="POST"  >
            @csrf
		<!-- <form action="" method="POST" >  --> 
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="test_name">Test Name </label>
					<input type="text" class="form-control {{ $errors->has('test_name') ? 'is-invalid' : '' }} "  value = "{{old('test_name')}}"  name="test_name" id="test_name" value="">
                    @if ($errors->has('test_name'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('test_name') }}
                        </div>
                     @endif

				</div>
				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12   mt-2">
					<label class="form-label" for="test_type">Test Type</label>
					<select class="form-select {{ $errors->has('test_type') ? 'is-invalid' : '' }} " name="test_type"  id="test_type">
						<option value="Covid">Covid-19</option>
						<option value="Blood">Blood</option>
						<option value="Sample">Sample</option>
					</select>
                    @if ($errors->has('test_type'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('test_type') }}
                        </div>
                     @endif
				</div>


                
				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="test_date"> Test Date </label>
					<input type="datetime-local" class="form-control {{ $errors->has('test_date') ? 'is-invalid' : '' }}  " name="test_date"  value = "{{old('test_date')}}"  id="test_date" value="">
                    @if ($errors->has('test_date'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('test_date') }}
                        </div>
                     @endif
				</div>

			 

				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="test_price"> Test Price</label>
					<input type="text" class="form-control {{ $errors->has('test_price') ? 'is-invalid' : '' }}  " name="test_price"  value = "{{old('test_price')}}"  id="test_price" value="">
                    @if ($errors->has('test_price'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('test_price') }}
                        </div>
                     @endif
				</div>


				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="tax"> Tax Amount  </label>
					<input type="text" class="form-control {{ $errors->has('tax') ? 'is-invalid' : '' }} " value = "{{old('tax')}}" name="tax" id="tax" value="">
                    @if ($errors->has('tax'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('tax') }}
                        </div>
                     @endif
				</div>

                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="mobile"> Discount Amount  </label>
					<input type="text" class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }} " value = "{{old('discount')}}" name="discount" id="discount" value="">
                    @if ($errors->has('discount'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('discount') }}
                        </div>
                     @endif
				</div>
 
		</div><!-- END OF FIRST ROW IN THE PAGE  -->

        <div class="row mt-4">
            <div class="col d-flex justify-content-end">
                <button type="submit" class = "btn me-3" style = "background-color:#4a3aae;color:white; border-radius:5px; "  > Register</button>
                <button type="reset" class = "btn btn-outline-secondary" > Clear </button>
            </div>
        </div>
</form>

</div><!-- END OF Card-body --> 
</div>


</div>
@endsection 



