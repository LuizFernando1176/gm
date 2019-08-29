<?php

function urlSite() {

    return 'http://localhost/gm/';
}

function testaSessao() {
    session_start();
    if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
    }
}

?>