<?php
include_once './util/conecaoBD.php';
include_once 'config.php';
include_once './util/cabeca.php';
include_once './util/rodape.php';
$id = $_GET['id'];
$coon = conectar();
$query02 = "SELECT `id`, `login`, `senha`, `nivel` FROM `usuario` WHERE  id=$id";
$query = mysqli_query($coon, $query02);
$querySetor = mysqli_fetch_assoc($query);
?>



<div class="container">


    
    <form style="margin: 4% ; padding: 1.5%;margin-top: 25%;" method="post" action="inserts/insert_user01.php">
        <center><h3 class="descEstilo">Editar Usuario</h3></center><br><br>
        <center> <div class="form-row">
                <div class="form-group col-md-3"></div>
                <div class="form-group col-md-6">
                    <input type="hidden" value="<?php echo $id; ?>" name="id" />
                    <label for="setor">Nome do Usuario</label>
                    <input type="text" class="form-control" id="setor" value="<?php echo $querySetor ['login'] ?>" name="setor" placeholder="Nome do Usuario">
                </div>
                <div class="form-group col-md-6">
                    <label for="setor">Nome do Usuario</label>
                    <input type="text" readonly=" "class="form-control" id="setor" value="<?php echo $querySetor ['senha'] ?>" name="setor" placeholder="Nome do Usuario">
                </div>
                <div class="form-group col-md-6">
                    <label for="setor">Nome do Usuario</label>
                    <input type="text" readonly=""class="form-control" id="setor" value="<?php echo $querySetor ['nivel'] ?>" name="setor" placeholder="Nome do Usuario">
                </div>
            </div>
            <button type="submit" class="btn btn-warning">Editar</button>
        </center>
    </form>
</div>




</div>

<?php
include_once './util/rodape.php';
?>