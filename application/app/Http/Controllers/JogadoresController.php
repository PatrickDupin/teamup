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

        return view('times.jogadores', compact('atletas'));
    }

    public function sortear(Request $request)
    {
        $jogadores_cofirmados = $request->input('confirmar-presenca');
        $numJogadores = sizeof($jogadores_cofirmados);
        $time = [];

        $contator = 1;
        $contadorTimeCompletos=0;

        while ($numJogadores > 0 ){
            sort($jogadores_cofirmados);

            $sorteado = rand(0, (sizeof($jogadores_cofirmados) - 1));
            $time[$contadorTimeCompletos][] = $jogadores_cofirmados[$sorteado];
            unset($jogadores_cofirmados[$sorteado]);
            if ($contator == 5) {
                $contator = 0;
                $contadorTimeCompletos++;
            }
            $numJogadores = sizeof($jogadores_cofirmados);
            $contator++;
        }
        dd($time);

        die();

        return view('times.escalacao', compact('jogadores_cofirmados'));
    }
}
