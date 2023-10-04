<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\BannerController;
<<<<<<< Updated upstream
use App\Models\Banner;
use Illuminate\Support\Facades\Route;

// 後端路由
Route::get('/back',[BackController::class, 'index'])->name('back.index'); //後臺首頁
Route::get('/back/reset/',[BackController::class, 'reset'])->name('back.reset');
Route::post('/back/reset/store/{id}',[BackController::class, 'reset_store'])->name('back.reset.store');


//banner路由
Route::get('/back/banner/index',[BannerController::class, 'index'])->name('back.banner.index');
Route::get('/back/banner/create',[BannerController::class, 'create'])->name('back.banner.create');
Route::post('/back/banner/store',[BannerController::class, 'store'])->name('back.banner.store');
Route::get('/back/banner/edit/{id}',[BannerController::class, 'edit'])->name('back.banner.edit');
Route::post('/back/banner/update/{id}',[BannerController::class, 'update'])->name('back.banner.update');
Route::post('/back/banner/delete/{id}',[BannerController::class, 'delete'])->name('back.banner.delete');
// Route::get('/back/banner/',function () {
//     return view('/backend/banner/create');
// })->name('back.banner');
// Route::post('/back/banner/',function () {
//     return view('/backend/banner/edit');
// })->name('back.banner');
// Route::get('/back/banner/',function () {
//     return view('/backend/banner/index');
// })->name('back.bannindex');

=======
use Illuminate\Support\Facades\Route;

// 後端路由
Route::middleware('auth')->prefix('/back')->group(function () {
    Route::get('/',[BackController::class, 'index'])->name('back.index'); //後臺首頁
    Route::get('reset/',[BackController::class, 'reset'])->name('back.reset'); //修改密碼頁
    Route::post('reset/store/{id}',[BackController::class, 'reset_store'])->name('back.reset.store');
    Route::get('banner/',[BannerController::class, 'index'])->name('back.banner.index'); //
    Route::get('banner/create',[BannerController::class, 'create'])->name('back.banner.create'); //
});
>>>>>>> Stashed changes
