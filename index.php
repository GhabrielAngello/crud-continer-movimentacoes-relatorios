<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Conteiner</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CRUD CONTÊINER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="font-size: 20px;" class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contêiner</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=novo">Novo Contêiner</a></li>
                <li><a class="dropdown-item" href="?page=listar">Lista de Contêiners</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar-mov">Lista de Movimentações</a>
            </li>
            <li class="nav-item dropdown">
              <button class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Relatórios</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=relatorio">Movimentações Agrupadas</a></li>
                <li><a class="dropdown-item" href="?page=total-import-export">Total de Importação e Exportação</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
              <?php
                  include("config.php");
                  switch(@$_REQUEST["page"]){
                    case "novo":
                      include("novo-conteiner.php");
                    break;
                    case "listar":
                      include("lista-conteiner.php");
                    break;
                    case "salvar":
                      include("salvar-conteiner.php");
                    break;
                    case "editar":
                      include("editar-conteiner.php");
                    break;
                    case "novo-mov":
                      include("novo-movimentacoes.php");
                    break;
                    case "listar-mov":
                      include("lista-movimentacoes.php");
                    break;
                    case "salvar-mov":
                      include("salvar-movimentacoes.php");
                    break;
                    case "editar-mov":
                      include("editar-movimentacoes.php");
                    break; 
                    case "relatorio":
                      include("relatorio.php");
                    break;
                    case "total-import-export":
                      include("total-importacao-exportacao.php");
                    break;  
                    default:
                      echo "<h1>Bem vindo ao sistema de CRUD de Contêiner!</h1>";
                  }
              ?> 
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>