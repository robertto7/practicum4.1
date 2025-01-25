@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Editar Doctor</h2>
    <form action="{{ route('citas.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cedula">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" required>
        </div>
        <div class="form-group">
            <label for="specialty">Especialidad</label>
            <input type="text" class="form-control" id="specialty" name="specialty" required>
        </div>
        <div class="form-group">
            <label for="Fecha">Fecha</label>
            <input type="text" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="Hora">Hora</label>
            <input type="text" class="form-control" id="time" name="time" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
