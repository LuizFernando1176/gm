<?php

include_once '../util/conecaoBD.php';
$setor =$_POST['setor'];
$coon = conectar();
$query01 = "INSERT INTO `setor`( `setor`) VALUES ('$setor')";
$queryCadastroSetor = mysqli_query($coon, $query01);
$resultado = $queryCadastroSetor;


if ($resultado) {

    echo '<script Language="javascript"> alert("Usuario Cadastrado Com sucesso!!"); location.href="../cadastroSetor.php"; </script>';
} else {

    echo 'Erro a cadastra usuario ';
}

      