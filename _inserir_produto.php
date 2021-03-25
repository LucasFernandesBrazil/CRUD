<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; //Recebe o valor do atributo

$nomeproduto = $_POST['nomeproduto'];

$categoria = $_POST['categoria'];

$quantidade = $_POST['quantidade'];

$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px" >
    <center>
        <h4>Produto adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
    <center>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo ítem</a>
    </center>
    </div>
</div>