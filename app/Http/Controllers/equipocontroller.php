<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function showAddForm()
    {
        return view('anadeequipo');
    }

    public function addEquipo(Request $request)
    {
        $request->validate([
            'nombre_equipo' => 'required|string|max:255',
        ]);

        $equipo = new Equipo();
        $equipo->nombre_equipo = $request->input('nombre_equipo');
        $equipo->save();

        return view('equipoanadido');
    }
}
