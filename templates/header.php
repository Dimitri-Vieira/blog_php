<?php
    require_once("helpers/url.php");
    require_once("data/categories.php");
    require_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>

    <!-- Estilos do projeto -->
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>css/style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <head>
        <a href="<?php echo $BASE_URL?>">
            <img id="logo" src="<?php echo $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a class="nav-link" href="<?php echo $BASE_URL?>">Home</a></li>
                <li><a class="nav-link" href="#">Categorias</a></li>
                <li><a class="nav-link" href="#">Sobre</a></li>
                <li><a class="nav-link" href="#">Contatos</a></li>
            </ul>
        </nav>
    </head>