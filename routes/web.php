<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtraController;
use App\Http\Middleware\SecretMiddleware;



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

Route::get('/', function () {
    return view('welcome');
});

Route::view("/contact","form.contact");
Route::view("/form","form.form")->name('form.get');
Route::view("/login","form.login");

// Route::post("/handleform",[FormController::class,'handleFormSubmission']);
// Route::post("/handleform",[FormController::class,'handleFormSubmission'])->name('form.post');
Route::post("/handleform", [ExtraController::class, 'checkValidation'])->name("form.post");
Route::get('/hello',function(){
    return "Hello wolrd";
})->middleware(['throttle:2,1']);

Route::get('/secret',function(){
    return "Secret messeage";
})->middleware(SecretMiddleware::class);



