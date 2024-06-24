<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;


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
Route::post("/handleform",[FormController::class,'handleFormSubmission'])->name('form.post');

