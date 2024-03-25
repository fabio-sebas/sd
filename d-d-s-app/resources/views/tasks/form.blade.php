@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ isset($task) ? 'Editar Tarea' : 'Crear Tarea' }}</h1>
        <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
            @csrf
            @if (isset($task))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', isset($task) ? $task->title : '') }}">
            </div>
            <!-- Agregar más campos de formulario según sea necesario -->
            <button type="submit" class="btn btn-primary">{{ isset($task) ? 'Actualizar' : 'Crear' }}</button>
        </form>
    </div>
@endsection
