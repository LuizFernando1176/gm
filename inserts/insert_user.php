<?php
include_once '../util/conecaoBD.php';
$login = $_POST ['login'];
$senha = $_POST ['senha'];
$nivel = $_POST ['nivel'];


$queryUsuario ="INSERT INTO `usuario`(`login`, `senha`, `nivel`) VALUES ('$login','$senha','$nivel')";
$coon = mysqli_connect("localhost", "root", "", "bd_pc");
$resultado = mysqli_query($coon, $queryUsuario);



if( $resultado ) {
    
    echo '<script Language="javascript"> alert("Usuario Cadastrado Com sucesso!!"); location.href="../index.php"; </script>';
    
} else {

    echo 'Erro a cadastra usuario ';
    
}

      