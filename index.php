    <?php get_header(); ?>
    <div class="header">
        <header class="header-on">
            <div class="title-border">
                <h4>NEWS<span>新着情報</span></h4>
            </div>
        </header>
    </div>
    <!-- 投稿一覧 -->
    <?php
    $news_posts = get_posts(array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'news', // カテゴリをスラッグで指定する場合
        'posts_per_page' => 5, // 表示件数
        'orderby' => 'date', // 表示順の基準
        'order' => 'DESC' // 昇順・降順
    ));
    global $post;
    if ($news_posts) : foreach ($news_posts as $post) : setup_postdata($post); ?>
            <!-- ループはじめ -->
            <section id="content">
                <div id="content-wrap" class="container">
                    <div id="main" class="col-md-9" style="width: 100%;">
                        <ul class="articles news">
                            <li class="article-news">
                                <a href="<?php the_permalink() ?>" style="color:#000; display:block"><span class="title"><?php the_title(); ?></span>
                                    <div class="news-contents"><?php
                                                                add_filter('excerpt_length', function ($length) {
                                                                    return 38; //表示する文字数
                                                                }, 999);
                                                                the_excerpt();
                                                                ?>
                                    </div>
                                    <div class="news-day"><?php the_time('Y/m/d') ?></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- ループおわり -->
    <?php endforeach;
    endif;
    wp_reset_postdata(); ?>
    <a href="<?php the_permalink() ?>" role="button" class="btn btn-outline-secondary mx-auto d-block" style="width: fit-content;margin-top: 60px;">もっと見る</a>

    <!-- ここまで -->
    <!-- <div class=" row justify-content-center btn-on">
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
            <h6>standardカジュアルや新作コレクション<br>
                おすすめラインナップの特徴やスペックをご紹介。</h6>
        </div>
    </section>
    <!-- トレンド欄 -->
    <div class="season">
        <img class="img-ktg" src="<?php echo get_template_directory_uri(); ?>/images/IMG_6234.JPG" alt="SUMMER">
        <div class="text-season"><a class="link-season" href="#">FASHION
                ITEM</a></div>
    </div>
    <!-- アイテム欄 -->
    <div class="item-box">
        <div class="item-img-cap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/0af5a4db3d830885a86f5d7e9b674954.jpg" alt="cap">
            <a href="#">CAP一覧</a>
        </div>
        <!-- <a class="link-cap" href="https://livefor0517.base.shop/categories/2765494">CAP<span>キャップで探す</span></a> -->
        <div class="item-img-bag">
            <img src="<?php echo get_template_directory_uri(); ?>/images/c9dfa48318e599390f8b99a3f98a197d.jpg" alt="bag">
            <!-- <a class="link-bag" href="https://livefor0517.base.shop/categories/2765491">BAG<span>バッグで探す</span></a> -->
            <a href="#">BAG一覧</a>
        </div>
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
    <?php
    $outfit_posts = get_posts(array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'outfit', // カテゴリをスラッグで指定する場合
        'posts_per_page' => 3, // 表示件数
        'orderby' => 'date', // 表示順の基準
        'order' => 'DESC' // 昇順・降順
    ));
    global $post;
    if ($outfit_posts) : foreach ($outfit_posts as $post) : setup_postdata($post); ?>
            <section id="content">
                <div id="content-wrap" class="container">
                    <div id="main" class="col-md-9" style="width: 100%;">
                        <!-- ループはじめ -->
                        <ul class="articles news">
                            <a href="<?php the_permalink() ?>">
                                <li class="article-outfit">
                                    <?php the_post_thumbnail(array(314, 250)); ?>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="outfit-day"><?php the_time('Y/m/d') ?></div>
                                </li>
                            </a>
                        </ul>
                        <!-- ループおわり -->
                    </div>
                </div>
            </section>
    <?php endforeach;
    endif;
    wp_reset_postdata(); ?>
    <a href="<?php the_permalink() ?>" role="button" class="btn btn-outline-secondary mx-auto d-block" style="width: fit-content;margin-top: 60px;">もっと見る</a>

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