@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Salas</h1>
        <ul>
            @foreach ($salas as $sala)
                <li><a href="{{ route('salas.showRegistros', $sala->id) }}">{{ $sala->nombre }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
