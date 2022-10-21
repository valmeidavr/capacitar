<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Setor;
use App\Agendamento;
use Auth;

class AgendamentoController extends Controller
{
   public function index() {
       $hoteis = Hotel::all();
       return view('agendamento', compact('hoteis'));
   }

   public function agendar(Request $request) {
        $hoteis = Hotel::all();
        
        $agendamento = [
            'dt' => $request->dataEnviada,
            'periodo' => $request->periodo,
            'status' => 'A',
            'hotels_id' => $request->hotels_id,
            'users_id' => Auth::user()->id,
            'setors_id' => $request->setors_id,
        ];

        Agendamento::create($agendamento);
       
        return redirect()
            ->action('AgendamentoController@index')
            ->with('mensagem', 'Agendamento criado com sucesso!');
   }

   public function call_setores($id) {
        $setores = Setor::where('hotels_id', $id)->get();
        return $setores;
   }
}
