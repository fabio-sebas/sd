<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $tasks = $this->taskService->getAllTasks();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = $this->taskService->getTaskById($id);
        return view('tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $this->taskService->createTask($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea creada exitosamente.');
    }

    public function edit($id)
    {
        $task = $this->taskService->getTaskById($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $this->taskService->updateTask($id, $request->all());
        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $this->taskService->deleteTask($id);
        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada exitosamente.');
    }
}
