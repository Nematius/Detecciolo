<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sala;
use App\RegistroDeteccion;
use Illuminate\Support\Facades\DB;

class SalaController extends Controller
{
    public function index()
    {
        $usuario_id = Auth::user()->id;
        $salas = Sala::where('usuario_id', $usuario_id)->get();

        return view('salas.index', compact('salas'));
    }

    public function showRegistros($salaId)
    {
        $sala = Sala::findOrFail($salaId);

        $registros = DB::table('registros_deteccion')
            ->where('sala_id', $salaId)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        return view('salas.registros', compact('sala', 'registros'));
    }
}
