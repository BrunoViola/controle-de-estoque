@extends('layout/principal')

@section('conteudo')
   <h1>Novo produto</h1>

   <form action="">
      <div class="form-group">
         <label for="nome">Nome</label>
         <input type="text" class="form-control">
      </div>

      <div class="form-group">
         <label for="descricao">Descrição</label>
         <input type="text" class="form-control">
      </div>

      <div class="form-group">
         <label for="valor">Valor</label>
         <input type="text" class="form-control">
      </div>

      <div class="form-group">
         <label for="quantidade">Quantidade</label>
         <input type="number" class="form-control">
      </div>

      <button type="submit"
      class="btn btn-primary btn-block">Cadastrar</button>

   </form>

@stop