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


    public function escalacao(Request $request)
    {
        $jogadoresConfirmados = $request->input('confirmar-presenca');

        $times = $this->sortearEquipes($jogadoresConfirmados);



        // $times = Jogadormodel::where('id', $times[0][3])->get();

        // echo json_decode($jogador);
        // dd($jogador);


        foreach ($times as $key => $value) {
            $times[$key] = Jogadormodel::whereIn('id', $times[$key])->get();
        }




// dd($time);
// die();
        
// foreach ($jogador as $key => $value) {

//     foreach ($value as $k => $v) {
//         $teste2 = $v;
//     }
// }

        return view('times.escalacao', compact('times'));
    }

    private function sortearEquipes($jogadoresConfirmados)
    {

        $totalDeJogadores = sizeof($jogadoresConfirmados);
        $time = [];

        $contadorJogadores = 1;
        $contadorTimeCompletos=0;

        while ($totalDeJogadores > 0 ){
            sort($jogadoresConfirmados);

            $jogadorEscolhido = rand(0, (sizeof($jogadoresConfirmados) - 1));
            $time[$contadorTimeCompletos][] = $jogadoresConfirmados[$jogadorEscolhido];
            unset($jogadoresConfirmados[$jogadorEscolhido]);

            if ($contadorJogadores === 5) {
                $contadorJogadores = 0;
                $contadorTimeCompletos++;
            }

            $contadorJogadores++;
            $totalDeJogadores = sizeof($jogadoresConfirmados);
        }

        return $time;
    }
}
