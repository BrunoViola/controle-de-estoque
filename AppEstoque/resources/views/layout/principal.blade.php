<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="/css/app.css">
   <link rel="stylesheet" href="/css/custom.css">

   <title>Controle de Estoque</title>
</head>
<body>
   <div class="container">
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <a href="/produtos" class="navbar-brand"> Estoque Laravel </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a href="/produtos">Listagem</a>
               </li>
               <li>
                  <a href="/produtos/novo">Cadastrar produto</a>
               </li>
            </ul>
         </div>
      </nav>

      @yield('conteudo')

      <footer class="footer">
         <p>Developed by Bruno Henrique Silva Viola</p>
      </footer>
   </div>
</body>
</html>