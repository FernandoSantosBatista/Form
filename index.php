<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

    <header>
    <nav class="header navbar navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
            </div>
    </nav>
        <nav class="nav">
            <div class="container-md">                      
    </nav>
    </header>
    
  <body>

    <div class="container col-7">
  
    <h1>Formulário</h1>
 
    <form method="post" action="cadastro.php">

    <form class="row g-3">
                <div class="row">

                        <div class="col-6">
                            <label for="nome" class="form-label"></label>
                            <input type="text" class="form-control" placeholder="Nome" id="nome" aria-label="First name" name="nome">
                        </div>

                        
                        <div class="col-6">
                            <label for="sobrenome" class="form-label"></label>
                            <input type="text" class="form-control" placeholder="Sobrenome" id="sobrenome" aria-label="sobrenome" name="sobrenome">
                        </div>
                            
                    
                        <div class="col-9">
                            <label for="endereco" class="form-label"></label>
                            <input type="text" class="form-control" id="endereco" placeholder="Rua" name="endereco">
                        </div>

                        <div class="col-3">
                            <label for="numero" class="form-label"></label>
                            <input type="text" class="form-control" id="numero" placeholder="Número" pattern="[0-9]+$" name="numero">
                        </div>

                        <div class="col-7">
                            <label for="complemento" class="form-label"></label>
                            <input type="text" class="form-control" id="complemento" placeholder="Apartamento, casa ou térreo" name="complemento">
                        </div>

                        <div class="col-5">
                            <label for="bairro" class="form-label"></label>
                            <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro">
                        </div>
                        
                        <div class="col-4">
                            <label for="cep" class="form-label"></label>
                                <div class="input-group">
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="Cep" aria-label="cep" pattern="[0-9]+$" >
                                <div class="input-group-append">
                                
                                <input type="button"  class="btn btn-primary" class="btn btn-outline-secondary" id="VerificarCEP" value="Buscar" />
                            </div>
                            </div>
                            
                        </div>                    
                    <div class="col-4">
                        <label for="cidade" class="form-label"></label>
                        <input type="text" id="cidade" class="form-control" placeholder="Cidade" aria-label="cidade" name="cidade" readonly>
                    </div>

                    <div class="col-1 ">
                            <label for="estado" class="form-label"></label>
                            <input type="text" id="estado" class="form-control" placeholder="UF" aria-label="estado" name="estado" name="estado" readonly>
                        </div>


                    <div class="col-4">
                        <label for="inputEmail4" class="form-label"></label>
                            <input type="email" class="form-control" placeholder="@email" id="inputEmail4" name="email">
                        </div>

                    <div class="col-4">
                        <label for="contato" class="form-label"></label>
                            <input type="text"  class="form-control" placeholder="(DDD) Telefone para Contato " id="contato"  pattern="[0-9]+$" name="contato">
                        </div>
                    </div>

                    <div class="col">
                            <br>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        
                </form>
                </div>
            </div>
        </div>
    </div>
</div>


                
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
  
    

</html>


