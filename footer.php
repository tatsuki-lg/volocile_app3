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
    <?php wp_footer(); ?>
    </body>

    </html>