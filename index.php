    <?php get_header(); ?>

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
    <section>
        <div class="header">
            <header class="header-collect">
                <div class="title-border">
                    <h4>ONLINE STORE<span>オンラインストア</span></h4>
                </div>
                <div class="text-cmt">
                    <h5>オリジナルグッズや企業コラボレーションアイテム<br>
                        などを販売しております。</h5>
                </div>
            </header>
        </div>
    </section>
    <?php get_footer(); ?>