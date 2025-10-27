@extends('layout/principal')

@section('conteudo')
   <h1>Novo produto</h1>
   
   @if($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
               <li>
                  {{ $error }}
               </li>
            @endforeach
         </ul>
      </div>
   @endif

   <form action="/produtos/cadastrar" method="post"> {{-- para onde os dados do formulário serão enviados --}}

      <input type="hidden" name="_token"
         value="{{{ csrf_token() }}}">

      <div class="form-group">
         <label for="nome">Nome</label>
         <input type="text" class="form-control" name="nome"
            value="{{ old('nome') }}">
      </div>

      <div class="form-group">
         <label for="descricao">Descrição</label>
         <input type="text" class="form-control" name="descricao"
            value="{{ old('descricao') }}">
      </div>

      <div class="form-group">
         <label for="valor">Valor</label>
         <input type="text" class="form-control" name="valor"
            value="{{ old('valor') }}">
      </div>

      <div class="form-group">
         <label for="quantidade">Quantidade</label>
         <input type="number" class="form-control" name="quantidade"
            value="{{ old('quantidade') }}">
      </div>

      <button type="submit"
      class="btn btn-primary btn-block">Cadastrar</button>

   </form>

@stop