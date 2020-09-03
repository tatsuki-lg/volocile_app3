    <?php get_header(); ?>
    <!-- 投稿一覧 -->
    <section id="content">
        <div id="content-wrap" class="container">
            <div id="main" class="col-md-9">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
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

    <?php get_footer(); ?>