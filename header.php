<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/reset.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontAwosome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/mobile.css">
    <title>volocile HP</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- top背景画像 -->
    <section>
        <div class="bg-slider" style="position: relative;">
            <div class="logo-main">
                <h1>volocile</h1>
                <h5><b>~life for
                        yourself~</b></h5>
            </div>

        </div>
    </section>
    <section>
        <header class="header">
            <div id="wrapper">
                <a class="scroll-bar" href="#"><span></span>Scroll</a>
                <p class="btn-gnavi">
                    <span></span>
                    <span></span>
                    <span></span>
                </p>
                <nav id="gnav">
                    <ul class="menu">
                        <?php wp_nav_menu(array('theme_location' => 'gnav')); ?>
                        <div class="logo">
                            <h1>volocile</h1>
                            <h3><b>~life for
                                    yourself~</b></h3>
                        </div>
                    </ul>
                    <!-- /#gnav -->
                    <div class="font">
                        <h6>FOLLOW US</h6>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-square"></i>
                    </div>
                </nav>
                <!-- <nav id="global-navi">
                    <ul class="menu">
                        <li><a href="https://livefor0517.base.shop/">ONLINE STORE</a></li>
                        <li><a href="#">NEWS</a></li>
                        <div class="logo">
                            <h1>volocile</h1>
                            <h3><b>~life for
                                    yourself~</b></h3>
                        </div>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                    <div class="font">
                        <h6>FOLLOW US</h6>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook-square"></i>
                    </div>
                </nav> -->
            </div>
        </header>
    </section>