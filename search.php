    <?php get_header(); ?>

    <main class="l-main l-main__archive c-grid__FrontPage-main c-background__FrontPage-main">
            <section class="p-section__MainArchive--title c-background__MainArchive--title">
                <h2 class="c-text-color__MainTitle c-text-size__MainArchive--mainTitle c-margin__MainArchive--mainTitle">Search:</h2>
                <p class="c-text-color__MainTitle c-text-size__MainArchive--mainTitle--text c-text-line-height__MainArchive--mainTitle--text c-text-indent__MainArchive--mainTitle--text c-text-weight"><?php printf( get_search_query() ); ?></p>
            </section>
            <section class="p-section__ArchiveText">
                <article class="p-articles__ArchiveText c-margin__ArchiveText c-text-color__ArchiveText">
                    <!-- <h2 class="c-text-weight--bold c-text-size__ArchiveText--title c-margin__ArchiveText--title">検索結果</h2>
                    <p class="c-text-size__ArchiveText--text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p> -->
                </article>
                <ul class="p-section__Archive-list">
                    <li class="p-section__Archive-list--list">
                    <?php
                        if( have_posts() ) :
                            while( have_posts() ) :
                                the_post(); ?>
                        <article  id="post-<?php the_ID(); ?>" <?php post_class("p-articles__MainList c-background__MainList c-padding__MainList c-margin__MainList"); ?>>
                            <dl class="c-mainlist">
                                <dd class="c-mainlist__Image">
                                    <figure class="c-mainlist__Image--wrap">
                                        <img class="c-mainlist__Image--image" src="/wp-content/themes/HamburgerSite/images/menu-cheese.jpg" alt="">
                                    </figure>
                                </dd>
                                <dd class="c-mainlist__Text">
                                    <h2 class="c-mainlist__Text--title"><?php the_title(); ?></h2>
                                    <!--<h3 class="c-mainlist__Text--subTitle">小見出しが入ります</h3>-->
                                    <div class="c-mainlist__Text--text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <button onclick="location.href='<?php the_permalink(); ?>'" class="c-mainlist__Text--button">詳しく見る</button>
                                </dd>
                            </dl>
                        </article>
                        <?php endwhile;
                        else :
                            ?>
                        <article class="p-articles__ArchiveText c-margin__ArchiveText c-text-color__ArchiveText">
                            <h2 class="c-text-weight--bold c-text-size__ArchiveText--title c-margin__ArchiveText--title">表示する記事がありません</h2>
                            <p class="c-text-size__ArchiveText--text">
                                検索ワードを修正してご確認ください。
                            </p>
                        <?php
                            endif;
                        ?>

                <ul class="p-section__Archive-list--pagination c-text-size__Pagination c-text-color__Pagination">
                <?php
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) ); ?>
                </ul>
            </section>
        </main>

        <?php get_template_part( 'footer', 'page' ); ?>
        <?php get_sidebar(); ?>

    <?php get_footer(); ?>