<?php

use Illuminate\Support\Facades\Route;

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


/* ROUTE / NomeClasseController@FunctionClasseController */

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

//AGRUPANDO AS ROUTES ABAIXO DENTRO DE UMA ROUTE PREFIXA APP

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});



//Redireciona para a /rota1 quando tenta acessar a /rota2
//Route::redirect('/rota2', '/rota1');


//COMENTADO, FEITA APENAS PARA ESTUDO DE CONDIÇÃO DE PARÂMETROS DAS ROUTES
// Route::get('/contato/{nome}/{categoria_id}', function (
//     string $nome = 'Desconhecido',
//     int $category_id = 1 // 1 - Informação
// ) {
//     echo 'Estamos aqui: ' . $nome . ' - ' . $category_id;
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');


//ROUTES DE DIRECIONAMENTO - TESTE
// Route::get('/rota1', function(){
//     echo 'Rota 1';
// })->name('site.rota1');
    
// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2');


// Route::get($uri, $callback);

/* VERBO HTTP - GET, POST, PUT, PATCH, DELETE, OPTIONS */
