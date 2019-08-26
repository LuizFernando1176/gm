<?php
include_once './config.php';
include_once './util/cabeca.php';
include_once './util/conecaoBD.php';
$coon = mysqli_connect("localhost", "root", "", "bd_pc");
$query01 = "SELECT `id`, `id_setor`, `id_rack`, `nome_maquina`, `nome_usuario`, `ponto`, `mac` FROM `maquina` WHERE id =id ";
$queryRack = mysqli_query($coon, $query01);


?>

<div class="container">

          <div class="table-responsive" style="margin-top: 14%;">
        <div class="container">
   <div class="container-fluid">
          <div class="table-responsive">
        <table class="table table-striped table-sm">
         <table class="table table-striped table-responsive" >
        <thead>
            <tr><th>ID</th><th>Nome da Maquina</th><th>Nome do Usuario</th><th>Ponto</th><th>MAC</th><th>Rack</th><th>Setor</th><th>Editar</th><th>Excluir</th></tr>
    </thead>
        <tbody>
<?php
 
        while($queryRacks  = mysqli_fetch_assoc($queryRack)){
            echo "<tr>";
            echo "<td >" . $queryRacks['id'] . "</td>";
            echo "<td >" . $queryRacks['nome_maquina'] . "</td>";
            echo "<td >" . $queryRacks['nome_usuario'] . "</td>";
            echo "<td >" . $queryRacks['ponto'] . "</td>";
            echo "<td >" . $queryRacks['mac'] . "</td>";
            echo "<td >" . $queryRacks['id_rack'] . "</td>";
            echo "<td >" . utf8_encode($queryRacks['id_setor']) . "</td>";
            echo "<td >" .  "<button class='btn btn-warning'>Editar</button>". "</td>";
            echo "<td >" . "<button class='btn btn-danger'>Apagar</button>" . "</td>";
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
include_once './util/rodape.php';
?>