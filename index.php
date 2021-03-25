<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>

    <style type="text/css">

      #tamanhoContainer 
      {
        width: 500px;
      }

      .button_right 
      {
        text-align: right;
      }

      form 
      {
        margin-top: 20px;
      }
    
    </style>
  </head>
  <body>
    
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
      <h4>Formulário de Cadastro</h4>
      <form action="_inserir_produto.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Número do Produto</label>
            <input name="nroproduto" type="number" class="form-control" placeholder="Insira o número do produto" required autocomplete="off">
          </div>

          <div class="mb-3">
            <label class="form-label">Nome Produto</label>
            <input name="nomeproduto" type="text" class="form-control" placeholder="Insira o nome do produto" required autocomplete="off">
          </div>

          <div class="mb-3">
          <label class="form-label">Categoria</label>
            <select name="categoria" class="form-select" aria-label="Default select example">
              <option selected>Selecione uma categoria</option>
              <option value="1">Periféricos</option> 
              <option value="2">Hardware</option>
              <option value="3">Software</option>
              <option value="4">Celulares</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Quantidade</label>
            <input name="quantidade" type="number" class="form-control" placeholder="Insira a quantidade do produto" required autocomplete="off">
          </div>

          <div class="mb-3">
          <label class="form-label">Fornecedor</label>
            <select name="fornecedor" class="form-select" aria-label="Default select example">
              <option selected>Selecione um Fornecedor</option>
              <option value="1">Fornecedor A</option>
              <option value="2">Fornecedor B</option>
              <option value="3">Fornecedor C</option>
            </select>
          </div>

          <div class="button_right"> 
            <button type="submit" class="btn btn-success btn-sm"> Cadastrar</button>
          </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>