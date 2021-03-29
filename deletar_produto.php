<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao, $sql);


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style type="text/css">

      #tamanhoContainer 
      {
        width: 500px;
      }

      form 
      {
        margin-top: 20px;
      }

      .container
      {
        width: 500px;
        margin-top: 15%;
        padding: 40px;
        background: #F25F5C;
        border-radius: 40px 10px;
        box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.5);
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
        color: #fff;
      }
    
    </style>

<div class="container">
    <center>
        <h4>Deletado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
    <center>
        <a href="listar_produtos.php" role="button" class="btn btn-lg btn-primary">Voltar</a>
    </center>
    </div>
</div>