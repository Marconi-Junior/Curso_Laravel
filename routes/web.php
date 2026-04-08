<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\contatoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/contato/{id?}', function($id = null){
//     return "Contato id = $id";
// });

// Route::post('/contato', function(){
//     dd($_POST);
//     return "Contato POST";
// });

// Route::put('/contato', function(){
//     return "Contato PUT";
// });

// *ROTAS COM CONTROLLER - '@' especifica o método dentro do controller

//Route::get('/contato',['uses'=>'contatoControler@index']); // sintaxe versões mais antigas

Route::get('/contato',[contatoController::class, 'index']); // sintaxe laravel versão 8+
Route::post('/contato', [contatoController::class, 'criar']);
Route::put('/contato', [contatoController::class, 'editar']);


Route::get('/', [HomeController::class, 'index'])->name('site.home');

//Route::get('/admin/cursos', ['as'=>'admin.cursos', CursoController::class, 'index']);// sintaxe versões mais antigas
Route::get('/admin/cursos', [CursoController::class, 'index'])->name('admin.cursos'); // sintaxe laravel versão 8+
Route::get('/admin/cursos/adicionar', [CursoController::class, 'adicionar'])->name('admin.cursos.adicionar');
Route::post('/admin/cursos/salvar', [CursoController::class, 'salvar'])->name('admin.cursos.salvar');
Route::get('/admin/cursos/editar/{id}', [CursoController::class, 'editar'])->name('admin.cursos.editar');
Route::put('/admin/cursos/atualizar/{id}', [CursoController::class, 'atualizar'])->name('admin.cursos.atualizar');
Route::get('/admin/cursos/deletar/{id}', [CursoController::class, 'deletar'])->name('admin.cursos.deletar');