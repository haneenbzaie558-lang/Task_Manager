<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\TaskModel;
use Illuminate\Console\Attributes\Description;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = TaskModel::all();
        return response()->json($task, 200);
    }

    public function store(StoreTaskRequest $request)

    {
        $task = TaskModel::create($request->validated());
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|nullable|string',
            'priority' => 'sometimes|integer|min:1|max:5'
        ]);

        $task = TaskModel::findOrFail($id);
        $task->update($validatedData);
        return response()->json($task, 200);
    }

    public function show($id)
    {
        $task = TaskModel::find($id);
        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        $task = TaskModel::findOrFail($id);
        $task->delete();
        return response()->json(null, 204);
    }
}



