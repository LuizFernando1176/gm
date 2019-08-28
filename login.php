<?php
include_once './util/cabecaLogin.php';
?>



<div class="container" style="margin-top: 12%;float: right">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4 col-sm-6">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title text-center mb-4 mt-1">Login</h4>
                    <hr>
                    <p class="text-success text-center">Faça o login , para acessa o sistema.</p>
                    <form method="post" action="inserts/insteLogin.php">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input name="login" class="form-control" placeholder="login" type="text">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input class="form-control" placeholder="******" name="senha" type="password">
                            </div> <!-- input-group.// -->
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-primary "> Login  </button></center>
                        </div> <!-- form-group// -->
                        <!--<p class="text-center"><a href="#" class="btn">Forgot password?</a></p>-->
                    </form>
                </article>
            </div> <!-- card.// --> 

        </div>

    </div>



</div> <!-- row.// -->


<!--container end.//-->


<?php
include_once './util/rodape.php';
?>