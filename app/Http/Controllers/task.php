<?php

namespace App\Http\Controllers;

use App\Models\task as ModelsTask;
use Illuminate\Http\Request;

class task extends Controller
{
    public function listTask() {
        $taskModel = new ModelsTask();
        $tasks = $taskModel->all();
        return response()->json(["tasks" => $tasks], 200);
    }

    public function createTask(Request $request) {
        $newTask = $request->all();
        $taskRegister = ModelsTask::create($newTask);
        return response()->json(['taskRegister' => $taskRegister], 201);
    }

    public function editTask(Request $request, int $id) {
        $taskModified = $request->only(['descricao']);
        $taskOld = ModelsTask::findOrFail($id);
        $taskOld->update($taskModified);
        
        return response()->json(['taskModified' => $taskModified], 200);
    }

    public function showTaskAt(int $id) {
        $task = ModelsTask::findOrFail($id);
        return response()->json(['task' => $task], 200);
    }

    public function endTask(int $id) {
        $task = ModelsTask::findOrFail($id);
        $status = ['status' => 'finalizada'];
        $task->update($status);
        return response(null, 204);
    }
}
