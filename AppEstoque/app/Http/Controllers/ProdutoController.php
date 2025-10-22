<?php
   namespace App\Http\Controllers;

   use Illuminate\Support\Facades\DB;
   use Request;

   class ProdutoController extends Controller {
      public function lista () {
         $produtos = DB::select('SELECT * FROM produtos');
         
         return view('listagem')->with('produtos', $produtos);
      }

      public function mostra () {
         $id = Request::route('id'); //acessa o valor de id enviado na requisição

         $produto = DB::table('produtos')->where('id', $id)->first(); //select do produto a ter os detalhes exibidos 

         if(empty($produto)){
            return "Esse produto não existe";
         }

         return view('detalhesProduto')->with('p', $produto);
      }
   }
?>