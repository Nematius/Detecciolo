@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registros de Detección - Sala {{ $sala->nombre }}</h1>
        @if ($registros->isEmpty())
            <p>No hay registros disponibles.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->hora }}</td>
                            <td>{{ $registro->fecha }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
