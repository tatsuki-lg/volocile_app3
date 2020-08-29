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
                <nav id="global-navi">
                    <ul class="menu">
                        <li><a href="#">FASHION</a></li>
                        <li><a href="#">ONLINE STORE</a></li>
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
                </nav>
            </div>
        </header>
    </section>
    <div class="row justify-content-center btn-on">
        <button type="button" class="btn btn-dark btn-on-1" value="ONLINE_STORE">ONLINE
            STORE &nbsp;&nbsp;&nbsp;<i class="fas fa-shopping-cart"></i></button>
    </div>
    <section>
        <div class="header">
            <header class="header-on">
                <div class="title-border">
                    <h4>PRODUCTS<span>ファッションアイテム</span></h4>
                </div>
            </header>
        </div>
    </section>
    <!-- トレンド欄 -->
    <div class="season">
        <img class="img-ktg" src="<?php echo get_template_directory_uri(); ?>/images/IMG_6208.JPG" alt="SUMMER">
        <div class="text-season"><a class="link-season" href="#">SPRING &
                SUMMER</a></div>
    </div>
    <!-- アイテム欄 -->
    <div class="item">
        <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/0af5a4db3d830885a86f5d7e9b674954.jpg" alt="women's">
                <a class="link-women" href="#">CAP<span>キャップで探す</span></a>

            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/c9dfa48318e599390f8b99a3f98a197d.jpg" alt="men's">
                <a class="link-men">BAG</a>
            </li>
        </ul>
    </div>
    <section>
        <div class="header">
            <header class="header-collect">
                <div class="title-border">
                    <h4>OUTFIT / STYLE<span>コーデ特集</span></h4>
                </div>
            </header>
        </div>
    </section>
    <div class="season">
        <img class="img-ktg" src="<?php echo get_template_directory_uri(); ?>/images/IMG_6216.JPG" alt="SUMMER" style="height: 177px;">
        <div class="text-season"><a class="link-season" href="#">着こなしコーデ</a></div>
    </div>
    <footer>

    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bgswitcher.js"></script>

    <!-- bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- 画像スライドスクリプト -->
    <script>
        jQuery(function($) {
            jQuery('.bg-slider').bgSwitcher({
                images: ['<?php echo get_template_directory_uri(); ?>/images/volocile_200801_60.jpg', '<?php echo get_template_directory_uri(); ?>/images/volocile_200811_0.jpg', '<?php echo get_template_directory_uri(); ?>/images/IMG_6207.JPG'], // 切り替える背景画像を指定
                interval: 5000, // 背景画像を切り替える間隔を指定 3000=3秒
                loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
                shuffle: true, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
                effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
                duration: 1600, // エフェクトの時間を指定します。
                easing: "swing" // エフェクトのイージングをlinear,swingから指定
            });
        });
    </script>
</body>

</html>