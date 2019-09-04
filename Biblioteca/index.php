<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo/estilo.css">
        <!-- jQuery library -->
        
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 bg-primary" >
                    <h1 class="display-4">BIBLIOTECA ONLINE</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-success">
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand -->
                
                <!-- Links -->
                <ul class="navbar-nav">
                  

                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Autores
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_autor">Incluir Autores</a>
                      <a class="dropdown-item" href="#">Alterar Autores</a>
                      <a class="dropdown-item" href="#" id="select_autor">Consultar Autores</a>
                      <a class="dropdown-item" href="#" id="excluir_autor">Excluir Autores</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Editoras
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_editora">Incluir Editoras</a>
                      <a class="dropdown-item" href="#">Alterar Editoras</a>
                      <a class="dropdown-item" href="#" id="select_editora">Consultar Editoras</a>
                      <a class="dropdown-item" href="#" id="excluir_editora">Excluir Editoras</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Socios
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_socios">Incluir Socios</a>
                      <a class="dropdown-item" href="#">Alterar Socios</a>
                      <a class="dropdown-item" href="#" id="select_socios">Consultar Socios</a>
                      <a class="dropdown-item" href="#" id="excluir_socio">Excluir Socios</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Livros
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="inclui_livros">Incluir Livros</a>
                      <a class="dropdown-item" href="#">Alterar Livros</a>
                      <a class="dropdown-item" href="#" id="select_livros">Consultar Livros</a>
                      <a class="dropdown-item" href="#" id="excluir_livro">Excluir Livros</a>
                    </div>
                  </li>
                </ul>
               </nav>
                </div>
            </div>
             
                <div class="row">
                    <div class="col-3 bg-light">
                        
                    </div>
                    <div class="col-9 bg-light">
                        <div id="conteudo-pagina-lida">
                            
                        </div>
                    </div>
                </div>
        </div>
        <script src="jquery/jquery.min.js"></script>
        <script src="ajax/popper.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script>
           
            $(document).ready(function(){
                $("#inclui_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#altera_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("altera_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#select_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("select_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#excluir_autor").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("excluir_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#inclui_editora").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_editora.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#select_editora").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("select_editora.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#excluir_editora").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("excluir_editora.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#inclui_socios").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_socios.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#select_socios").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("select_socios.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#excluir_socios").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("excluir_autor.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#inclui_livros").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("inclui_livros.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#select_livros").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("select_livros.php"); 
                    });
                })
            });
            $(document).ready(function(){
                $("#excluir_livros").click(function(){ 
                    $(function(){
                            $("#conteudo-pagina-lida").load("excluir_autor.php"); 
                    });
                })
            });
    </script>

                
    </body>
</html>
