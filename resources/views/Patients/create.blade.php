@extends('layouts.app')
@section('content')
    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class = "my-2" >
                <x-plus/>
                Patinets Registeration Form
            </h5>
            <div>
                <a href="{{ route('GetPatient') }}" class = "btn btn-outline-primary  my-1"  title = " " >
                   Back
                </a>
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-5 shadow ">
	<div class="card-body">
		<form action="{{ route('StorePatient') }}" method="POST"  >
            @csrf
		<!-- <form action="" method="POST" >  -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="full_name">Full Name </label>
					<input type="text" class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }} "  value = "{{old('full_name')}}"  name="full_name" id="full_name" value="">
                    @if ($errors->has('full_name'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('full_name') }}
                        </div>
                     @endif

				</div>
				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12   mt-2">
					<label class="form-label" for="id_type">ID Type</label>
					<select class="form-select {{ $errors->has('id_type') ? 'is-invalid' : '' }} " name="id_type"  id="id_type">
						<option value="Passport">Passport</option>
						<option value="Gulf ID ">Gulf</option>
						<option value="National">National</option>
					</select>
                    @if ($errors->has('id_type'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('id_type') }}
                        </div>
                     @endif
				</div>
				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 mt-2">
					<label class="form-label" for="nationality">Nationality</label>
                    <select class="form-select {{ $errors->has('nationality') ? 'is-invalid' : '' }} " name="nationality" id="nationality">
                        <option value="Arab"> Arab </option>
                        <option value="Egyption"> Egyption </option>
                        <option value="Syrian"> Syrian  </option>
                        <option value="Other"> Other </option>
					</select>
                    @if ($errors->has('nationality'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('nationality') }}
                        </div>
                     @endif

				</div>

				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="passport_id"> Passport ID </label>
					<input type="text" class="form-control {{ $errors->has('passport_id') ? 'is-invalid' : '' }}  " name="passport_id"  value = "{{old('passport_id')}}"  id="passport_id" value="">
                    @if ($errors->has('passport_id'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('passport_id') }}
                        </div>
                     @endif
				</div>


				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2">
					<label class="form-label" for="mobile"> Mobile  </label>
					<input type="text" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }} " value = "{{old('mobile')}}" name="mobile" id="mobile" value="">
                    @if ($errors->has('mobile'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('mobile') }}
                        </div>
                     @endif

				</div>

				<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 mt-2">
					<label class="form-label" for="gender">Gender</label>
					<select class="form-select" name="gender" id="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
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


@endsection



