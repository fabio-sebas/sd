@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle de Tarea</h1>
        <p><strong>Título:</strong> {{ $task->title }}</p>
        <!-- Mostrar más detalles de la tarea según sea necesario -->
    </div>
@endsection
