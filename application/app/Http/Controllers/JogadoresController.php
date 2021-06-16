<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JogadorModel;

class JogadoresController extends Controller
{
    public function index(Request $request)
    {
        $atletas = Jogadormodel::query()
            ->orderBy('goleiro', 'desc')
            ->orderBy('nome')
            ->get();

        return view('players.index', compact('atletas'));
    }
}
