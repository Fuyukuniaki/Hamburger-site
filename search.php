    <?php get_header(); ?>

    <main class="l-main l-main__archive c-grid__FrontPage-main c-background__FrontPage-main">
            <section class="p-section__MainArchive--title c-background__MainArchive--title">
                <h2 class="c-text-color__MainTitle c-text-size__MainArchive--mainTitle c-margin__MainArchive--mainTitle">Search:</h2>
                <p class="c-text-color__MainTitle c-text-size__MainArchive--mainTitle--text c-text-line-height__MainArchive--mainTitle--text c-text-indent__MainArchive--mainTitle--text c-text-weight">チーズバーガー</p>
            </section>
            <section class="p-section__ArchiveText">
                <article class="p-articles__ArchiveText c-margin__ArchiveText c-text-color__ArchiveText">
                    <h2 class="c-text-weight--bold c-text-size__ArchiveText--title c-margin__ArchiveText--title">小見出しが入ります</h2>
                    <p class="c-text-size__ArchiveText--text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
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
                                        <img class="c-mainlist__Image--image" src="/wp-content/uploads/menu-cheese.jpg" alt="">
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
                            ?><p>表示する記事がありません</p><?php
                        endif;
                    ?>
                    <!--                    
                    <li class="p-section__Archive-list--list">
                        <article class="p-articles__MainList c-background__MainList c-padding__MainList c-margin__MainList">
                            <dl class="c-mainlist">
                                <dd class="c-mainlist__Image">
                                    <figure class="c-mainlist__Image--wrap">
                                        <img class="c-mainlist__Image--image" src="/wp-content/uploads/menu-cheese.jpg" alt="">
                                    </figure>
                                </dd>
                                <dd class="c-mainlist__Text">
                                    <h2 class="c-mainlist__Text--title">チーズバーガー</h2>
                                    <h3 class="c-mainlist__Text--subTitle">小見出しが入ります</h3>
                                    <p class="c-mainlist__Text--text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                    <button class="c-mainlist__Text--button">詳しく見る</button>
                                </dd>
                            </dl>
                        </article>
                        <article class="p-articles__MainList c-background__mainlist c-padding__mainlist c-margin__mainlist">
                            <dl class="c-mainlist">
                                <dd class="c-mainlist__Image">
                                    <figure class="c-mainlist__Image--wrap">
                                        <img class="c-mainlist__Image--image" src="/wp-content/uploads/menu-cheese.jpg" alt="">
                                    </figure>
                                </dd>
                                <dd class="c-mainlist__Text">
                                    <h2 class="c-mainlist__Text--title">ダブルチーズバーガー</h2>
                                    <h3 class="c-mainlist__Text--subTitle">小見出しが入ります</h3>
                                    <p class="c-mainlist__Text--text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                    <button class="c-mainlist__Text--button">詳しく見る</button>
                                </dd>
                            </dl>
                        </article>
                        <article class="p-articles__MainList c-background__mainlist c-padding__mainlist c-margin__mainlist">
                            <dl class="c-mainlist">
                                <dd class="c-mainlist__Image">
                                    <figure class="c-mainlist__Image--wrap">
                                        <img class="c-mainlist__Image--image" src="/wp-content/uploads/menu-cheese.jpg" alt="">
                                    </figure>
                                </dd>
                                <dd class="c-mainlist__Text">
                                    <h2 class="c-mainlist__Text--title">スペシャルチーズバーガー</h2>
                                    <h3 class="c-mainlist__Text--subTitle">小見出しが入ります</h3>
                                    <p class="c-mainlist__Text--text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                    <button class="c-mainlist__Text--button">詳しく見る</button>
                                </dd>
                            </dl>
                        </article>
                        <article class="p-articles__MainList c-background__mainlist c-padding__mainlist c-margin__mainlist">
                            <dl class="c-mainlist">
                                <dd class="c-mainlist__Image">
                                    <figure class="c-mainlist__Image--wrap">
                                        <img class="c-mainlist__Image--image" src="/wp-content/uploads/menu-cheese.jpg" alt="">
                                    </figure>
                                </dd>
                                <dd class="c-mainlist__Text">
                                    <h2 class="c-mainlist__Text--title">スペシャルチーズバーガー</h2>
                                    <h3 class="c-mainlist__Text--subTitle">小見出しが入ります</h3>
                                    <p class="c-mainlist__Text--text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                    <button class="c-mainlist__Text--button">詳しく見る</button>
                                </dd>
                            </dl>
                        </article>
                        <article class="p-articles__MainList c-background__mainlist c-padding__mainlist c-margin__mainlist">
                            <dl class="c-mainlist">
                                <dd class="c-mainlist__Image">
                                    <figure class="c-mainlist__Image--wrap">
                                        <img class="c-mainlist__Image--image" src="/wp-content/uploads/menu-cheese.jpg" alt="">
                                    </figure>
                                </dd>
                                <dd class="c-mainlist__Text">
                                    <h2 class="c-mainlist__Text--title">スペシャルチーズバーガー</h2>
                                    <h3 class="c-mainlist__Text--subTitle">小見出しが入ります</h3>
                                    <p class="c-mainlist__Text--text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    </p>
                                    <button class="c-mainlist__Text--button">詳しく見る</button>
                                </dd>
                            </dl>
                        </article>
                    </li>
                </ul>
                <ul class="p-section__Archive-list--pagination c-text-size__Pagination c-text-color__Pagination">
                    <li class="c-mainlist__Pagination--fraction c-margin__Pagination--fraction"><span class="c-text-size__Pagination--fraction--title">page</span> 1/10</li>
                    <li class="c-mainlist__Pagination--prev c-size__Pagination--prev c-background__Pagination--prev  c-margin__Pagination--prev"><a class="c-size__Pagination--prev c-text-size__Pagination--prev c-text-color__Pagination--prev" href="#">前へ</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number active"><a class="c-size__Pagination--number" href="#">1</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">2</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">3</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">4</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">5</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">6</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">7</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">8</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">9</a></li>
                    <li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"><a class="c-size__Pagination--number" href="#">10</a></li>
                    <li class="c-mainlist__Pagination--next c-size__Pagination--next c-background__Pagination--next c-margin__Pagination--next"><a class="c-size__Pagination--next c-text-size__Pagination--next c-text-color__Pagination--next c-text-text-align--right" href="#">次へ</a></li>
                </ul>-->
                <div class="p-section__Archive-list--pagination c-text-size__Pagination c-text-color__Pagination">
                <?php
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) ); ?>
                </div>
            </section>
        </main>

        <?php get_template_part( 'footer', 'page' ); ?>
        <?php get_sidebar(); ?>

    <?php get_footer(); ?>