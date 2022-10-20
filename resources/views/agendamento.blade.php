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
<form id="formAgendamento" action="#" method="post">
    @csrf  

        <h5 style="text-align: center">Agendamento</h5>
        <div class="row">
            <div class="col-6">
                <div class="form-row">
                    <label style="font-weight: 500;">Período</label>
                    <select name="periodo" class="form-control">
                        <option default value='' selected>Selecione..</option>
                        <option value="M">Manhã</option>
                        <option value="T">Tarde</option>
                        <option value="I">Integral</option>
                    </select>
                </div>
                <br>

                <div class="form-row">
                    <label style="font-weight: 500;">Hotel</label>
                    <select name="hotels_id" class="form-control">
                        <option default value='' selected>Selecione..</option>
                        <option value="M">HOTEL - BELA VISTA</option>
                        <option value="I">HOTEL - VILA BUSINESS</option>
                    </select>
                </div>
                <br>
                <div class="form-row">
                    <label style="font-weight: 500;">Setores</label>
                    <select name="setors_id" class="form-control">
                        <option default value='' selected>Selecione..</option>
                        <option value="1">Governança</option>
                        <option value="2">Garçom</option>
                        <option value="3">Barman</option>
                        <option value="4">Cozinha</option>
                        <option value="5">Recepção</option>
                    </select>
                </div>
                <br>
                <div class="form-row">
                    <label style="font-weight: 500;">Data</label>
                    <input name="dataEnviada" class="form-control" id="data" type="text" required readonly>
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
    <script src="{{asset('/js/calendario.js')}}"></script>
@endsection



