@extends('layout/principal')

@section('conteudo')
   <h1>Listagem de produtos</h1>
   <table class="table table-striped table-bordered table-hover">
      @forelse ($produtos as $p)
         <tr class="{{ $p->quantidade <= 1 ? 'danger' : '' }}">
            <td><?= $p->nome ?></td>
            <td><?= $p->valor ?></td>
            <td><?= $p->descricao ?></td>
            <td><?= $p->quantidade ?></td>
            <td>
               <a href="/produtos/mostra/<?=$p->id?>">
                  <i class="bi bi-search"></i>
               </a>
            </td>
         </tr>
      @empty
         <div class="alert alert-danger">
            <p>
               Você não tem nenhum produto cadastrado!
            </p>
         </div>
      @endforelse
   </table>

   <br>

   @if(!empty(old('nome')))
      <div>
         <span class="alert alert-success"><strong>Sucesso!</strong> O produto '{{ old('nome') }}' foi adicionado!</span>
      </div>
   @endif
@stop