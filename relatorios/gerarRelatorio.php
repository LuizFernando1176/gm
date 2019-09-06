<?php
include_once '../util/cabeca.php';
?>
<div class="container" >
    <div class="container-fluid"style="margin-top: 15%;">
        <center><h1>Gerar Relatorio</h1></center>
        <div class="card">
            <form method="post" action="../buscas/buscas.php" style="padding: 2%;margin: 2%">
                <p class="text-success text-center">Escolha um parametro para busca.</p>
                <div class="row" >
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Nome do Setor <span class="text-danger">*</span></label>
                            <input type="text" name="setor" id="setor" class="form-control"  >
                        </div></div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label>N° Do MAC <span class="text-danger">*</span></label>
                            <input type="text" name="mac" id="mac" class="form-control"  >
                        </div></div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label>Nome da Maquina <span class="text-danger">*</span></label>
                            <input type="text" name="nome_maquina" id="nome_maquina" class="form-control"  >
                        </div>
                    </div>
                </div>
                <center> <button type="submit" class="btn btn-outline-success">Enviar</button><br><br></center>
            </form>
        </div>

        <script src="../js/feather.js" type="text/javascript"></script>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="../js/jquery.mask.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>


    </div>
</div></div>



