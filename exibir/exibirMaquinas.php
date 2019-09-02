<?php
include_once '../util/conecaoBD.php';
include_once '../util/cabeca.php';

$coon = conectar();
$query01 = "select m.id , m.nome_maquina , m.nome_usuario , r.rack ,s.setor, m.ponto , m.mac  from maquina m join rack r on m.id_rack = r.id join setor s on m.id_setor = s.id  ";
$queryRack = mysqli_query($coon, $query01);
?>

<div class="container">

    <div class="table-responsive" style="margin-top: 10%;">
        <div class="container">
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <table class="table table-striped table-responsive" >
                            <thead>
                                <tr><th>Nome da Maquina</th><th>Nome do Usuario</th><th>Ponto</th><th>MAC</th><th>Rack</th><th>Setor</th><th>Editar</th><th>Excluir</th></tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($queryRacks = mysqli_fetch_assoc($queryRack)) {
                                    echo "<tr>";
                                    echo "<td >" . $queryRacks['nome_maquina'] . "</td>";
                                    echo "<td >" . $queryRacks['nome_usuario'] . "</td>";
                                    echo "<td >" . $queryRacks['ponto'] . "</td>";
                                    echo "<td >" . $queryRacks['mac'] . "</td>";
                                    echo "<td >" . $queryRacks['rack'] . "</td>";
                                    echo "<td >" . utf8_encode($queryRacks['setor']) . "</td>";
                                    echo "<td >" . "<button class='btn btn-warning'><a href='../editar/editarMaquina.php?id=" . $queryRacks['id'] . "'>Editar</a></button>" . "</td>";
                                    echo "<td >" . "<button class='btn btn-danger'><a href='../deletes/deletarMaquina.php?id=" . $queryRacks['id'] . "'>Deletar</a></button>" . "</td>";
                                    echo "</tr>";
                                }
                                ?>

                            </tbody>
                        </table>
                    </table>
                </div>


            </div>
        </div>
        </main>
    </div>

    <?php
    include_once '../util/rodape.php';
    ?>