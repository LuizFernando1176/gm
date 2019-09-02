<?php

include_once '../util/conecaoBD.php';
$id_setor = $_POST ['id_setor'];
$id_rack = $_POST ['id_rack'];
$nome_maquina = $_POST ['nome_maquina'];
$nome_usuario = $_POST ['nome_usuario'];
$ponto = $_POST ['ponto'];
$mac = $_POST ['mac'];

$queryMaquinas = "INSERT INTO `maquina`(`id_setor`, `id_rack`, `nome_maquina`, `nome_usuario`, `ponto`, `mac`) VALUES ('$id_setor','$id_rack','$nome_maquina','$nome_usuario','$ponto','$mac')";
$coon = conectar();
$resultado = mysqli_query($coon, $queryMaquinas);



if ($resultado) {

    echo '<script Language="javascript"> alert("Maquina Cadastrado Com sucesso!!"); location.href="../exibir/exibirMaquinas.php"; </script>';
} else {

    echo 'Erro a cadastra usuario ';
}

?>

