    <?php get_header(); ?>

        <main class="l-main l-main__Page c-grid__FrontPage-main c-background__Page--main">
            <section class="p-section__MainPage--title c-background__MainPage--title">
                <h1 class="c-text-color__MainTitle c-text-size__MainPage--mainTitle c-margin__MainPage--mainTitle c-customize__Text--h1"><?php the_title(); ?></h1>
            </section>
            <?php
                    if( have_posts() ) :
                        while( have_posts() ) :
                            the_post(); ?>
                            <section id="post-<?php the_ID(); ?>" <?php post_class('p-section__SingleText'); ?>>
                                <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_post_thumbnail(); ?>
                        </section>
                        <?php endwhile;
                    else :
                        ?><p>表示する記事がありません</p><?php
                    endif;
                ?>
        </main>

        <?php get_template_part( 'footer', 'page' ); ?>
        <?php get_sidebar(); ?>

    <?php get_footer(); ?>