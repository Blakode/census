<?php

use App\Http\Controllers\CitizenController;
use App\Http\Controllers\registerUserController;
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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){

    Route::resource('/user', registerUserController::class,
    [
        'names'=>[
            'index' => 'user.index',
            'create' => 'user.create',
            'show' => 'user.show',
            'store' => 'user.store', 
            'update' => 'user.update',
        ]
    ]);

});



Route::get('/dashboard', function () {
$ward = \App\Models\Ward::get();
$lga =  \App\Models\LGA::get();
$state =  \App\Models\State::get();

    return view('dashboard')->with(['lga'=> $lga,'state' => $state,'ward' => $ward]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
