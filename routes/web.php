<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('index');
});
Route::get('users', function(){
    return view('saveData');
});
Route::get('profile', function(){
    return view('employeeProfile');
});

Route::post('users', [CrudController::class, 'addData']);//for create
Route::get('/', [CrudController::class,'showData']);//for read
Route::get('edit/{id}', [CrudController::class,'editData']); //for edit
Route::post('/edit',[CrudController::class,'updateData']); //for updating
Route::get('delete/{id}',[CrudController::class,'deleteData']);//for delete
Route::get('view/{id}', [CrudController::class, 'showSchools']);//for view 

