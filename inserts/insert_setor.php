<?php

include_once '../util/conecaoBD.php';
$setor =$_POST['login'];
$coon = conectar();
$query01 = "INSERT INTO `usuario`( `login`) VALUES ('$login')";
$queryCadastroUser = mysqli_query($coon, $query01);
$resultado = $queryCadastroUser;


if ($resultado) {

    echo '<script Language="javascript"> alert("Usuario Cadastrado Com sucesso!!"); location.href="../exibirUsuario.php"; </script>';
} else {

    echo 'Erro a cadastra usuario ';
}

      