<?php
   namespace App\Http\Controllers;

   use Illuminate\Support\Facades\DB;

   class ProdutoController extends Controller {
      public function lista () {
         $produtos = DB::select('SELECT * FROM produtos');
         $html = '<h1>Listagem de Produtos</h1><ul>';

         foreach ($produtos as $p) {
            $html .= '<li>' . $p->nome . '</li>';
            $html .= ', Descrição: ' . $p->descricao . '</li>';
         }

         $html .= '</ul>';
         return $html;
      }
   }
?>