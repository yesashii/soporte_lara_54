<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/tablasap', function () {
    return view('SAP.tablasSap');
})->name('tablasap');


Route::get( '/movil', function (){

    return view('pruebas');
} );



Route::get('forecast', 'ExcelController@index')->name('forecast');

Route::get('import', 'ImportController@import');

Route::post('cargar/forecast', 'ExcelController@save');

Route::get( 'eliminar','ExcelController@eliminar');



/*
|--------------------------------------------------------------------------
| Rutas de la documentación
|--------------------------------------------------------------------------
|
*/

Route::get( 'sqlserver','Documentacion\DocmodelosController@index' )->name('sqlserver');

// SQLSERVER->desaerp->dbo
Route::get( 'dim_vendedores', 'Documentacion\modelos\sqlserver\desaerp\Dbo_dim_vendedoresController@index' )->name('dim_vendedores');
Route::post( 'dim_vendedores', 'Documentacion\modelos\sqlserver\desaerp\Dbo_dim_vendedoresController@buscar' )->name('dim_vendedores');
