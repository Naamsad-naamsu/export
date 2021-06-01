<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('dashboard');
    // Route::group(['middleware' => 'admin'], function(){

        Route::get('import-export', [ImportExportController::class, 'importExport']);
        Route::post('import-file', [ImportExportController::class, 'importFile'])->name('import-file');
        Route::get('export-File',  [ImportExportController::class, 'exportFile']);
        // Route::get('exportfile', [ImportExportController::class, 'exportFile'])->name('exportfile');
        Route::resource('dashboard', HomeController::class);
        Route::resource('users', UserController::class);

    // });
});
