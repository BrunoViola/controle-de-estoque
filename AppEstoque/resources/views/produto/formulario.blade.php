@extends('layout/principal')

@section('conteudo')
   <h1>Novo produto</h1>

   <form action="/produtos/cadastrar" method="post"> {{-- para onde os dados do formulário serão enviados --}}

      <input type="hidden" name="_token"
         value="{{{ csrf_token() }}}">

      <div class="form-group">
         <label for="nome">Nome</label>
         <input type="text" class="form-control" name="nome">
      </div>

      <div class="form-group">
         <label for="descricao">Descrição</label>
         <input type="text" class="form-control" name="descricao">
      </div>

      <div class="form-group">
         <label for="valor">Valor</label>
         <input type="text" class="form-control" name="valor">
      </div>

      <div class="form-group">
         <label for="quantidade">Quantidade</label>
         <input type="number" class="form-control" name="quantidade">
      </div>

      <button type="submit"
      class="btn btn-primary btn-block">Cadastrar</button>

   </form>

@stop