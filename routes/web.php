<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Route cache cleared! <br> Routes cached successfully!';
});
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login-test', [App\Http\Controllers\FirebaseController::class, 'show'])->name('show.login');
Route::post('/on-register', [App\Http\Controllers\FirebaseController::class, 'onRegister'])->name('register.user');

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/QR', [App\Http\Controllers\HomeController::class, 'qr_index'])->name('QRIndex');
    Route::get('/Patients', [App\Http\Controllers\PatientController::class, 'index'])->name('GetPatient');
    Route::get('/api/patients', [App\Http\Controllers\PatientController::class, 'getPatients'])->name('api.patients');
    Route::get('/Patients/Create/{id?}', [App\Http\Controllers\PatientController::class, 'create'])->name('PatientRegistration');
    Route::post('/Patients/Store', [App\Http\Controllers\PatientController::class, 'store'])->name('StorePatient');
    Route::patch('/Patients/Edit', [App\Http\Controllers\PatientController::class, 'edit'])->name('EditPatient');
    Route::delete('/Patients/Delete/{id}', [App\Http\Controllers\PatientController::class, 'destroy'])->name('DeletePatient');
    Route::get('/Patients/search', [App\Http\Controllers\PatientController::class, 'search'])->name('PatientSearch');
    Route::get('/LabTests', [App\Http\Controllers\LabTestController::class, 'index'])->name('LabTest');
    Route::get('/LabTest/Create', [App\Http\Controllers\LabTestController::class, 'create'])->name('LabTestsRegistration');
    Route::post('/LabTest/Store', [App\Http\Controllers\LabTestController::class, 'store'])->name('StoreLabTests');
    Route::get('/TestSearch', [App\Http\Controllers\LabTestController::class, 'search'])->name('TestSearch');
    Route::get('/Reservations', [App\Http\Controllers\ReservationController::class, 'index'])->name('Reservation');
    Route::get('/Reservation/Create', [App\Http\Controllers\ReservationController::class, 'create'])->name('ReservationsRegistration');
    Route::post('/Reservation/Store', [App\Http\Controllers\ReservationController::class, 'store'])->name('StoreReservation');
    Route::delete('/Reservation/Delete/{id}', [App\Http\Controllers\ReservationController::class, 'destroy'])->name('DeleteReservation');
    Route::get('/ReservationBooking', [App\Http\Controllers\ReservationController::class, 'reservation_booking'])->name('ReservationBooking');
    Route::get('/PatientProfile/{id}', [App\Http\Controllers\ReservationController::class, 'view_patient_profile'])->name('PatientProfile');
    Route::get('/Patients/Profile/{id}', [App\Http\Controllers\ReservationController::class, 'view_patient_profile'])->name('Patient.Profile');
    Route::get('/PatientProfile/PrintBarcode/{id}', [App\Http\Controllers\ReservationController::class, 'print_patient_barcode'])->name('PrintPatientsBarcode');

    Route::get('/Hospital', [App\Http\Controllers\HospitalController::class, 'index'])->name('GetHospital');
    Route::get('/Hospital/Create', [App\Http\Controllers\HospitalController::class, 'create'])->name('HospitalRegistration');
    Route::post('/Hospital/Store', [App\Http\Controllers\HospitalController::class, 'store'])->name('StoreHospital');
    Route::get('/hospital/search', [App\Http\Controllers\HospitalController::class, 'search'])->name('searchHospital');
});
