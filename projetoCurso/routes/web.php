<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

//função NAME('') serve para dar um "apelido" para rota, que será utilizado 
//para acessala dentro da logica do programa


Route::get('/',[PrincipalController::class,'principal'])->name('site.index'); 
Route::get('/contato',[ContatoController::class,'contato'])->name('site.contato'); 
Route::get('/sobre-nos',[SobreNosController::class,'SobreNos'])->name('site.sobreNos'); 
Route::get('/login',[SobreNosController::class,'SobreNos'])->name('site.login'); 


//app

Route::prefix('/app')->group(function(){ //define um prefixo comum a todas as rotas das funções

    Route::get('/clientes',[SobreNosController::class,'SobreNos'])->name('app.clientes'); 
    Route::get('/fornecedores',[SobreNosController::class,'SobreNos'])->name('app.fornecedores'); 
    Route::get('/produtos',[SobreNosController::class,'SobreNos'])->name('app.produtos'); 
}

);


Route::get('/rota1',function(){
    echo 'rota1';
})->name('site.rota1');

Route::get('/rota2',function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function(){
echo 'Rota acessada é inexistente. <a href="'.route('site.index').'" > clique aqui para ir a pagina inicial</a> ';
});
//Route::redirect('rota2' , 'rota1');


