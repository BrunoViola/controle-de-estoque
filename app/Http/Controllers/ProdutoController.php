<?php
   namespace App\Http\Controllers;

   use Illuminate\Support\Facades\DB;
   use Illuminate\Support\Facades\Log;
   use Request;

   use App\Models\Produto;

   class ProdutoController extends Controller {

      // listagem de todos os produtos em '/produtos'
      public function listar () {
         $produtos = Produto::all();
         
         return view('produto/listagem')->with('produtos', $produtos);
      }

      // exibição de detalhes de um produto em '/produtos/mostra/{id}
      public function mostra () {
         $id = Request::route('id'); //acessa o valor de id enviado na requisição

         $produto = Produto::find($id); //select do produto a ter os detalhes exibidos 

         if(empty($produto)){
            return "Esse produto não existe";
         }

         return view('produto/detalhesProduto')->with('p', $produto);
      }

      public function novo () {
         return view('produto/formulario');
      }

      public function excluir ($id) {
         $produto = Produto::find($id);
         if($produto) {
            $produto->delete();

            return redirect()
            ->action([ProdutoController::class, 'listar'])
            ->with('sucesso', 'Sucesso ao deletar produto');
         } else {
            Log::error("Erro ao deletar produto");

            return redirect('/produtos')
               ->with('erro', 'Erro ao deletar produto');
         }
      }
      
      public function cadastrar () {
         Log::info("I accessed the function 'cadastrar' at ProdutoController");

         $produto = new Produto();

         $produto->nome = Request::input('nome');
         $produto->descricao = Request::input('descricao');
         $produto->valor = Request::input('valor');
         $produto->quantidade = Request::input('quantidade');

         // persistindo no banco de dados
         try {
            $produto->save(); // realiza o insert

            return redirect('/produtos')->withInput(Request::only('nome')); //mantenho apenas o parâmetro nome e não passo os outros
         } catch (\Exception $e) {
            Log::error("Erro ao cadastrar produto: " . $e->getMessage());

            return redirect('/produtos/novo')
            ->withInput()
            ->with('erro', 'Erro ao cadastrar produto');
         }
      }

      // retorna JSON dos produtos cadastrados em '/produtos/json' 
      public function listarEmJSON () {
         $produtos = Produto::all();

         return $produtos;
      }
   }
?>