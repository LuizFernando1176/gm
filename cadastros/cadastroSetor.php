<?php
include_once '../config.php';
include_once '../util/cabeca.php';
include_once '../util/conecaoBD.php';

?>

<div class="container">


    <form style="margin: 4% ; padding: 1.5%;margin-top: 15%;" method="post" action="../inserts/insert_setor.php">
        <center><h3 class="descEstilo">Cadastro de Setor</h3></center><br><br>
       <center> <div class="form-row">
                <div class="form-group col-md-3"></div>
            <div class="form-group col-md-6">
                <label for="setor">Nome do Setor</label>
                <input type="text" class="form-control" id="setor" name="setor" placeholder="Nome do Setor">
            </div>
        </div>



    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button type="reset" class="btn btn-danger">Apagar</button>
</center>
</form>
</div>



</div>

<?php
include_once '../util/rodape.php';
?>