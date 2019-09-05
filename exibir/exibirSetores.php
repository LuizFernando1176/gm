<?php
include_once '../util/conecaoBD.php';
include_once '../util/cabeca.php';

$coon = conectar();
$query01 = "SELECT * FROM `setor` WHERE 1 ";
$queryRack = mysqli_query($coon, $query01);
?>
<div class="container ">
    <div class="row">
        <div class=" col-lg-4">


            <table class="table table-striped table-responsive" style="margin-top: 25%;float: left">
                <thead>
                    <tr><th>Nome do Setor</th><th>Editar</th><th>Excluir</th></tr>
                </thead>
                <tbody>
                    <?php
                    while ($queryRacks = mysqli_fetch_assoc($queryRack)) {
                        echo "<tr>";
                        echo "<td >" . utf8_encode($queryRacks['setor']) . "</td>";
                        echo "<td >" . "<button class='btn btn-warning'><a href='../editar/editarSetor.php?id=" . $queryRacks['id'] . "'>Editar</a></button>" . "</td>";
                        echo "<td >" . "<button class='btn btn-danger'><a href='../deletes/deletarSetor.php?id=" . $queryRacks['id'] . "'>Deletar</a></button>" . "</td>";
                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>


        </div>
    </div>
</div>

<?php
include_once '../util/rodape.php';
?>