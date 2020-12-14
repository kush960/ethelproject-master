<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Vitals\VitalQuestionController;
use App\Http\Controllers\API\Vitals\VitalScheduleController;
use App\Http\Controllers\API\Vitals\VitalResponseController;
use App\Http\Controllers\API\Medications\MedicationScheduleController;
use App\Http\Controllers\API\Medications\MedicationResponseController;
use App\Http\Controllers\API\CheckIns\CheckInScheduleController;
use App\Http\Controllers\API\CheckIns\CheckInResponseController;
use App\Http\Controllers\API\Events\EventScheduleController;
use App\Http\Controllers\API\TabletUserController;
use App\Http\Controllers\API\OrganisationController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\UploadController;

use App\Mail\NewMail;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('vital_questions', VitalQuestionController::class);
Route::resource('vital_schedules', VitalScheduleController::class);
Route::resource('vital_responses', VitalResponseController::class);

Route::resource('medication_schedules', MedicationScheduleController::class);
Route::resource('medication_responses', MedicationResponseController::class);

Route::resource('check_in_schedules', CheckInScheduleController::class);
Route::resource('check_in_responses', CheckInResponseController::class);

Route::resource('event_schedules', EventScheduleController::class);

Route::resource('tablet_users', TabletUserController::class);

Route::resource('organisations', OrganisationController::class);

Route::resource('projects', ProjectController::class);

Route::resource('uploads', UploadController::class);

Route::get('sendmail', function() {

    Mail::to('exampleuser@gmail.com')->send(new NewMail());

});
