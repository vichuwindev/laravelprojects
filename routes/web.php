<?php

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
use App\Http\Controllers\ReportController;
 

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/',function(){
// 	return view('firstPage');
// });
Route::get('/', [ReportController::class, 'listItems']);
Route::post('/AddItems',[ReportController::class,'AddItems']);