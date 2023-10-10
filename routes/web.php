<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CatogreController;
use App\Http\Controllers\GuidanceController;
use App\Http\Controllers\VeiwInstrController;
use App\Http\Controllers\VeiwOrderController;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\VeiwCatogreController;
use App\Http\Controllers\ViewFormContactController;

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

Route::get('/', [VeiwCatogreController::class , 'indexhome'])->name('/');

Route::get('show/instr', [VeiwCatogreController::class , 'indexinstr'])->name('show.instr');

Route::get('show/doct', [VeiwCatogreController::class , 'indexdoct'])->name('show.doct');

Route::get('show/report', [VeiwCatogreController::class , 'indexreport'])->name('show.report');

Route::get('index/instr', [VeiwInstrController::class , 'index'])->name('index.instr');

Route::get('show/cont', [VeiwCatogreController::class , 'indexcont'])->name('show.cont');



////////// Rating ///////////

Route::post('add.rating', [RatingController::class, 'store']);

///////////////////////////////////


Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ////////////////// Admiin ///////////////////////


Route::get('veiwcatogre/catogre', [VeiwCatogreController::class , 'index'])->name('veiwcatogre.catogre');

/*---------------------------- CatogreController   ---------------*/

Route::get('create/catogre', [CatogreController::class , 'index'])->name('create.catogre');
Route::post('store/catogre', [CatogreController::class , 'store'])->name('store.catogre');
Route::get('destroy/catogre/{id}', [CatogreController::class , 'destroy'])->name('destroy.catogre');
Route::get('edit/catogre/{id}', [CatogreController::class , 'edit'])->name('edit.catogre');
Route::post('update/catogre/{id}', [CatogreController::class , 'update'])->name('update.catogre');

/*---------------------------- END-CatogreController   ---------------*/


/*---------------------------- DoctorController   ---------------*/

Route::get('doctorTeeth/doctor', [DoctorController::class , 'indexTeeth'])->name('index.doctorTeeth');

Route::get('doctorLeather/doctor', [DoctorController::class , 'indexLeather'])->name('index.doctorLeather');

Route::get('doctorAudio/doctor', [DoctorController::class , 'indexAudio'])->name('index.doctorAudio');

Route::get('doctorBirth/doctor', [DoctorController::class , 'indexBirth'])->name('index.doctorBirth');

Route::get('doctorBlood/doctor', [DoctorController::class , 'indexBlood'])->name('index.doctorBlood');

Route::get('doctorBones/doctor', [DoctorController::class , 'indexBones'])->name('index.doctorBones');

Route::get('doctorChildren/doctor', [DoctorController::class , 'indexChildren'])->name('index.doctorChildren');

Route::get('doctorDigestive/doctor', [DoctorController::class , 'indexDigestive'])->name('index.doctorDigestive');

Route::get('doctorEar/doctor', [DoctorController::class , 'indexEar'])->name('index.doctorEar');

Route::get('doctorEyes/doctor', [DoctorController::class , 'indexEyes'])->name('index.doctorEyes');

Route::get('doctorGeneral/doctor', [DoctorController::class , 'indexGeneral'])->name('index.doctorGeneral');

Route::get('doctorHeart/doctor', [DoctorController::class , 'indexHeart'])->name('index.doctorHeart');

Route::get('doctorInternally/doctor', [DoctorController::class , 'indexInternally'])->name('index.doctorInternally');

Route::get('doctorNerves/doctor', [DoctorController::class , 'indexNerves'])->name('index.doctorNerves');

Route::get('doctorPaths/doctor', [DoctorController::class , 'indexPaths'])->name('index.doctorPaths');

Route::get('doctorPhysical/doctor', [DoctorController::class , 'indexPhysical'])->name('index.doctorPhysical');

Route::get('doctorPsychological/doctor', [DoctorController::class , 'indexPsychological'])->name('index.doctorPsychological');

Route::get('doctorSurgery/doctor', [DoctorController::class , 'indexSurgery'])->name('index.doctorSurgery');

Route::get('create/doctor', [DoctorController::class , 'create'])->name('create.doctor');


 Route::post('store/doctor', [DoctorController::class , 'store'])->name('store.doctor');

Route::get('destroy/doctor/{id}', [DoctorController::class , 'destroy'])->name('destroy.doctor');
Route::get('edit/doctor/{id}', [DoctorController::class , 'edit'])->name('edit.doctor');
Route::get('update/doctor/{id}', [DoctorController::class , 'update'])->name('update.doctor');

/*---------------------------- END-DoctorController   ---------------*/


/*---------------------------- GuidanceController   ---------------*/

Route::get('create/guidance', [GuidanceController::class , 'index'])->name('create.guidance');
Route::post('store/guidance', [GuidanceController::class , 'store'])->name('store.guidance');
Route::get('destroy/guidance/{id}', [GuidanceController::class , 'destroy'])->name('destroy.guidance');
Route::get('edit/guidance/{id}', [GuidanceController::class , 'edit'])->name('edit.guidance');
Route::post('update/guidance/{id}', [GuidanceController::class , 'update'])->name('update.guidance');
Route::post('index/guidance/', [GuidanceController::class , 'index'])->name('index.guidance');

/*---------------------------- END-GuidanceController   ---------------*/


/*---------------------------- OrderController   ---------------*/

Route::get('create.order', [OrderController::class , 'index'])->name('create.order');
Route::get('destroy.order/{id}+', [OrderController::class , 'destroy'])->name('destroy.order');
Route::get('edit/order/{id}', [OrderController::class , 'edit'])->name('edit.order');
Route::post('update/order/{id}', [OrderController::class , 'update'])->name('update.order');

/*---------------------------- END-OrderController   ---------------*/



/*---------------------------- VeiwCatogreController   ---------------*/

Route::get('show/{id}', [VeiwCatogreController::class , 'Teeth'])->name('show.Teeth');

// ********************* route search *****************
// Route::get('search-doctor', 'VeiwCatogreController@search')->name('test');
Route::get('search', [VeiwCatogreController::class , 'search'])->name('search-doctor');
// Route::get('/search/', 'VeiwCatogreController@search')->name('search');

// ********************* route END-search *****************

/*---------------------------- END-VeiwCatogreController   ---------------*/


/*---------------------------- VeiwOrdeController   ---------------*/

Route::post('store.order', [VeiwOrderController::class , 'store'])->name('store.order');

/*---------------------------- END-VeiwOrdeController   ---------------*/


Route::get('form-contact', [FormContactController::class , 'index1'])->name('form-contact');
Route::get('contact-us', [FormContactController::class , 'index2'])->name('contact-us');
Route::get('contact-complaints', [FormContactController::class , 'index3'])->name('contact-complaints');


/*---------------------------- FormController   ---------------*/

Route::post('contact-us', [FormContactController::class , 'store1'])->name('contact-us');
Route::post('contact-doctor', [FormContactController::class , 'store2'])->name('contact-doctor');
Route::get('contact-compainte', [FormContactController::class , 'store3'])->name('contact-compainte');

/*---------------------------- END-FormController   ---------------*/

/*---------------------------- ViewFormController   ---------------*/

Route::get('contact-us.view', [ViewFormContactController::class , 'index1'])->name('contact-us.view');
Route::get('destroy.contactus/{id}', [ViewFormContactController::class , 'destroy1'])->name('destroy.contactus');

Route::get('contact-doctor.veiw', [ViewFormContactController::class , 'index2'])->name('contact-doctor.veiw');
Route::get('destroy.contactdocotr/{id}', [ViewFormContactController::class , 'destroy2'])->name('destroy.contactdocotr');

Route::get('contact-complante.veiw', [ViewFormContactController::class , 'index3'])->name('contact-complante.veiw');
Route::get('destroy.contactdoctorcomp/{id}', [ViewFormContactController::class , 'destroy3'])->name('destroy.contactdoctorcomp');

/*---------------------------- END-ViewFormController   ---------------*/

