<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>timber House</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">


    <?php wp_head(); ?>

</head>

<body>
    <header class="header" style="background-image: url(img/bg.jpg)">
        <div class="header__inner">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home.png" alt="">
            <div class="header__name">
                timber House
            </div>
            <a class="phone" href="tel:+75852772217">+7 (585) 277-22-17</a>
            <div class="header__title">
                Дома из бруса под ключ
            </div>
            <div class="header__sale">
                <img src="img/sale.png" alt="">
            </div>
        </div>
    </header>