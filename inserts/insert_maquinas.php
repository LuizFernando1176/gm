<?php
include_once '../util/conecaoBD.php';
$id_setor = $_POST ['id_setor'];
$id_rack = $_POST ['id_rack'];
$nome_maquina = $_POST ['nome_maquina'];
$nome_usuario = $_POST ['nome_usuario'];
$ponto = $_POST ['ponto'];
$mac = $_POST ['mac'];

$queryMaquinas ="INSERT INTO `maquina`(`id_setor`, `id_rack`, `nome_maquina`, `nome_usuario`, `ponto`, `mac`) VALUES ('$id_setor','$id_rack','$nome_maquina','$nome_usuario','$ponto','$mac')";
$coon = mysqli_connect("localhost", "root", "", "bd_pc");
$resultado = mysqli_query($coon, $queryMaquinas);



if( $resultado ) {
    
    echo '<script Language="javascript"> alert("Usuario Cadastrado Com sucesso!!"); location.href="../index.php"; </script>';
    
} else {

    echo 'Erro a cadastra usuario ';
    
}

      