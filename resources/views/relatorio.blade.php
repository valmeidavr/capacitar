@extends('layouts.template')

@section('estilos')  
@endsection

@section('titulo')
   Relatório
@endsection
@section('conteudo')  
<div class="meio">
<section class="frm_cadastro">
    @if(session('mensagem'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('mensagem')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


<form id="formAgendamento" action="{{route('search-relatorio')}}" method="post">
    @csrf 
     <div class="form-row">
        <div class="form-group col-md-6">
          <label >Hotel</label>
          <select name="hotels_id" class="form-control" required>
            @foreach($hotels as $hotel)
                <option value='{{$hotel->id}}'>{{$hotel->nome}}</option>
            @endforeach
        </select>
        </div>           

        <div class="form-group col-md-6">
          <label >Data</label>
          <input type="date" class="form-control" name="dt" required>
        </div>           
     </div>

     <div class="form-row">
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary">Pesquisar</button> 
        </div>
     </div>
</form>
        @if(isset($agendamentos))
        <h5 style="text-align: center">Resultado da Pesquisa</h5>
        <div class="row">
           
                    <table class="table" style="background-color: rgb(243, 243, 243);">
                        <thead style='background-color: #292944; color: white;'>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">Data</th>
                            <th scope="col">Hotel</th>
                            <th scope="col">Setor</th>
                            <th scope="col">Período</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($agendamentos as $agenda)
                                <th scope="row">1</th>
                                <td>{{$agenda->usuario->name}}</td>
                                <td>{{Carbon\Carbon::parse($agenda->dt)->format('d/m/Y')}}</td>
                                <td>{{$agenda->hotel->nome}}</td>
                                <td>{{$agenda->setor->nome}}</td>
                                <td>
                                    @if($agenda->periodo == 'M')
                                       Manhã
                                    @elseif($agenda->periodo == 'T')
                                        Tarde 
                                    @else 
                                        Integral
                                    @endif
                                </td>
                                <td>
                                <a href="/inativar_agendamento/{{$agenda->id}}" data-toggle="tooltip" title="Inativar Agendamento">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </a>
                                </td>

                            @endforeach
                        </tr>
                        
                        </tbody>
                    </table>
            @else 

            @endif
              
             

            
        </div> <!--row-->
 

</div>
</section>

@endsection

@section('scripts')
@endsection



