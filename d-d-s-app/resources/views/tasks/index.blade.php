@extends('index')

@section('content')
    <div class="container">
        <h1>Listado de Tareas</h1>
        @if ($tasks->isEmpty())
            <p>No hay tareas por mostrar.</p>
        @else
            <ul>
                @foreach ($tasks as $task)
                    <li>{{ $task->title }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
