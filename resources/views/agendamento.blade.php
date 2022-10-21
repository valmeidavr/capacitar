@extends('layouts.template')

@section('estilos')
    <link href="{{ asset('css/agenda.css') }}" rel="stylesheet">
@endsection

@section('titulo')
   Agendamento
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

<form id="formAgendamento" action="{{route('agendar')}}" method="post">
    @csrf  
        <h5 style="text-align: center">Agendamento</h5>
        <div class="row">
            <div class="col-6">
                <div class="form-row">
                    <label style="font-weight: 500;">Período</label>
                    <select name="periodo" class="form-control" required>
                        <option default value='' selected>Selecione</option>
                        <option value="M">Manhã</option>
                        <option value="T">Tarde</option>
                        <option value="I">Integral</option>
                    </select>
                </div>
                <br>

                <div class="form-row">
                    <label style="font-weight: 500;">Hotel</label>
                    <select name="hotels_id" id="hotels_id" class="form-control" required>
                        <option default value='' selected>Selecione</option>
                        @foreach($hoteis as $hotel)
                            <option value="{{$hotel->id}}">{{$hotel->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-row">
                    <label style="font-weight: 500;">Setores</label>
                    <select name="setors_id" id="setors_id" class="form-control" required>
                        <option hidden selected>Selecione</option>
                       {{-- JQUERY --}}
                    </select>
                </div>
                <br>
                <div class="form-row">
                    <label style="font-weight: 500;">Data</label>
                    <input name="dataEnviada" class="form-control" id="data" type="date" required readonly>
                </div>
                <div class="form-row">
                    <input type="submit" name="Agendar" id="Agendar" value="Agendar">
                </div>
            </div>

            <div class="col-6">
                <div class="calendar">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker">Fevereiro</span>
                        <div class="year-picker">
                            <span class="year-change" id="prev-year">
                                <span>
                                    <</span> </span> <span id="year">
                                </span>
                                <span class="year-change" id="next-year">
                                    <span>></span>
                                </span>
                        </div>
                    </div>
                    <div class="calendar-body">
                        <div class="calendar-week-day">
                            <div>Dom</div>
                            <div>Seg</div>
                            <div>Ter</div>
                            <div>Qua</div>
                            <div>Qui</div>
                            <div>Sex</div>
                            <div>Sáb</div>
                        </div>
                        <div class="calendar-days">
                        </div>
                    </div>
                    <div class="calendar-footer">
                        <div class="legend">
                            <div class="circle" id="Disponivel">
                                <span>Disponível</span>
                            </div>
                            <div class="circle" id="Cheio">
                                <span>Cheio</span>
                            </div>
                            <div class="circle" id="Indisponivel">
                                <span>Indisponível</span>
                            </div>
                        </div>
                    </div>
                    <div class="month-list"></div>
                </div><!--calendar-->
            </div> <!--col-6-->
        </div> <!--row-->
 
</form>
</div>
</section>

@endsection

@section('scripts')
    <script src="{{asset('js/agendamento.js')}}"></script>
    <script src="{{asset('js/calendario.js')}}"></script>
@endsection



