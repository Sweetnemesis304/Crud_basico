
<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/produtos', ProdutosController::class);

// Group routes for products
Route::prefix('produto')->group(function () {
    Route::get('/novo', [ProdutosController::class, 'create']);
    Route::post('/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
    Route::get('/ver/{id}', [ProdutosController::class, 'show']);
    Route::get('/editar/{id}', [ProdutosController::class, 'edit']);
    Route::post('/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
    Route::get('/excluir/{id}', [ProdutosController::class, 'delete']);
    Route::post('/excluir/{id}', [ProdutosController::class, 'destroy'])->name('excluir_produto');
});

