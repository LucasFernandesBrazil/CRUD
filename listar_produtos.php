<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Listagem de produtos</title>
    <script src="https://kit.fontawesome.com/6782444073.js" crossorigin="anonymous"></script>
    <style>
        .container 
        {
            margin-top: 40px;
        }

        body 
        {
            background-color: black;
        }

        .container h3 
        {
            color: #fff;
            font-weight: 700;
            font-size: 50px;
            text-align: center;
        }

        table 
        {
            border: 10px solid #fff;
        }

    </style>
</head>
<body>
    
<div class="container">
    <h3>Lista de produtos</h3>
    <br>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
            <th scope="col">Nro Produto</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
               <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM `estoque`";
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)) {

                        $id_estoque = $array['id_estoque'];
                        $nroproduto = $array['nroproduto'];
                        $nomeproduto = $array['nomeproduto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];

                ?>
            <tr>
               <td><?php echo $nroproduto ?></td>

               <td><?php echo $nomeproduto ?></td>

               <td><?php echo $categoria ?></td>

               <td><?php echo $quantidade ?></td>

               <td><?php echo $fornecedor ?></td>

               <td><a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp&nbspEditar</a>
                   <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i></i>&nbsp&nbspDeletar</a>
               </td>
            </tr>

               <?php  }  ?>
        
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>