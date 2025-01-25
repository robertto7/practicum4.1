@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Agendar cita</h2>
    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
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
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
