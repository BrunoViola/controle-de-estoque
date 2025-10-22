<html>
   <head>
      <link href="/css/app.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
      <title>Controle de estoque</title>
   </head>
   <body>
      <div class="container">
         <h1>Listagem de produtos</h1>
         <table class="table table-striped table-bordered table-hover">
            <?php foreach ($produtos as $p): ?>
               <tr>
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
            <?php endforeach ?>
         </table>
      </div>
   </body>
</html>