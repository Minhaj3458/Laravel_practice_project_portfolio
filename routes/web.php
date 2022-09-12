<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});


//frontend controller
Route::get('/', [App\Http\Controllers\frontend\homepageController::class,'index'])->name('frontend_home_page');




Auth::routes();


//auth router
Route::group(['prefix' => 'auth'], function () {
//Auth Management
Route::get('manage_auth', [App\Http\Controllers\Auth\RegisterController::class,'index'])->name('manage_auth');
Route::get('edit_auth/{id}', [App\Http\Controllers\Auth\RegisterController::class,'edit'])->name('edit_auth');
Route::put('update_auth/{id}', [App\Http\Controllers\Auth\RegisterController::class,'update'])->name('update_auth');
Route::get('destroy_auth/{id}', [App\Http\Controllers\Auth\RegisterController::class,'destroy'])->name('destroy_auth');


Route::get('home', [App\Http\Controllers\Auth\Dashboard\HomeController::class, 'index'])->name('home');



//slider 
Route::get('create_slider', [App\Http\Controllers\Auth\Dashboard\SliderController::class, 'create'])->name('create_slider');
Route::post('store_slider', [App\Http\Controllers\Auth\Dashboard\SliderController::class, 'store'])->name('store_slider');
Route::get('manage_slider', [App\Http\Controllers\Auth\Dashboard\SliderController::class, 'index'])->name('manage_slider');
Route::get('edit_slider/{id}', [App\Http\Controllers\Auth\Dashboard\SliderController::class, 'edit'])->name('edit_slider');
Route::post('update_slider/{id}', [App\Http\Controllers\Auth\Dashboard\SliderController::class, 'update'])->name('update_slider');
Route::get('destroy_slider/{id}', [App\Http\Controllers\Auth\Dashboard\SliderController::class, 'destroy'])->name('destroy_slider');

//Social Media
Route::get('crate_socialMedia', [App\Http\Controllers\Auth\Dashboard\social_mediaController::class, 'create'])->name('crate_socialMedia');
Route::post('store_socialMedia', [App\Http\Controllers\Auth\Dashboard\social_mediaController::class, 'store'])->name('store_socialMedia');
Route::get('show_socialMedia', [App\Http\Controllers\Auth\Dashboard\social_mediaController::class, 'show'])->name('show_socialMedia');
Route::get('edit_socialMedia/{id}', [App\Http\Controllers\Auth\Dashboard\social_mediaController::class, 'edit'])->name('edit_socialMedia');
Route::put('update_socialMedia/{id}', [App\Http\Controllers\Auth\Dashboard\social_mediaController::class, 'update'])->name('update_socialMedia');
Route::get('destroy_socialMedia/{id}', [App\Http\Controllers\Auth\Dashboard\social_mediaController::class, 'destroy'])->name('destroy_socialMedia');

//About 
Route::get('crate_about', [App\Http\Controllers\Auth\Dashboard\AboutController::class, 'create'])->name('crate_about');
Route::post('store_about', [App\Http\Controllers\Auth\Dashboard\AboutController::class, 'store'])->name('store_about');
Route::get('manage_about', [App\Http\Controllers\Auth\Dashboard\AboutController::class, 'index'])->name('manage_about');
Route::get('edit_about/{id}', [App\Http\Controllers\Auth\Dashboard\AboutController::class, 'edit'])->name('edit_about');
Route::get('update_about/{id}', [App\Http\Controllers\Auth\Dashboard\AboutController::class, 'update'])->name('update_about');
Route::get('destroy_about/{id}', [App\Http\Controllers\Auth\Dashboard\AboutController::class, 'destroy'])->name('destroy_about');

//skill
Route::get('crate_skill', [App\Http\Controllers\Auth\Dashboard\SkillController::class, 'create'])->name('crate_skill');
Route::post('store_skill', [App\Http\Controllers\Auth\Dashboard\SkillController::class, 'store'])->name('store_skill');
Route::get('manage_skill', [App\Http\Controllers\Auth\Dashboard\SkillController::class, 'index'])->name('manage_skill');
Route::get('edit_skill/{id}', [App\Http\Controllers\Auth\Dashboard\SkillController::class, 'edit'])->name('edit_skill');
Route::put('update_skill/{id}', [App\Http\Controllers\Auth\Dashboard\SkillController::class,'update'])->name('update_skill');
Route::get('destroy_skill/{id}', [App\Http\Controllers\Auth\Dashboard\SkillController::class, 'destroy'])->name('destroy_skill');

//Portfolio

//Portfolio_experience1Controller
Route::get('crate_port_exp1', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience1Controller::class, 'create'])->name('crate_port_exp1');
Route::post('store_port_exp1', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience1Controller::class, 'store'])->name('store_port_exp1');
Route::get('manage_port_exp1', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience1Controller::class, 'index'])->name('manage_port_exp1');
Route::get('edit_port_exp1/{id}', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience1Controller::class, 'edit'])->name('edit_port_exp1');
Route::put('update_port_exp1/{id}', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience1Controller::class, 'update'])->name('update_port_exp1');
Route::get('destroy_port_exp1/{id}',[App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience1Controller::class, 'destroy'])->name('destroy_port_exp1');


//Portfolio_experience2Controller
Route::get('crate_port_exp2', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience2Controller::class, 'create'])->name('crate_port_exp2');
Route::post('store_port_exp2', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience2Controller::class, 'store'])->name('store_port_exp2');
Route::get('manage_port_exp2', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience2Controller::class, 'index'])->name('manage_port_exp2');
Route::get('edit_port_exp2/{id}', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience2Controller::class, 'edit'])->name('edit_port_exp2');
Route::put('update_port_exp2/{id}', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience2Controller::class, 'update'])->name('update_port_exp2');
Route::get('destroy_port_exp2/{id}',[App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience2Controller::class, 'destroy'])->name('destroy_port_exp2');

//Portfolio_experience3Controller
Route::get('crate_port_exp3', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience3Controller::class, 'create'])->name('crate_port_exp3');
Route::post('store_port_exp3', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience3Controller::class, 'store'])->name('store_port_exp3');
Route::get('manage_port_exp3', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience3Controller::class, 'index'])->name('manage_port_exp3');
Route::get('edit_port_exp3/{id}', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience3Controller::class, 'edit'])->name('edit_port_exp3');
Route::put('update_port_exp3/{id}', [App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience3Controller::class, 'update'])->name('update_port_exp3');
Route::get('destroy_port_exp3/{id}',[App\Http\Controllers\Auth\Dashboard\Portfolio\Portfolio_experience3Controller::class, 'destroy'])->name('destroy_port_exp3');

//Work Experience Controller
Route::get('create_work_exper',[App\Http\Controllers\Auth\Dashboard\Work_experienceController::class, 'create'])->name('create_work_exper');
Route::post('store_work_exper',[App\Http\Controllers\Auth\Dashboard\Work_experienceController::class, 'store'])->name('store_work_exper');
Route::get('manage_work_exper',[App\Http\Controllers\Auth\Dashboard\Work_experienceController::class, 'index'])->name('manage_work_exper');
Route::get('edit_work_exper/{id}',[App\Http\Controllers\Auth\Dashboard\Work_experienceController::class, 'edit'])->name('edit_work_exper');
Route::put('update_work_exper/{id}',[App\Http\Controllers\Auth\Dashboard\Work_experienceController::class, 'update'])->name('update_work_exper');
Route::get('destroy_work_exper/{id}',[App\Http\Controllers\Auth\Dashboard\Work_experienceController::class, 'destroy'])->name('destroy_work_exper');

//Education Controller
Route::get('create_education',[App\Http\Controllers\Auth\Dashboard\EducationController::class, 'create'])->name('create_education');
Route::post('store_education',[App\Http\Controllers\Auth\Dashboard\EducationController::class, 'store'])->name('store_education');
Route::get('manage_education',[App\Http\Controllers\Auth\Dashboard\EducationController::class, 'index'])->name('manage_education');
Route::get('edit_education/{id}',[App\Http\Controllers\Auth\Dashboard\EducationController::class, 'edit'])->name('edit_education');
Route::put('update_education/{id}',[App\Http\Controllers\Auth\Dashboard\EducationController::class, 'update'])->name('update_education');
Route::get('destroy_education/{id}',[App\Http\Controllers\Auth\Dashboard\EducationController::class, 'destroy'])->name('destroy_education');

//References Controller
Route::get('create_reference',[App\Http\Controllers\Auth\Dashboard\ReferencesController::class, 'create'])->name('create_reference');
Route::post('store_reference',[App\Http\Controllers\Auth\Dashboard\ReferencesController::class, 'store'])->name('store_reference');
Route::get('manage_reference',[App\Http\Controllers\Auth\Dashboard\ReferencesController::class, 'index'])->name('manage_reference');
Route::get('edit_reference/{id}',[App\Http\Controllers\Auth\Dashboard\ReferencesController::class, 'edit'])->name('edit_reference');
Route::put('update_reference/{id}',[App\Http\Controllers\Auth\Dashboard\ReferencesController::class, 'update'])->name('update_reference');
Route::get('destroy_reference/{id}',[App\Http\Controllers\Auth\Dashboard\ReferencesController::class, 'destroy'])->name('destroy_reference');

//Contact Controller
Route::post('store_contact',[App\Http\Controllers\Auth\Dashboard\ContactController::class, 'store'])->name('store_contact');
Route::get('manage_contact',[App\Http\Controllers\Auth\Dashboard\ContactController::class, 'index'])->name('manage_contact');
Route::get('edit_contact/{id}',[App\Http\Controllers\Auth\Dashboard\ContactController::class, 'edit'])->name('edit_contact');
Route::put('update_contact/{id}',[App\Http\Controllers\Auth\Dashboard\ContactController::class, 'update'])->name('update_contact');
Route::get('destroy_contact/{id}',[App\Http\Controllers\Auth\Dashboard\ContactController::class, 'destroy'])->name('destroy_contact');
});



