<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
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
route::get('/form',[registrationController::class,'showform']);
route::post('/form',[registrationController::class,'signup']);
route::view('form','form'); 
route::view('olddata','olddata')->name('old');

// route::get('/form',function (){
//     return view('form');
// });
// route::post('/form',function (){
//     return view('form');
// });