<?php
include_once '../util/conecaoBD.php';
include_once '../util/cabeca.php';

$complementoQuery = "";
$net = mysqli_connect("localhost", "root", "", "bd_pc");
isset($_POST['nome_maquina']) ? $complementoQuery .= " AND m.nome_maquina LIKE '%" . mysqli_escape_string($net, $_POST['nome_maquina']) . "%'" : $complementoQuery .= "";
isset($_POST['mac']) ? $complementoQuery .= " AND m.mac LIKE '%" . mysqli_escape_string($net, $_POST['mac']) . "%'" : $complementoQuery .= "";
isset($_POST['setor']) ? $complementoQuery .= " AND s.setor LIKE '%" . mysqli_escape_string($net, $_POST['setor']) . "%'" : $complementoQuery .= "";

$query = "select m.id , m.nome_maquina , m.nome_usuario , r.rack ,s.setor, m.ponto , m.mac , m.inv ,m.tombo , w.sw , b.barramento from maquina m join rack r on m.id_rack = r.id join setor s on m.id_setor = s.id join switch w on m.id_sw = w.id join barramento b on m.id_barramento = b.id WHERE TRUE  " . $complementoQuery;
$queryRack = mysqli_query($net, $query);
$row = mysqli_num_rows($queryRack);
?>

<div   style="margin-top: 7%;margin-left: 8%">
    <table class="table table-striped table-responsive" >
        <thead>
            <tr><th>Setor</th><th>N. do Usuário</th><th>N. da Máquina</th><th>INV</th><th>Tombo</th><th>MAC</th><th>Ponto</th><th>Rack</th><th>Switch</th><th>Barramento</th></tr>
        </thead>

        <tbody>

            <?php
            echo "<div class='alert alert-info'>A Busca retornou :<strong> $row</strong> resultados</div>";

            while ($queryRacks = mysqli_fetch_assoc($queryRack)) {
                echo "<tr>";
                echo "<td >" . utf8_encode($queryRacks['setor']) . "</td>";
                echo "<td >" . $queryRacks['nome_usuario'] . "</td>";
                echo "<td >" . $queryRacks['nome_maquina'] . "</td>";
                echo "<td >" . utf8_encode($queryRacks['inv']) . "</td>";
                echo "<td >" . utf8_encode($queryRacks['tombo']) . "</td>";
                echo "<td >" . $queryRacks['mac'] . "</td>";
                echo "<td >" . $queryRacks['ponto'] . "</td>";
                echo "<td >" . $queryRacks['rack'] . "</td>";
                echo "<td >" . utf8_encode($queryRacks['sw']) . "</td>";
                echo "<td >" . utf8_encode($queryRacks['barramento']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        
        <script src="../js/feather.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="../js/jquery.mask.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    </table>
    <center><button class='btn btn-warning'value='Print this page' onClick='window.print()'>Imprimir</button></center>
        
</div>

