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

   public function relatorio() {
        $hotels = Hotel::all();
        return view('relatorio', compact('hotels'));
   }

   public function search_relatorio(Request $request) {
        $hotels = Hotel::all();
        $agendamentos = Agendamento::where('dt', '=', $request->dt)
            ->where('hotels_id', '=', $request->hotels_id)
            ->where('status', 'A')
            ->get();
        return view('relatorio', compact('agendamentos', 'hotels'));
    }

    public function inativar_agenda($id) {
       Agendamento::where('id', $id)->update(['status' => 'I']);
       return redirect()->action('AgendamentoController@relatorio')->with('mensagem', 'Agendamento inativado com sucesso!');
    }
}
