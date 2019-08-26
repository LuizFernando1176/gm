<?php
include_once './config.php';
include_once './util/cabecaLogin.php';
include_once './util/conecaoBD.php';
session_start();
$message="";
if(count($_POST)>0) {
 $con = conectar();
$result = mysqli_query($con,"SELECT * FROM usuario WHERE login='" . $_POST["login"] . "' and senha = '". $_POST["senha"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["login"] = $row['login'];
$_SESSION["senha"] = $row['senha'];
} else {
$message = "<div class='alert alert-danger'>Senha ou Usuario invalidos!</div>";
}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}


?>

<div class="container">

    <center>
        <form style="margin: 4% ; padding: 1.5%;margin-top: 12%;" method="post" action="">
        <div class="card" style="margin: 4% ; padding: 1.5%;">
            <center><h3 class="descEstilo">Login</h3></center><br><br>
            <?php if($message!="") { echo $message; } ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome_maquina" >Login</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login" required="">
                </div><br><br>
                <div class="form-group col-md-6">
                    <label for="nome_usuario">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="">
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <button type="reset" class="btn btn-danger">Apagar</button>
            </center>
        </div>
    </form>
</center>



</div>

<?php
include_once './util/rodape.php';
?>