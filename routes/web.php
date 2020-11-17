<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\UserLojaController;

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

Route::get('/', [LojaController::class,'index']);
Route::get('/create-user', function(){
    // \App\Models\User::factory()->count(1)->create();
    // return \App\Models\User::all();
});
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', [Dashboard::class,'index'])
    ->name('dashboard');

Auth::routes();

Route::get('/home', [Dashboard::class, 'index'])->name('home');
Route::group(['middleware'=>['auth']], function(){
    // Route::resource('/loja', [LojaController::class]);
    Route::get('/vitrine/{id_loja}',[VitrineController::class,'show'])->name('vitrine.show');

    Route::get('/user_ajax', [UserLojaController::class, 'user_ajax'])->name('user_ajax');
    Route::get('/lojas_ajax', [UserLojaController::class, 'lojas_ajax'])->name('lojas_ajax');

    Route::resources(
        [
            'loja'=> LojaController::class,
            'categoria' =>  CategoriaController::class,
            'produto' => ProdutoController::class,
            'user-loja' => UserLojaController::class
        ]
    );
});
