<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{
    protected $taskModel;

    public function __construct(Task $taskModel)
    {
        $this->taskModel = $taskModel;
    }

    /**
     * Obtener todas las tareas.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllTasks()
    {
        return $this->taskModel->all();
    }

    /**
     * Obtener una tarea por su ID.
     *
     * @param  int  $id
     * @return \App\Models\Task
     */
    public function getTaskById($id)
    {
        return $this->taskModel->findOrFail($id);
    }

    /**
     * Crear una nueva tarea.
     *
     * @param  array  $data
     * @return \App\Models\Task
     */
    public function createTask($data)
    {
        return $this->taskModel->create($data);
    }

    /**
     * Actualizar una tarea existente.
     *
     * @param  int  $id
     * @param  array  $data
     * @return bool
     */
    public function updateTask($id, $data)
    {
        $task = $this->taskModel->findOrFail($id);
        return $task->update($data);
    }

    /**
     * Eliminar una tarea.
     *
     * @param  int  $id
     * @return bool
     */
    public function deleteTask($id)
    {
        $task = $this->taskModel->findOrFail($id);
        return $task->delete();
    }
        /**
     * Marcar una tarea como completada.
     *
     * @param  int  $id
     * @return bool
     */
    public function markTaskAsCompleted($id)
    {
        $task = $this->taskModel->findOrFail($id);
        $task->completed = true;
        return $task->save();
    }

    /**
     * Obtener todas las tareas completadas.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCompletedTasks()
    {
        return $this->taskModel->where('completed', true)->get();
    }

    /**
     * Obtener todas las tareas pendientes.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPendingTasks()
    {
        return $this->taskModel->where('completed', false)->get();
    }

    /**
     * Obtener todas las tareas de un usuario específico.
     *
     * @param  int  $userId
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getTasksByUserId($userId)
    {
        return $this->taskModel->where('user_id', $userId)->get();
    }

}
