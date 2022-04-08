<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


//Rota GET teste para listagem de tasks com 'ok' no status
Route::get('oktasks',[TaskController::class, 'getOkTask']);

//Rota GET para as tasks
Route::get('tasks', [TaskController::class, 'getTask']);//ou com ->name('tasks');

//Rota GET para task específica
Route::get('tasks/{id}', [TaskController::class, 'getTaskById']);

//Rota POST para cadastrar nova task
Route::post('addtask', [TaskController::class, 'addTask']);

//Rota PUT para atualização de tarefa task
Route::put('updatetask/{id}', [TaskController::class, 'updateTask']);

//Rota DELETE para exclusão de task
Route::delete('delete/{id}',[TaskController::class, 'deleteTask']);