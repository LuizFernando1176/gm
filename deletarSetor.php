<?php

include_once './util/conecaoBD.php';
include_once 'config.php';
$id = $_GET['id'];

$queryDeletaMaquina = "DELETE FROM `maquina` WHERE id ='$id'";
$coon = conectar();
$resultado = mysqli_query($coon, $queryDeletaMaquina);



if ($resultado) {

    echo '<script Language="javascript"> alert("Maquina deletada  com sucesso!!"); location.href="exibirMaquinas.php"; </script>';
    echo $id;
} else {

    echo 'Erro a cadastra usuario ';
}

      