<?php
include_once '../config.php';
include_once '../util/cabeca.php';
include_once '../util/conecaoBD.php';
?>

<div class="container">


    <form style="margin: 4% ; padding: 1.5%;margin-top: 10%;" method="post" action="../inserts/insert_user.php">
        <center><h3 class="descEstilo">Cadastro de Usuarios</h3></center><br><br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Login" required="">
            </div>
            <div class="form-group col-md-6">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="">
            </div>
        </div>
        <center> <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nivel">Nivel</label>
                    <select name="nivel" id="nivel" class="form-control" required="">
                        <option>Escolha o Nivel</option>
                        <option value="1">Administrador</option>
                        <option value="2">Atendente</option>
                    </select>
                </div>
            </div></center>
        <center>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-danger">Apagar</button>
        </center>
    </form>




</div>

<?php
include_once '../util/rodape.php';
?>