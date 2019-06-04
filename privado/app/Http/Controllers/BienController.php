<?php

namespace App\Http\Controllers;

use App\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function index()
    {
        $bien = new Bien([
            'numero' => 1,
            'descripcion' => 'bien de ejemplo',
            'marca' => 'hp'
        ]);
        return view('inventario.index')->with('bienes', array($bien, $bien, $bien));
    }

    public function show($id)
    {
        $bien = new Bien([
            'id' => 1,
            'descripcion' => 'bien de ejemplo',
            'idtipo' => 1
        ]);
        return view('inventario.show')->with('bien', $bien);
    }
}
