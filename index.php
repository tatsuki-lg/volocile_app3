    <?php get_header(); ?>
    <div class="header">
        <header class="header-on">
            <div class="title-border">
                <h4>NEWS<span>新着情報</span></h4>
            </div>
        </header>
    </div>
    <!-- 投稿一覧 -->
    <section id="content">
        <div id="content-wrap" class="container">
            <div id="main" class="col-md-9" style="width: 100%;">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <hr>
                        <h4><?php the_title(); ?></h4>
                        <section>
                            <?php the_content(); ?>
                        </section>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- ここまで -->
    <!-- <div class="row justify-content-center btn-on">
        <button type="button" class="btn btn-dark btn-on-1" value="ONLINE_STORE" onclick="location.href='https://livefor0517.base.shop/'">ONLINE
            STORE &nbsp;&nbsp;&nbsp;<i class="fas fa-shopping-cart"></i></button>
    </div> -->
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
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/0af5a4db3d830885a86f5d7e9b674954.jpg" alt="cap">
                <a class="link-cap" href="#">CAP<span>キャップで探す</span></a>

            </li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/c9dfa48318e599390f8b99a3f98a197d.jpg" alt="bag">
                <a class="link-bag">BAG<span>バッグで探す</span></a>
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
        <img class="img-ktg" src="<?php echo get_template_directory_uri(); ?>/images/IMG_6217.JPG" alt="SUMMER">
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
    <div class="row justify-content-center btn-on">
        <button type="button" class="btn btn-dark btn-on-1" value="ONLINE_STORE" onclick="location.href='https://livefor0517.base.shop/'">ONLINE
            STORE &nbsp;&nbsp;&nbsp;<i class="fas fa-shopping-cart"></i></button>
    </div>
    <?php get_footer(); ?>