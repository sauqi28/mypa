<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterOsController;
use App\Models\Masteros;

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
//BELUM DIKELOMPOKAN
// Route::get('masteros', [MasterOsController::class, 'index'])->name('masteros.index');
// Route::get('masteros/create', [MasterOsController::class, 'create'])->name('masteros.create');
// Route::post('masteros', [MasterOsController::class, 'store'])->name('masteros.store');
// Route::get('masteros/{id}', [MasterOsController::class, 'detailoskind'])->name('masteros.detailoskind');
// Route::get('masteros/{id}/edit', [MasterOsController::class, 'edit'])->name('masteros.edit');
// Route::put('masteros/{id}', [MasterOsController::class, 'update'])->name('masteros.update');
// Route::get('masteros/{id}/destroy', [MasterOsController::class, 'destroy'])->name('masteros.destroy');
// Route::get('masteros/{id}/createoskind', [MasterOsController::class, 'createoskind'])->name('oskinds.create');
// Route::post('masteros/{id}', [MasterOsController::class, 'storeoskind'])->name('oskinds.store');

//PENGELOMPOKAN PER CONTROLLER
Route::controller(MasterOsController::class)->group(function () {
    //TIPE SISTEM OPERASI
    Route::get('masteros', 'index')->name('masteros.index');
    //CREATE & STORE
    Route::get('masteros/create', 'create')->name('masteros.create'); // Untuk Viewnya
    Route::post('masteros', 'store')->name('masteros.store'); // Untuk Store data
    //EDIT & UPDATE
    Route::get('masteros/{id}/edit', 'edit')->name('masteros.edit'); // Untuk Viewnya
    Route::put('masteros/{id}', 'update')->name('masteros.update'); // Untuk Store data
    //SHOW & DESTROY
    Route::get('masteros/{id}/show', 'show')->name('masteros.show'); // Untuk View data
    Route::get('masteros/{id}/destroy', 'destroy')->name('masteros.destroy'); // Untuk Hapus menggunakan get biar buttonnya bagus, kalo post harus pake form jadi jelek tampilannya.

    //NAMA OS
    Route::get('masteros/{id}/createosname', 'createosname')->name('masteros.createosname'); // Untuk Viewnya
    Route::post('masteros/{id}', 'storeosname')->name('masteros.storeosname'); // Untuk Store data
    //EDIT & UPDATE
    Route::get('masteros/{id}/{idos}/editosname', 'editosname')->name('masteros.editosname'); // Untuk Viewnya
    Route::put('masteros/{id}/{idos}', 'updateosname')->name('masteros.updateosname'); // Untuk Store data
    //SHOW & DESTROY
    Route::get('masteros/{id}/{idos}/showosversion', 'showosversion')->name('masteros.showosversion'); // Untuk View data
    Route::get('masteros/{id}/{idos}/destroy', 'destroyosname')->name('masteros.destroyosname'); // Untuk Hapus menggunakan get biar buttonnya bagus,kalo post harus pake form jadi jelek tampilannya.

});
//Route::resource('masteros', MasterOsController::class);






Route::get('/', function () {
    return view('admin.dashboard');
})->name('welcome');

Route::get('applist', function () {
    return view('admin.applist');
})->name('applist');
