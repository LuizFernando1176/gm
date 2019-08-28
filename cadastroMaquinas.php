<?php
include_once './config.php';
include_once './util/cabeca.php';
include_once './util/conecaoBD.php';
$coon = mysqli_connect("localhost", "root", "", "bd_pc");
$query01 = "SELECT `id`, `rack` FROM `rack`";
$query02 = "SELECT `id`, `setor` FROM `setor`";
$queryRack = mysqli_query($coon, $query01);
$querySetor = mysqli_query($coon, $query02);

?>

<div class="container">


    <form style="margin: 4% ; padding: 1.5%;margin-top: 10%;" method="post" action="inserts/insert_maquinas.php">
        <center><h3 class="descEstilo">Cadastro de Máquina</h3></center><br><br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome_maquina">Nome da Máquina</label>
                <input type="text" class="form-control" id="nome_maquina" name="nome_maquina" placeholder="Nome da Máquina">
            </div>
            <div class="form-group col-md-6">
                <label for="nome_usuario">Nome do Usuario</label>
                <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" placeholder="Nome do Usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="ponto">Ponto</label>
            <input type="text" class="form-control" id="ponto" name="ponto" placeholder="PPxPTx">
        </div>
        <script src="<?php urlSite(); ?>js/jquery.mask.js" type="text/javascript"></script>
        <script src="<?php urlSite(); ?>js/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="<?php urlSite(); ?>js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                $("#mac").mask("AA:AA:AA:AA:A0:AA");
                

            });
        </script>
        <div class="form-group">
            <label for="mac">Mac</label>
            <input type="text" class="form-control" id="mac" name="mac" placeholder="MAC Apenas numeros">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="setor">Setor</label>
                <select name="id_setor" id="id_setor" class="form-control">
                    <option selected>Escolha o Setor</option>
                    //abrimos um contador while para que enquanto houver registros ele continua no loopin
                    <?php while ($setores = mysqli_fetch_array($querySetor)) { ?>
                        <option value="<?php echo $setores['id'] ?>"><?php echo utf8_encode($setores['setor']) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="rack">Rack</label>
                <select id="id_rack"  name="id_rack" class="form-control">
                    <option selected>Escolha o Rack</option>
                    <?php while ($racks = mysqli_fetch_array($queryRack)) { ?>
                        <option value="<?php echo $racks['id'] ?>"><?php echo $racks['rack'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <center>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-danger">Apagar</button>
        </center>
    </form>




</div>

<?php
include_once './util/rodape.php';
?>