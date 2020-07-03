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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/produtos', 'ProdutoController');
Route::get('/produtos/{produto}/destroy', 'ProdutoController@destroy');
Route::get('/produtos/verifica-nome/{name}', 'ProdutoController@verificarNome');

//Rota que leva para a página de impressão
Route::get('/imprimirProdutos', 'PdfController@geraPdfProdutos');
Route::get('/imprimirEtiquetas', 'PdfController@geraPdfEtiquetas');

