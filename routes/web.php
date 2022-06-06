<?php

use App\Http\Controllers\CalculateController;
use App\Http\Controllers\QuarryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    if(Auth::check())
    {
        return redirect()->route('quarries.index');
    }
    else{
        return view('auth.login');
    }
});

Auth::routes();

Route::resource('quarries',QuarryController::class);
Route::resource('students',StudentController::class);
Route::resource('teachers',TeacherController::class);
Route::resource('calculators',CalculateController::class);
