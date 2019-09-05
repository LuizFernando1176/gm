<?php
include_once '../util/conecaoBD.php';
include_once '../util/cabeca.php';

$coon = conectar();
$query01 = "SELECT `id`,`login`, `senha`, `nivel` FROM `usuario` WHERE 1";
$queryRack = mysqli_query($coon, $query01);
?>

<div class="container ">
    <div class="row ">
        <div class="col">
            <div class=" col-md-12">
                <table class="table table-striped table-responsive" style="margin-top: 15%;">
                    <thead>
                        <tr><th>Nome do Usuario</th><th>Senha</th><th>Nivel</th><th>Editar</th><th>Excluir</th></tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($queryRacks = mysqli_fetch_assoc($queryRack)) {
                            echo "<tr>";
                            echo "<td >" . $queryRacks['login'] . "</td>";
                            echo "<td >" . $queryRacks['senha'] . "</td>";
                            echo "<td >" . $queryRacks['nivel'] . "</td>";
                            echo "<td >" . "<button class='btn btn-warning'><a href='../editar/editarUsuario.php?id=" . $queryRacks['id'] . "'>Editar</a></button>" . "</td>";
                            echo "<td >" . "<button class='btn btn-danger'><a href='../deletes/deletarUsuarios.php?id=" . $queryRacks['id'] . "'>Deletar</a></button>" . "</td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>

<?php
include_once '../util/rodape.php';
?>