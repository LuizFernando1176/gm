<?php
include_once './util/cabecaIndex.php';
include_once './util/conecaoBD.php';
$coon = conectar();
//query de setores//
$query01 = "SELECT count(id) AS total FROM setor";
$totalQuery01 = mysqli_query($coon, $query01);
$totalQuery001 = mysqli_fetch_assoc($totalQuery01);
//query de maquina//
$query02 = "SELECT count(id) AS total FROM maquina";
$totalQuery02 = mysqli_query($coon, $query02);
$totalQuery002 = mysqli_fetch_assoc($totalQuery02);
//query de usuario//
$query03 = "SELECT count(id) AS total FROM usuario";
$totalQuery03 = mysqli_query($coon, $query03);
$totalQuery003 = mysqli_fetch_assoc($totalQuery03);
?>

<div class="container-fluid" style="margin-top: 20%;">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="margin-top: 1%;width: max-content;">
                <center> <div class="card-header">Total de Setores</div></center>
                <div class="card-body">Total de sertores cadatrado é: <strong><?php echo $totalQuery001['total']; ?></strong>
                </div>
                <div class="card-footer"><a href="exibir/exibirSetores.php">Editar | Visualizar -  Setores</a></div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="margin-top: 1%;width: max-content;">
                <center> <div class="card-header">Total de Maquinas</div></center>
                <div class="card-body">Total de sertores Maquinas é: <strong><?php echo $totalQuery002['total']; ?></strong>
                </div>
                <div class="card-footer"><a href="exibir/exibirMaquinas.php">Editar | Visualizar - Maquinas</a></div>

            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="margin-top: 1%;width: max-content;">
                <center> <div class="card-header">Total de Usuarios</div>

                </center>
                <div class="card-body">Total de sertores Usuarios é: <strong><?php echo $totalQuery003['total']; ?></strong></div>
                <div class="card-footer"><a href="exibir/exibirUsuarios.php">Editar | Visualizar - Usuarios</a></div>
            </div>

        </div>
    </div>
</div>


<script src="js/feather.js" type="text/javascript"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="js/jquery.mask.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>


</div>


