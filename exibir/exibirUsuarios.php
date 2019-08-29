<?php
include_once './config.php';
include_once './util/cabeca.php';
include_once './util/conecaoBD.php';
$coon = conectar();
$query01 = "SELECT `id`,`login`, `senha`, `nivel` FROM `usuario` WHERE 1";
$queryRack = mysqli_query($coon, $query01);
?>

<div class="container">

   
        
            
                <table class="table table-striped table-responsive " style="margin-top: 10%;">
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
                            echo "<td >" . "<button class='btn btn-warning'><a href='editarUsuario.php?id=" . $queryRacks['id'] . "'>Editar</a></button>" . "</td>";
                            echo "<td >" . "<button class='btn btn-danger'><a href='deletarUsuarios.php?id=" . $queryRacks['id'] . "'>Deletar</a></button>" . "</td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
       
  

</div>

<?php
include_once './util/rodape.php';
?>