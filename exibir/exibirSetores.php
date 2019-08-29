<?php
include_once './config.php';
include_once './util/cabeca.php';
include_once './util/conecaoBD.php';
$coon = conectar();
$query01 = "SELECT * FROM `setor` WHERE 1 ";
$queryRack = mysqli_query($coon, $query01);
?>

<div class="container">

    <div class="table-responsive" style="margin-top: 10%;float: left">
        <div class="container">
            <center>
                <div class="table-responsive">
                        <table class="table table-striped table-responsive" >
                            <thead>
                                <tr><th>Nome do Setor</th><th>Editar</th><th>Excluir</th></tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($queryRacks = mysqli_fetch_assoc($queryRack)) {
                                    echo "<tr>";
                                    echo "<td >" . utf8_encode($queryRacks['setor']) . "</td>";
                                    echo "<td >" . "<button class='btn btn-warning'><a href='editarSetor.php?id=" . $queryRacks['id'] . "'>Editar</a></button>" . "</td>";
                                    echo "<td >" . "<button class='btn btn-danger'><a href='deletarSetor.php?id=" . $queryRacks['id'] . "'>Deletar</a></button>" . "</td>";
                                    echo "</tr>";
                                }
                                ?>

                            </tbody>
                        </table>
                    </table></center>
                </div>


            
        </div>
        </main>
    </div>

    <?php
    include_once './util/rodape.php';
    ?>