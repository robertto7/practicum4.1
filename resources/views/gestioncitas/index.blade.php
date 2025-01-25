<!-- /views/gestioncitas.blade.php -->


@extends ('layouts.master')

@section ('title', 'Gestion de citas medicas')


@section('content')

        <!-- Tabla para listar las citas -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Médico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($citas as $cita)
                    <tr>
                        <td>{{ $cita->paciente->nombre }}</td>
                        <td>{{ $cita->fecha }}</td>
                        <td>{{ $cita->hora }}</td>
                        <td>{{ $cita->medico->nombre }}</td>
                        <td>
                            <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta cita?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No hay citas programadas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection