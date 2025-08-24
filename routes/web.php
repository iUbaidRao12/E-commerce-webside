<?php

use App\Http\Controllers\addtocartcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProdecttypeController;
use App\Http\Controllers\product;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('product.layout');  // resources/views/about.blade.php ko load karega
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/', 'index')->name('main');
    Route::get('/cateform', 'cateform')->name('cateform');
    Route::POST('/insertcate', 'insertcate')->name('insertcate');
    Route::get('/All_Categories', 'All_Categories')->name('All_Categories');
    Route::delete('/delete_cate/{id}', 'delete_cate')->name('delete_cate');
    Route::get('/edit_cate/{id}', 'edit_cate')->name('edit_cate');
    Route::PUT('/update_cate/{id}', 'update_cate')->name('update_cate');
});
Route::controller(VideoController::class)->group(function () {
    Route::get('videoform', 'videoform')->name('videoform');
    Route::post('insertvideo', 'insertvideo')->name('insertvideo');
    Route::get('all_video', 'all_video')->name('all_video');
    Route::delete('delete_vid/{id}', 'delete_vid')->name('delete_vid');
    Route::get('edit_vid/{id}', 'edit_vid')->name('edit_vid');
    Route::put('update_video/{id}', 'update_video')->name('update_video');
});

Route::get('/admin', [admincontroller::class, 'admin'])->name('admin');

Route::get('prodect_type', [ProdecttypeController::class, 'prodect_type'])->name('prodect_type');
Route::get('prodect_type_form', [ProdecttypeController::class, 'prodect_type_form'])->name('prodect_type_form');
Route::post('insertprodtype', [ProdecttypeController::class, 'insertprodtype'])->name('insertprodtype');
Route::get('editprodtype/{id}', [ProdecttypeController::class, 'editprodtype'])->name('editprodtype');
Route::put('updateprodtype/{id}', [ProdecttypeController::class, 'updateprodtype'])->name('updateprodtype');
Route::delete('deleteprodtype/{id}', [ProdecttypeController::class, 'deleteprodtype'])->name('deleteprodtype');

Route::get('product/{id}', [productcontroller::class, 'productpage'])->name('product');
Route::get('All_product', [productcontroller::class, 'All_product'])->name('All_product');
Route::get('productform', [productcontroller::class, 'productform'])->name('productform');
Route::post('storeprod', [productcontroller::class, 'storeprod'])->name('storeprod');

Route::get('addtocart/{id}', [addtocartcontroller::class, 'addtocart'])->name('addtocart');
Route::post('storesession/{id}', [addtocartcontroller::class, 'storesession'])->name('storesession');
Route::get('removesession/{id}', [addtocartcontroller::class, 'removesession'])->name('removesession');
