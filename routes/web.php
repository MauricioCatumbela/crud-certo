<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

//Route::view('/jogo', 'jogos');

/* Route::get('/jogo', function(){

    return "curso de laravel do gustavo";

}); */

/* Route::view('/jogos', 'jogos',['name'=>'GTA']); */

/* Route::get('/jogos/{id?}/{name?}', function($id = null, $name=null){
    return view('jogos',['idjogos'=>$id, 'nomejogos'=> $name ]);
}); */
/* Route::get('/jogos', [JogosController::class, 'index']); */

/* Route::get('/casa', function(){
    return view('welcome');
})->name('home-index'); */

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::PUT('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
    
});

Route::fallback(function(){
    return "erro ao localizar a roota";
});