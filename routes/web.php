<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::view('/','index');
Route::view('/about','about');
Route::view('/mold-removal','Attic-mold-removal');
Route::view('/blog1','blog1');
Route::view('/blog2','blog2');
Route::view('/blog3','blog3');
Route::view('/blogs','blogs');
Route::view('/contact','contact');
Route::view('/form','form');
Route::view('/insulation-removal','insulation-removal');
Route::view('/services','services');
Route::post('/send-quote',[MailController::class,'SubmitMsg']);
