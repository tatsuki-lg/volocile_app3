<?php
$cat_posts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    // 'category' => 1, // カテゴリIDを番号で指定する場合
    'category_name' => 'news', // カテゴリをスラッグで指定する場合
    // 'posts_per_page' => 6, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
global $post;
if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post); ?>

        <!-- ループはじめ -->
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <p><?php the_category(', ') ?></p>
        <p><?php the_time('Y/m/d') ?></p>
        <p><?php the_excerpt(); ?></p>
        <!-- ループおわり -->

<?php endforeach;
endif;
wp_reset_postdata(); ?>