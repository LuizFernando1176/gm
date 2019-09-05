<?php
include_once '../util/conecaoBD.php';
include_once '../util/cabeca.php';

$complementoQuery= "";
$net = mysqli_connect("localhost", "root", "", "bd_pc");
isset($_POST['nome_maquina'])? $complementoQuery .= " AND m.nome_maquina LIKE '%". mysqli_escape_string($net, $_POST['nome_maquina'])."%'" : $complementoQuery .= "";
isset($_POST['mac'])? $complementoQuery .= " AND m.mac LIKE '%". mysqli_escape_string($net, $_POST['mac'])."%'" : $complementoQuery .= "";
isset($_POST['setor'])? $complementoQuery .= " AND s.setor LIKE '%". mysqli_escape_string($net, $_POST['setor'])."%'" : $complementoQuery .= "";

$query = "select m.id , m.nome_maquina , m.nome_usuario , r.rack ,s.setor, m.ponto , m.mac , w.sw , b.barramento from maquina m join rack r on m.id_rack = r.id join setor s on m.id_setor = s.id join switch w on m.id_sw = w.id join barramento b on m.id_barramento = b.id WHERE TRUE  ".$complementoQuery;
$resultados = mysqli_query($net, $query);


?>

<div class="container">

    <div class="table-responsive" style="margin-top: 10%;">
        <div class="container">
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <table class="table table-striped table-responsive" >
                            <thead>
                                <tr><th>Nome da Maquina</th><th>Nome do Usuario</th><th>Ponto</th><th>MAC</th><th>Rack</th><th>Setor</th><th>Switch</th><th>Barramento</th><th>Editar</th><th>Excluir</th></tr>
                            </thead>
                           
                            <tbody>
                                <?php
                                 
                                while ($resultado = mysqli_fetch_assoc($resultados)) {
                                    echo "<div class='alert alert-info'>A Busca retornou resultados:<?php echo $id ?> </div>";
                                    echo "<tr>";
                                    echo "<td >" . $resultado['nome_maquina'] . "</td>";
                                    echo "<td >" . $resultado['nome_usuario'] . "</td>";
                                    echo "<td >" . $resultado['ponto'] . "</td>";
                                    echo "<td >" . $resultado['mac'] . "</td>";
                                    echo "<td >" . $resultado['rack'] . "</td>";
                                    echo "<td >" . utf8_encode($resultado['setor']) . "</td>";
                                    echo "<td >" . utf8_encode($resultado['sw']) . "</td>";
                                    echo "<td >" . utf8_encode($resultado['barramento']) . "</td>";
                                    echo "<td >" . "<button class='btn btn-warning'><a href='../editar/editarMaquina.php?id=" . $resultado['id'] . "'>Editar</a></button>" . "</td>";
                                    echo "<td >" . "<button class='btn btn-danger'><a href='../deletes/deletarMaquina.php?id=" . $resultado['id'] . "'>Deletar</a></button>" . "</td>";
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