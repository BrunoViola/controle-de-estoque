<?php
   namespace App\Http\Controllers;

   use Illuminate\Support\Facades\DB;
   use Illuminate\Support\Facades\Log;
   use Request;

   class ProdutoController extends Controller {
      public function lista () {
         $produtos = DB::select('SELECT * FROM produtos');
         
         return view('produto/listagem')->with('produtos', $produtos);
      }

      public function mostra () {
         $id = Request::route('id'); //acessa o valor de id enviado na requisição

         $produto = DB::table('produtos')->where('id', $id)->first(); //select do produto a ter os detalhes exibidos 

         if(empty($produto)){
            return "Esse produto não existe";
         }

         return view('produto/detalhesProduto')->with('p', $produto);
      }

      public function novo () {
         return view('produto/formulario');
      }

      public function cadastrar () {
         Log::info("I accessed the function 'cadastrar' at ProdutoController");

         $nome = Request::input('nome');
         $descricao = Request::input('descricao');
         $valor = Request::input('valor');
         $quantidade = Request::input('quantidade');

         // persistindo no banco de dados
         try {
            DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao)
            VALUES (?,?,?,?)', [$nome, $quantidade, $valor, $descricao]);

            return redirect('/produtos')->withInput(Request::only('nome')); //mantenho apenas o parâmetro nome e não passo os outros
         } catch (\Exception $e) {
            Log::error("Erro ao cadastrar produto: " . $e->getMessage());

            return redirect('/produtos/novo')
            ->withInput()
            ->with('erro', 'Erro ao cadastrar produto');
         }
      }

      public function listarEmJSON () {
         $produtos = DB::table('produtos')->get();

         return $produtos;
      }
   }
?>