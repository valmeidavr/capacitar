@extends('layouts.template')

@section('titulo')
    Cadastrar 
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
        <form method="POST" action="{{ route('cadastrar-salvar')}}">
          @csrf  
          <div class="form-row">
            <div class="form-group col-md-12">
              <label >Nome</label>
              <input type="text" class="form-control" name="name" placeholder="Nome" required>
            </div>           
         </div>
         <div class="form-row">
          <div class="form-group col-md-6">
            <label >E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group col-md-6">
            <label >Senha</label>
            <input type="password" name="password" class="form-control" placeholder="Senha" required>
          </div>
       </div>


         <div class="form-row">
            <div class="form-group col-md-3">
              <label >Data de Nascimento</label>
              <input type="date" class="form-control" name="dtnascimento" placeholder="Data de Nascimento" required>
            </div>

            <div class="form-group col-md-3">
              <label >Gênero</label>
              <select name="genero" class="form-control" required>
                  <option default value='' selected>Selecione..</option>
                  <option value='M'>Masculino</option>
                  <option value='F'>Feminino</option>
                  <option value='ND'>Não Informar</option>
                  <option value='O'>Outros</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label >Telefone</label>
              <input type="text" class="form-control" name="telefone" id='telefone' placeholder="Telefone" required data-mask="(99)99999-9999">
            </div>


         </div>

     
          <div class="form-row">
            <div class="form-group col-md-3">
              <label >CPF</label>
              <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" data-mask="999.999.999-99" required>
            </div>


              <div class="form-group col-md-3">
                <label >Documento</label>
                <input type="number" class="form-control" name="documento" placeholder="Documento">
              </div>

            
          </div>
           <div class="form-row">
            <div class="form-group col-md-2">
                <label >CEP</label>
                <input type="number" id="cep" class="form-control" name="cep" required>
            </div>
            <div class="form-group col-md-10">
              <label >Logradouro</label>
              <input type="text" class="form-control" name="logradouro" required>
            </div>
           </div>
           <div class="form-row">
           
            <div class="form-group col-md-2">
              <label >Número</label>
              <input type="text" class="form-control" name="numero" required>
            </div>
            <div class="form-group col-md-10">
              <label >Complemento</label>
              <input type="text" class="form-control" name="complemento">
            </div>
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                    <label >Bairro</label>
                    <input type="text" class="form-control" name="bairro" required>
                </div>
                <div class="form-group col-md-6">
                    <label >Cidade</label>
                    <input type="text" class="form-control" name="cidade" required>
                </div>
           </div>

              <div class="form-row">
              <div class="form-group col-md-1">
                <label>UF</label>
                <input type="text" class="form-control" name="uf" value="RJ" placeholder="RJ" required>
              </div>
            </div>     
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
    </section>
<div>
@endsection

@section('scripts')

@endsection