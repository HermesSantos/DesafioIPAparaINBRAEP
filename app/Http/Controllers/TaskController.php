<?php

namespace App\Http\Controllers;
//Task model chamada como ModelsTask
use App\Models\Task as ModelsTask;
use Illuminate\Http\Request;
use App\Task;
use Illuminate\Queue\Events\JobRetryRequested;

class TaskController extends Controller
{

    //metodo para listagem de tasks apenas com status ok após tarefa ser feita
    public function getOkTask(){
        return response()->json([ModelsTask::where('status','ok')->get()]);
    }

    //metodo para listagem de task
    public function index(){
        //uma outra linha que possa funcionar em caso de erro na database: return ModelsTask::all();
        return response()->json([ModelsTask::all(), 200]);
    }

    //metodo que retorna a task por id
    public function getTaskById($id){
        $task = ModelsTask::find($id);
        //verificação de id inválido
        if(is_null($task)){
            return response()-> json(['message' => 'Task não encontrada!!!', 404]);
        }
        return response()->json([$task::find($id), 200]);
    }

    //metodo para adição de task
    public function addTask(Request $request){
        $task = ModelsTask::create($request->all());
        return response($task, 201);
    }

    //metodo para o update de uma task por sua id
    public function updateTask(Request $request, $id){
        $task = ModelsTask::find($id);
        if(is_null($task)){
            return response()-> json(['message' => 'Task não encontrada.', 404]);
        }
        $task -> update($request->all());
        return response($task, 201);
    }

    public function deleteTask(Request $request, $id){
        $task = ModelsTask::find($id);
        if(is_null($task)){
            return response()-> json(['message' => 'Task não encontrada.', 404]);
        }
        $task->delete();
        return response()->json(['message'=>'task deletada com sucesso', 200]);
    }
}
