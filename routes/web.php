<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('hi');
});
Route::get('/test', [TestController::class,'index']);

Route::get('/student', [StudentController::class, 'index']);
Route::get('/allstudent', [StudentController::class, 'index']);
Route::get('/studenttable', [StudentController::class, 'index']);

Route::get('/allmouse', [MouseController::class, 'index']);
//resource will create 7 links
Route::resource('departments', DepartmentController::class);
Route::get('morefx', [DepartmentController::class, 'morefx']);
Route::get('sq/{n?}', [DepartmentController::class, 'sq'])->where('n','[0-9]+');
// Route::get('sq/{n}', [DepartmentController::class, 'text'])->where('n','[a-zA-Z]+');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
