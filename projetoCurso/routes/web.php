<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

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
/*
Route::get('/', function () {
    return '<div style="text-align:center" >Seja bem vindo ao curso"</div>';
});

Route::get('/sobre-nos', function () {
    return '<div style="text-align:center" >Sobre nos</div>';
});

Route::get('/contato', function () {
    return '<div style="text-align:center" >Contato"</div>';
});
*/

Route::get('/',[PrincipalController::class,'principal']); 

Route::get('/contato',[ContatoController::class,'contato']); 

Route::get('/sobre-nos',[SobreNosController::class,'SobreNos']); 

