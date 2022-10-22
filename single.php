    <?php get_header(); ?>
        <main class="l-main l-main__Single c-grid__FrontPage-main c-background__Single--main">
            <section class="p-section__MainSingle--title c-background__MainSingle--title">
                <h1 class="c-text-color__MainTitle c-text-size__MainSingle--mainTitle c-margin__MainSingle--mainTitle c-customize__Text--h1"><?php the_title(); ?></h1>
            </section>
            <section class="wp-section__SingleText">
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                        the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_content(); ?>
                            <?php $args = array (
                                'before' => '<div class="page-split">',
                                'after' => '</div>',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                                );
                                wp_link_pages( $args );
                            ?>
                        </div>

                    <?php endwhile;
                else :
                ?><article class="p-articles__ArchiveText c-margin__ArchiveText c-text-color__ArchiveText">
                <h2 class="c-text-weight--bold c-text-size__ArchiveText--title c-margin__ArchiveText--title">表示する記事がありません</h2>
                </article><?php
                endif; ?>

            </section>
        </main>

        <?php get_template_part( 'footer', 'page' ); ?>
        <?php get_sidebar(); ?>

    <?php get_footer(); ?>