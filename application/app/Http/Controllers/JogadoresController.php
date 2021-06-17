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

//        if (count($jogadores_cofirmados)<= 12) {
//            echo 'Não a dois times';
//        };
//        echo '<pre>';
//        print_r(count($jogadores_cofirmados));
//        echo '<br>';
//        $a_rand = array_rand(array_flip($jogadores_cofirmados), 5);
//        print_r($a_rand);
//        $jogadores_cofirmados = array_diff_key($a_rand, $jogadores_cofirmados);
//        print_r($jogadores_cofirmados);
//        $a_rand2 = array_rand($jogadores_cofirmados, 5);
//        $a_chunk = array_chunk($a_rand, 5);
//        print_r($a_rand2);
//        dd($a_chunk);
//        print_r($jogadores_cofirmados[$arr[1]]);

        return view('times.escalacao', compact('jogadores_cofirmados'));
    }
}
