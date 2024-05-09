<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebFrontController;
use App\Http\Controllers\AdminFrontController;
use App\Http\Controllers\mailerControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//----------------web front end  routs----------------------
Route::get('/',[WebFrontController::class,'home']);
Route::get('/home',[WebFrontController::class,'home']);
Route::get('/about',[WebFrontController::class,'about']);
Route::get('/blog',[WebFrontController::class,'blog']);
Route::get('/contact',[WebFrontController::class,'contact']);
Route::get('/portfolio',[WebFrontController::class,'portfolio']);
Route::get('/service',[WebFrontController::class,'service']);
Route::get('/single',[WebFrontController::class,'single']);
Route::get('/team',[WebFrontController::class,'team']);
Route::get('/clint-login',[WebFrontController::class,'clintlogin']);
Route::get('/clint-login-action',[WebFrontController::class,'clintloginaction']);


// ----------------Admin front end routs------------------
Route::get('/admin-dashboard',[AdminFrontController::class,'dashboard'])->middleware('logingurd');
Route::get('/admin-addclint',[AdminFrontController::class,'addclint'])->middleware('logingurd');
Route::post('/admin-addclint-action',[AdminFrontController::class,'addclintaction'])->middleware('logingurd');
Route::post('/admin-edit-clint-action',[AdminFrontController::class,'editclintaction'])->middleware('logingurd');
Route::get('/admin-allclint-profile-view',[AdminFrontController::class,'allClintProfilrviws'])->middleware('logingurd');
Route::post('/admin-allclint-profile-view-serch',[AdminFrontController::class,'allClintProfilrviwsserch'])->middleware('logingurd');
Route::get('/admin-allclint-table-view',[AdminFrontController::class,'allClinttableviws'])->middleware('logingurd');
Route::get('/admin-allclint-pashi-table',[AdminFrontController::class,'pashitable'])->middleware('logingurd');
Route::get('/admin-allclint-pashi-table-serch',[AdminFrontController::class,'pashitableserch'])->middleware('logingurd');
Route::get('/admin-allclint-pashi-table-update-nextdate',[AdminFrontController::class,'peshiupdatenextdate'])->middleware('logingurd');
Route::post('/profile',[AdminFrontController::class,'profile'])->middleware('logingurd');
Route::get('/admin-allclint-pashi-table-update-nextdate-edit',[AdminFrontController::class,'peshiupdatenextdateedit'])->middleware('logingurd');

Route::post('/caseimage',[AdminFrontController::class,'caseimage'])->middleware('logingurd');
Route::post('/casepdf',[AdminFrontController::class,'casepdf'])->middleware('logingurd');
Route::get('/inqurydelete',[AdminFrontController::class,'inqurydelete'])->middleware('logingurd');
Route::get('/imagedelete',[AdminFrontController::class,'imagedelete'])->middleware('logingurd');
Route::get('/pdfdelete',[AdminFrontController::class,'pdfdelete'])->middleware('logingurd');
Route::get('/clintdelete',[AdminFrontController::class,'clintdelete'])->middleware('logingurd');
Route::get('/admin-login',[AdminFrontController::class,'adminlogin']);
Route::post('/admin-login-action',[AdminFrontController::class,'adminloginaction']);
Route::get('/admin-logout',[AdminFrontController::class,'logout']);
Route::post('/admin-inqury-sms',[AdminFrontController::class,'inqurysms']); 


Route::get('/admin-setting',[AdminFrontController::class,'adminsetting'])->middleware('logingurd');
Route::post('/admin-setting-action',[AdminFrontController::class,'adminsettingAction'])->middleware('logingurd');
Route::get('/mail',[mailerControler::class,'mail']);
