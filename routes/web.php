<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddItem;
use App\Http\Controllers\CheckBoxCheckedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteItemController;
use Illuminate\Http\Request;

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
Route::get('/dashboard', [DashboardController::class, 'dash'])->name('dash')->middleware('auth:web');

Route::get('/', [DashboardController::class, 'dash'])->name('dashboard')->middleware('auth:web');

Route::get('/guestdashboard', function(){
    return view('guestdashboard');
})->name('guestdashboard');

Route::get('/addnote', function () {
    return view('additem.addnote');
})->middleware('auth:web');

Route::get('/addtodo', function () {
    return view('additem.addtodo');
})->middleware('auth:web');

Auth::routes();

Route::post('/addnote', [AddItem::class, 'addnote'])->name('addnote')->middleware('auth:web');

Route::post('/addtodo', [AddItem::class, 'addtodo'])->name('addtodo')->middleware('auth:web');

Route::post('/deletenote/{id}', [DeleteItemController::class, 'deletenote'])->name('deletenote')->middleware('auth:web');

Route::post('/deletetodo/{id}', [DeleteItemController::class, 'deletetodo'])->name('deletetodo')->middleware('auth:web');

Route::post('/checked/{id}', [CheckBoxCheckedController::class, 'checked'])->name('checkedcheckbox')->middleware('auth:web');

Route::post('/unchecked/{id}', [CheckBoxCheckedController::class, 'unchecked'])->name('uncheckedcheckbox')->middleware('auth:web');

Route::get('/forgot', function () {
    return view('auth.passwords.email');
});

Route::get('/addtodo', function () {
    return view('additem.addtodo');
})->middleware('auth:web');