<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JogadorModel;

class JogadoresController extends Controller
{
    public function index()
    {
        // $atletas = [
        //     'Matheus',
        //     'Paulo',
        //     'Araújo',
        //     'Carlos Alexandre',
        //     'Rogério',
        //     'Bruno',
        //     'Maurinho',
        //     'Rafão',
        //     'Luís',
        //     'Agnelo',
        //     'Marquim',
        //     'Gugu',
        //     'Patrick',
        //     'Osvaldo',
        //     'André',
        //     'Leonardo',
        //     'Didu',
        //     'Danilo'
        // ];

        $atletas = JogadorModel::query()
                                ->orderBy('nome')
                                ->get();

        return view('players.index', compact('atletas'));
    }
}
