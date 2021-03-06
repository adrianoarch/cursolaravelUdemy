<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'App\Http\Controllers\SobreController@sobre')->name('site.sobre');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'Admin';
    })->name('admin.index');
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('admin.clientes');
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('admin.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('admin.produtos');
});

Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('site.teste');

Route::fallback(function () {
    echo 'A página solicitada não foi encontrada. <a href='.route ('site.index').'>Clique aqui</a> para retornar ao site.';
});
// Route::get
//     ('contato/{nome}/{categoria_id}',
//     function (
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1
//     )
//         {
//         return "Olá. estamos aqui para te ajudar. {$nome} está na categoria {$categoria_id}";
//     }
// )->where(['nome' => '[A-Za-z]+', 'categoria_id' => '[0-9]+']);
