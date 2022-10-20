@extends('layouts.template')

@section('titulo')
    Cadastrar 
@endsection
@section('conteudo')
<div class="container">
    <section class="frm_cadastro">
        <form method="POST" action="{{ route('cadastrar-salvar')}}">
          @csrf  
          <div class="form-row">
            <div class="form-group col-md-12">
              <label >Nome</label>
              <input type="email" class="form-control" name="name" placeholder="Nome">
            </div>           
         </div>
         <div class="form-row">
          <div class="form-group col-md-6">
            <label >E-mail</label>
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label >Senha</label>
            <input type="password" class="form-control" placeholder="Senha">
          </div>
       </div>
       

         <div class="form-row">
            <div class="form-group col-md-3">
              <label >Data de Nascimento</label>
              <input type="date" class="form-control" name="dtnascimento" placeholder="Data de Nascimento">
            </div>

            <div class="form-group col-md-3">
              <label >Gênero</label>
              <select name="genero" class="form-control">
                  <option default value='' selected>Selecione..</option>
                  <option value='M'>Masculino</option>
                  <option value='F'>Feminino</option>
                  <option value='ND'>Não Informar</option>
                  <option value='O'>Outros</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label >Telefone</label>
              <input type="text" class="form-control" name="telefone" placeholder="Telefone">
            </div>


         </div>

     
          <div class="form-row">
            <div class="form-group col-md-3">
              <label >CPF</label>
              <input type="text" class="form-control" name="cpf" placeholder="CPF">
            </div>


              <div class="form-group col-md-3">
                <label >Documento</label>
                <input type="text" class="form-control" name="documento" placeholder="Documento">
              </div>

            
          </div>
           <div class="form-row">
            <div class="form-group col-md-2">
                <label >CEP</label>
                <input type="text" class="form-control" name="cep">
            </div>
            <div class="form-group col-md-10">
              <label >Logradouro</label>
              <input type="text" class="form-control" name="logradouro">
            </div>
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                    <label >Bairro</label>
                    <input type="text" class="form-control" name="complemento">
                </div>
                <div class="form-group col-md-6">
                    <label >Cidade</label>
                    <input type="text" class="form-control" name="cidade">
                </div>
           </div>

              <div class="form-row">
              <div class="form-group col-md-1">
                <label>UF</label>
                <input type="text" class="form-control" name="uf" placeholder="RJ">
              </div>
            </div>     
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
    </section>
<div>
@endsection