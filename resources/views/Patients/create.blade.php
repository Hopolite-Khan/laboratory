@extends('layouts.app')
@push('styles')
    <style>
        .dropdown-menu {
            min-height: 3rem;
            max-height: 10rem;
            overflow: auto;
            width: calc(100% - 6%);
        }
    </style>
@endpush
@section('content')
    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class="my-2">
                Patinets {{ isset($patient) ? 'Update' : 'Registeration' }} Form
            </h5>
            <div>
                <a href="{{ route('GetPatient') }}" class="btn btn-outline-primary  my-1" title=" ">
                    Back
                </a>
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-5 shadow ">
        <div class="card-body">
            <form action="{{ route('StorePatient') }}" method="post">
                {{-- <input name="_method" type="hidden" value="PUT"> --}}
                @csrf
                <div class="row">
                    @isset($patient)
                        <input type="hidden" name="id" value="{{ $patient->id }}" />
                    @endisset
                    <x-input label="Full Name" id="full_name" value="{{ $patient->full_name ?? '' }}"
                        class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }} ">
                        @if ($errors->has('full_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('full_name') }}
                            </div>
                        @endif
                    </x-input>
                    <x-input value="{{ $patient->id_type ?? '' }}" type="select" id="id_type"
                        options="Passport,Gulf,National" label="ID Type"
                        class="form-select {{ $errors->has('id_type') ? 'is-invalid' : '' }} ">
                        @if ($errors->has('id_type'))
                            <div class="invalid-feedback">
                                {{ $errors->first('id_type') }}
                            </div>
                        @endif
                    </x-input>
                    <x-input value="{{ $patient->nationality ?? '' }}" id="nationality"
                        options="Arab,Egyption,Syrian,Other" label="nationality" type="select"
                        class="form-select {{ $errors->has('nationality') ? 'is-invalid' : '' }} ">
                        @if ($errors->has('nationality'))
                            <div class="invalid-feedback">
                                {{ $errors->first('nationality') }}
                            </div>
                        @endif
                    </x-input>
                    {{-- passport id --}}
                    <x-input value="{{ $patient->passport_id ?? '' }}" id="passport_id" label="Passport ID"
                        class="form-control {{ $errors->has('passport_id') ? 'is-invalid' : '' }}  ">
                        @if ($errors->has('passport_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('passport_id') }}
                            </div>
                        @endif
                    </x-input>
                    {{-- mobile --}}
                    <x-input value="{{ $patient->mobile ?? '' }}" id="mobile" label="mobile"
                        class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}  ">
                        @if ($errors->has('mobile'))
                            <div class="invalid-feedback">
                                {{ $errors->first('mobile') }}
                            </div>
                        @endif
                    </x-input>
                    {{-- gender --}}
                    <x-input value="{{ $patient->gender ?? '' }}" id="gender" label="Gender" type="select"
                        options="Male,Female" class="form-select {{ $errors->has('gender') ? 'is-invalid' : '' }}  ">
                        @if ($errors->has('gender'))
                            <div class="invalid-feedback">
                                {{ $errors->first('gender') }}
                            </div>
                        @endif
                    </x-input>
                    {{-- country --}}
                    <x-input value="{{ $patient->country ?? '' }}" id="country" label="country" type="select"
                        options="Egypt,Afghanistan,Albania,Iran,Iraq,Jordan,Kuwait"
                        class="form-select {{ $errors->has('country') ? 'is-invalid' : '' }}  ">
                        @if ($errors->has('country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country') }}
                            </div>
                        @endif
                    </x-input>
                    {{-- dob --}}
                    <x-input value="{{ $patient->dob ?? '' }}" id="dob" label="date of birth" type="date"
                        class="form-control {{ $errors->has('dob') ? 'is-invalid' : '' }}  ">
                        @if ($errors->has('dob'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dob') }}
                            </div>
                        @endif
                    </x-input>

                    <group class="form-group position-relative col-lg-4 col-md-4 col-sm-8 col-xs-12  mt-2 "
                        x-init='hospitals = (await (await fetch("/hospital/search")).json()).data' x-data='data()'>
                        <label class="form-label" for="hospital">Hospital</label>

                        <input type="hidden" name="hospital_id" :value='selected.id' />
                        <div class="form-group position-relative has-icon-right">
                            <div class="form-control-icon py-1">
                                @svg('search')
                            </div>
                            <input inputmode="search" x-on:click="dropdown=true" x-on:click.outside="dropdown=false" x-model="search"
                                class="form-control {{ $errors->has('hospital') ? 'is-invalid' : '' }}  " type="text"
                                id="hospital">
                        </div>
                        <template x-if="dropdown">
                            <ul class="dropdown-menu shadow position-absolute mt-1 d-block">
                                <template x-if=""></template>
                                <template x-for='hospital in searchItems' :key="hospital.id">
                                    <li x-text="hospital.name" class="dropdown-item" @click="selectItem(hospital)"></li>
                                </template>
                            </ul>
                        </template>
                        @if ($errors->has('hospital'))
                            <div class="invalid-feedback">
                                {{ $errors->first('hospital') }}
                            </div>
                        @endif
                    </group>

                </div><!-- END OF FIRST ROW IN THE PAGE  -->

                <div class="row mt-4">
                    <div class="col d-flex justify-content-end">
                        <button type="submit" class="btn me-3 text-capitalize"
                            style="background-color:#4a3aae;color:white; border-radius:5px; ">
                            {{ isset($patient) ? 'update' : 'register' }}</button>
                        <button type="reset" class="btn btn-outline-secondary"> Clear </button>
                    </div>
                </div>

            </form>

        </div><!-- END OF Card-body -->
    </div>
    <script>
        function data() {
            return {
                hospitals: [],
                dropdown: false,
                search: @json($patient->hospital->name ?? ''),
                selected: @json($patient->hospital ?? ''),
                selectItem: function(item) {
                    this.selected = item;
                    this.search = item.name;
                },
                loading: false,
                searchItems: function() {
                    return this.hospitals.filter(i =>
                        JSON.stringify(i).toLowerCase().includes(this.search.toLowerCase()))
                }
            }
        }
    </script>
@endsection
