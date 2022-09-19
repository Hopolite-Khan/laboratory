@extends('layouts.app')
@push('styles')
    <style>
        .h-1 {
            --size: 2rem;
            height: var(--size);
            width: var(--size);
        }

        .bg-brand {
            background-color: #4a3aae;
            color: white;
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('state', {
                async init() {
                    this.fetchPatients(this.url);
                },
                async fetchPatients(url) {
                    this.loading = true;
                    const data = await fetch(url);
                    this.response = await data.json();
                    this.patients = this.response.data;
                    let links = this.response.links;
                    this.prev = this.response.prev_page_url;
                    this.next = this.response.next_page_url;
                    this.links = links.slice(1, -1);
                    this.loading = false;
                    console.log(this.response);
                },
                url: "/api/patients",
                base_url: "{{ url('/Patients/') }}",
                loading: false,
                prev: "",
                next: "",
                response: {},
                patients: [],
                links: [],
                current_page: 1,
                csrf: "{{ csrf_token() }}",
                setPrev() {
                    if (this.prev)
                        this.fetchPatients(this.prev);
                },
                setNext() {
                    if (this.next)
                        this.fetchPatients(this.next);
                },
                setUrl(item) {
                    this.url = item;
                    this.fetchPatients(item);
                },
                async deletePatient(id) {
                    let res = confirm('Are you sure you want to delete this patient?');

                    if (res) {

                        await fetch(this.base_url + "/Delete/" + id, {
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-Token": this.csrf,
                            },
                            method: "delete"
                        }).then(res => alert("The patient was successfully deleted."))
                        this.fetchPatients(this.url);
                    }
                }
            })
        })
    </script>
    <!-- Success message -->
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class="my-2">
                Patinets List
            </h5>
            <div>
                <a href="{{ route('PatientRegistration') }}" class="btn btn-outline-primary my-1" title=" ">
                    @svg('user-plus')
                    Register Patient
                </a>
            </div>
        </div>
    </div>

    <div class="card mb-5 shadow">
        <div x-data="{ state: $store.state }" x-cloak class="table-responsive card-body h-100">
            <table class="table bg-white position-relative">
                <thead class="bg-brand" x-ref="thead">
                    <tr>
                        <th>Full Name</th>
                        <th>Mobile</th>
                        <th>ID Type</th>
                        <th>Passport No.</th>
                        <th class="text-truncate">Nationality</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <span x-show="state.loading"
                    class="mx-auto position-absolute top-50 start-50 end-50 my-3">@svg('rings')</span>
                <template x-if="!state.loading">
                    <tbody>
                        <template x-for="item in state.patients">
                            <tr>
                                <td x-text="item.full_name" :title="item.full_name" class="text-truncate"
                                    style="max-width: 7rem;"></td>
                                <td x-text="item.mobile"></td>
                                <td x-text="item.id_type"></td>
                                <td x-text="item.passport_id"></td>
                                <td x-text="item.nationality"></td>
                                <td x-text="item.dob"></td>
                                <td x-text="item.gender"></td>
                                <td>
                                    <ul class="list-unstyled d-flex gap-1 m-0">
                                        <li>
                                            <a :href="state.base_url + 'Create/' + item.id"
                                                class="btn btn-outline-warning rounded-circle p-2 h-1 d-flex align-items-center">
                                                @svg('edit')
                                            </a>
                                        </li>
                                        <li>
                                            <a :href="state.base_url + 'Profile/' + item.id"
                                                class="btn btn-outline-success rounded-circle p-2 h-1 d-flex align-items-center">
                                                @svg('eye')
                                            </a>
                                        </li>
                                        <li>
                                            <button @click="state.deletePatient(item.id)"
                                                class="btn btn-outline-danger rounded-circle p-2 h-1 d-flex align-items-center">
                                                @svg('trash')
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </template>
                <template x-if="!state.loading">
                    <tfoot class="border-0">
                        <tr class="border-0">
                            <td colspan="8">
                                <div class="mb-2">Patients: <span x-text="state.response.total"></span></div>
                                <div class="btn-group" role="group">
                                    <button title="Previous" class="btn btn-outline-primary d-grid place-center"
                                        @click="state.setPrev()">@svg('chevron-right', 'flip-right')</button>
                                    <template x-for="item in state.links">
                                        <button type="button" @click="!item.active && state.setUrl(item.url);"
                                            class="btn"
                                            :class="item.active ? 'btn-primary active' : 'btn-outline-primary'"
                                            x-text="item.label"></button>
                                    </template>
                                    <button title="Next" class="btn btn-outline-primary d-grid place-center"
                                        @click="state.setNext()">@svg('chevron-right')</button>
                                </div>

                            </td>
                        </tr>
                    </tfoot>
                </template>
            </table>

        </div>
    </div>
@endsection
