<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// co the dat ten tuy y cho phan name ben duoi cua resource
//nhung ne tuan thu qui tac de su dung tinh tu dong cua laravel

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);

//buoc 8:
//tu duy thiet ke giao dien co ke thuwa trong laravel: Blade Template Engine
//ve ly thuyet ban co the tao ra cac teo .blade.php, .php, .html deu co the goi duoc khi render trong Controller
//Nhung neu muo su dung cu phap cua Blade Template Engine, thi bat buoc phai dat tinh 