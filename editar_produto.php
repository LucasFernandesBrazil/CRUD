<?php


include 'conexao.php';

echo $id = $_GET['id'];


?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Editar produto</title>

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

      .container
      {
        margin-top: 8%;
        padding: 40px;
        background: #083D77;
        border-radius: 40px 10px;
        box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.5);
        color: #fff;
      }

      body
      {
        background: #242423;
      }
      
      .form-label
      {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 600;
      }

      h4 
      {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 30px;
        font-weight: 700;
        padding-bottom: 20px;
      }

      .botao_voltar 
      {
        text-align: left;
        margin-top: -11%;
      }
    
    </style>
  </head>
  <body>
    
    <div class="container" id="tamanhoContainer">
      <h4>Formulário de atualização</h4>
      <form action="atualizar_produto.php" method="POST">
          <div class="mb-3">
          <form action="_atualizar_produto.php" method="POST">
        <?php

          $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
          $buscar = mysqli_query($conexao, $sql);
          while ($array = mysqli_fetch_array($buscar)) {
            
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

        ?>

          <div class="mb-3">
            <label class="form-label">Número do Produto</label>
            <input name="nroproduto" type="number" class="form-control" value="<?php echo $nroproduto ?>" disabled>
            <input name="id" type="number" class="form-control" value="<?php echo $id ?>" style="display: none;">
          </div>

          <div class="mb-3">
            <label class="form-label">Nome Produto</label>
            <input name="nomeproduto" type="text" class="form-control" value="<?php echo $nomeproduto ?>">
          </div>

          <div class="mb-3">
          <label class="form-label">Categoria</label>
            <select name="categoria" class="form-select">
              <option value="<?php echo $categoria ?>"><?php echo $categoria ?></option>  
              <option value="Periféricos">Periféricos</option> 
              <option value="Hardware">Hardware</option>
              <option value="Software">Software</option>
              <option value="Celulares">Celulares</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Quantidade</label>
            <input name="quantidade" type="number" class="form-control" value="<?php echo $quantidade ?>">
          </div>

          <div class="mb-3">
          <label class="form-label">Fornecedor</label>
            <select name="fornecedor" class="form-select">
              <option value="<?php echo $fornecedor ?>"><?php echo $fornecedor ?></option>  
              <option value="Fornecedor A">Fornecedor A</option>
              <option value="Fornecedor B">Fornecedor B</option>
              <option value="Fornecedor C">Fornecedor C</option>
            </select>
          </div>

          <div class="button_right"> 
            <button type="submit" class="btn btn-success btn-lg"> Atualizar</button>
          </div>
          <?php } ?>
      </form>

      
      <div class="botao_voltar">
      <a href="listar_produtos.php" role="button" class="btn btn-lg btn-primary">Voltar</a>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
