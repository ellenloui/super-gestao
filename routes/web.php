<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso';
});*/
Route::Get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/SobreNos', [\App\Http\Controllers\SobreNos::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoControler::class, 'contato'])->name('site.contato');
Route::get('/login', function () {
    return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
    Route::get('/');

});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');


Route::fallback(function () {
    echo 'A rota acessada não existe. <a href ="' . route('site.index') . '">Clique aqui </a> para página inicial';
});

/*
Route::get('/sobre-nos', function () {
    return 'Sobre nós, pipipopop';
});*/
/*Route::Get('/contato/{nome}/{categoria_id}', function($nome, $categoria_id = 1){
    echo "Estamos aqui: $nome -$categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/contato', function () {
    return '4002822';
});*/
