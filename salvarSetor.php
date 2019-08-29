<?php

include_once './util/conecaoBD.php';
include_once 'config.php';
$id = $_POST['id'];
$setor = $_POST ['setor'];
$querySetor = "UPDATE `setor` SET `setor`='$setor' WHERE id = '$id'";
$coon = conectar();
$resultado = mysqli_query($coon, $querySetor);



if ($resultado) {

    echo '<script Language="javascript"> alert("Setor editado com sucesso!!"); location.href="exibirSetores.php"; </script>';
} else {

    echo 'Erro a cadastra usuario ';
}

      