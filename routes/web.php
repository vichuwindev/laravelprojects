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
Route::get('/', [ReportController::class, 'listItems'])->name('productList');
Route::post('/AddItems',[ReportController::class,'AddItems']);
Route::get('/bankTxnList',[ReportController::class,'listBankTxn'])->name('bankTxnList');
Route::post('/bankTxnListDatas',[ReportController::class,'listBankTxnData']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
