@extends('layouts.app')
@section('content')
    
    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class = "my-2" > 
            <svg width="45" height="45" viewBox="0 0 438 338" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M226.168 32.873H211.168V48.291H195.75V63.291H211.168V78.708H226.168V63.291H241.586V48.291H226.168V32.873Z" fill="#7C8DB5"/>
            <path d="M374.181 129.594H63.1562V144.594H374.181V129.594Z" fill="#7C8DB5"/>
            <path d="M374.181 162.606H63.1562V177.606H374.181V162.606Z" fill="#7C8DB5"/>
            <path d="M374.181 195.619H63.1562V210.619H374.181V195.619Z" fill="#7C8DB5"/>
            <path d="M374.181 228.631H63.1562V243.631H374.181V228.631Z" fill="#7C8DB5"/>
            <path d="M140.912 96.582H63.1562V111.582H140.912V96.582Z" fill="#7C8DB5"/>
            <path d="M374.182 96.582H296.426V111.582H374.182V96.582Z" fill="#7C8DB5"/>
            <path d="M374.18 261.643H276.781V276.643H374.18V261.643Z" fill="#7C8DB5"/>
            <path d="M374.18 294.655H276.781V309.655H374.18V294.655Z" fill="#7C8DB5"/>
            <path d="M160.555 261.643H63.1562V276.643H160.555V261.643Z" fill="#7C8DB5"/>
            <path d="M160.555 294.655H63.1562V309.655H160.555V294.655Z" fill="#7C8DB5"/>
            <path d="M429.839 322.484H405.422V69.707C405.422 65.565 402.065 62.207 397.922 62.207H274.46V7.5C274.46 3.358 271.103 0 266.96 0H170.378C166.235 0 162.878 3.358 162.878 7.5V62.207H39.418C35.275 62.207 31.918 65.565 31.918 69.707V322.484H7.5C3.357 322.484 0 325.842 0 329.984C0 334.126 3.357 337.484 7.5 337.484H429.839C433.982 337.484 437.339 334.126 437.339 329.984C437.339 325.842 433.981 322.484 429.839 322.484ZM177.878 15H259.46V96.582H177.878V15ZM193.43 322.484V276.718H211.17V322.484H193.43ZM226.17 322.484V276.718H243.909V322.484H226.17ZM258.909 322.484V269.218C258.909 265.076 255.552 261.718 251.409 261.718H185.93C181.787 261.718 178.43 265.076 178.43 269.218V322.484H46.918V77.207H162.878V104.082C162.878 108.224 166.235 111.582 170.378 111.582H266.96C271.103 111.582 274.46 108.224 274.46 104.082V77.207H390.422V322.484H258.909Z" fill="#7C8DB5"/>
            </svg>

                Hospital Registeration Form     
            </h5>
            <div> <a href="{{ route('GetHospital') }}" class = "btn btn-outline-primary  my-1"  title = " " >  Back  </a> </div>
        </div>
    </div>



    <div class="card mt-4 mb-5 shadow ">
	<div class="card-body">
		<form action="{{ route('StoreHospital') }}" method="POST"  >
            @csrf
		<!-- <form action="" method="POST" >  --> 
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  mt-2">
					<label class="form-label" for="full_name">Hospital Name </label>
					<input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} "  value = "{{old('name')}}"  name="name" id="name" >
                    @if ($errors->has('name'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('name') }}
                        </div>
                     @endif

				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12   mt-2">
                    <label class="form-label" for="address">Address </label>
					<input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }} "  value = "{{old('address')}}"  name="address" id="address" >
                    @if ($errors->has('address'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('address') }}
                        </div>
                     @endif
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-2">
					<label class="form-label" for="type">Hospital Type</label>
                    <select class="form-select {{ $errors->has('type') ? 'is-invalid' : '' }} " name="type" id="type">
                        <option value="PH"> Private Hospital </option>
                        <option value="GH"> Governmental Hospital </option>
					</select>
                    @if ($errors->has('type'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('type') }}
                        </div>
                     @endif
				</div>

				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12  mt-2">
					<label class="form-label" for="landmark"> Land mark </label>
					<input type="text" class="form-control {{ $errors->has('landmark') ? 'is-invalid' : '' }}  " name="landmark"  value = "{{old('landmark')}}"  id="landmark" >
                    @if ($errors->has('landmark'))
                        <div  class="invalid-feedback" >
                            {{ $errors->first('landmark') }}
                        </div>
                     @endif
				</div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  mt-2">
                    <label for=""></label>
                    <div class ="mt-1 d-flex justify-content-end" >
                     <button type="submit" class = "btn" style = "background-color:#4a3aae;color:white; border-radius:5px; "  > Register</button>
                     </div>
				</div>


                 
 
			 
		</div><!-- END OF FIRST ROW IN THE PAGE  -->
</form>

</div><!-- END OF Card-body --> 
</div>


@endsection 



