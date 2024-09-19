<?php 

include_once("config/url.php");

include_once("config/process.php");


//limpa a mensagem

if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    <!-- bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonte awesone - fonte de icones   na cdnsjs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=$BASE_URL ?>css/styles.css">
</head>
<body>
<header>
    <nav class = "navbar navbar-expand-lg navbar-dark bg-primary"> <!--bootstrap-->
        <a class = "navbar-brand" href="<?= $BASE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>img/agenda.png" alt="Agenda">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
            </div>
        </div>
</header>