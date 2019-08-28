<?php
include_once './util/conecaoBD.php';
include_once 'config.php';
$id =$_POST['id']; 
$id_setor = $_POST ['id_setor'];
$id_rack = $_POST ['id_rack'];
$nome_maquina = $_POST ['nome_maquina'];
$nome_usuario = $_POST ['nome_usuario'];
$ponto = $_POST ['ponto'];
$mac = $_POST ['mac'];

$queryMaquinas ="UPDATE `maquina` SET `id_setor`='$id_setor',`id_rack`='$id_rack', `nome_maquina`='$nome_maquina',`nome_usuario`='$nome_usuario',`ponto`='$ponto',`mac`='$mac' WHERE id = '$id'";
$coon = mysqli_connect("localhost", "root", "", "bd_pc");
$resultado = mysqli_query($coon, $queryMaquinas);

echo $queryMaquinas.'<br>';
echo $resultado== false? 'e falso':'e verdadeiro';

if( $resultado ) {
    
//    echo '<script Language="javascript"> alert("Usuario Cadastrado Com sucesso!!"); location.href="exibirMaquinas.php"; </script>';
    
} else {

    echo 'Erro a cadastra usuario ';
    
}

      