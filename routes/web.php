<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
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

Route::get('/persons',[PersonController::class,'index'])->name('persons.index');
Route::get('/person/create',[PersonController::class,'create'])->name('persons.create');
Route::post('/person',[PersonController::class,'store'])->name('persons.store');
Route::get('/person/{person}',[PersonController::class,'show'])->name('persons.show');
Route::get('/person/{person}/edit',[PersonController::class,'edit'])->name('persons.edit');
Route::put('/persons/{person}',[PersonController::class,'update'])->name('persons.update');
Route::delete('/person/{person}',[PersonController::class,'destroy'])->name('persons.destroy');
//Route::resource("/persons", PersonController::class);


/*
Route::get('/index', function () {
    return view('/persons/index');
});
Route::get('/create', function () {
    return view('/persons/create');
});
Route::get('/edit', function () {
    return view('/persons/edit');
});
Route::get('/update', function () {
    return view('/persons/update');
});
Route::get('/delete', function () {
    return view('/persons/delete');
});*/
//Route::resource ('persons'CompanyController::class)
