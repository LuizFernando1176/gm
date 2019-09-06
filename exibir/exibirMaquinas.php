<?php
include_once '../util/conecaoBD.php';
include_once '../util/cabeca.php';

$coon = conectar();
$query01 = "select m.id , m.nome_maquina , m.nome_usuario , r.rack ,s.setor, m.ponto , m.mac , m.inv ,m.tombo , w.sw , b.barramento from maquina m join rack r on m.id_rack = r.id join setor s on m.id_setor = s.id join switch w on m.id_sw = w.id join barramento b on m.id_barramento = b.id ";
$queryRack = mysqli_query($coon, $query01);
?>



<div   style="margin-top: 10%;margin-left: 2%">

    <table class="table table-hover table-responsive" >
        <thead>
            <tr><th>N. da Maquina</th><th>N. do Usuario</th><th>Ponto</th><th>MAC</th><th>Rack</th><th>Setor</th><th>Switch</th><th>Barramento</th><th>INV</th><th>Tombo</th><th>Editar</th><th>Excluir</th></tr>
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
                echo "<td >" . utf8_encode($queryRacks['sw']) . "</td>";
                echo "<td >" . utf8_encode($queryRacks['barramento']) . "</td>";
                echo "<td >" . utf8_encode($queryRacks['inv']) . "</td>";
                echo "<td >" . utf8_encode($queryRacks['tombo']) . "</td>";
                echo "<td >" . "<button class='btn btn-warning'><a href='../editar/editarMaquina.php?id=" . $queryRacks['id'] . "'>Editar</a></button>" . "</td>";
                echo "<td >" . "<button class='btn btn-danger'><a href='../deletes/deletarMaquina.php?id=" . $queryRacks['id'] . "'>Deletar</a></button>" . "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

</div>

<?php
include_once '../util/rodape.php';
?>