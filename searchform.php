<?php
/*
Template Name: Search Page
*/
?>
        <form class="p-search c-margin__search search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
            <label for="search">
                <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                <input class="p-search__Window z-index--0000 search-field" type="search" placeholder="<?php echo esc_attr_x( 'チーズバーガー', 'placeholder' ) ?>" name="s" id="s"  value="<?php echo get_search_query() ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                <i class="p-search__Window--lupe z-index--9999 c-color c-font-family__FontAwesome fa-solid fa-magnifying-glass"></i>
            </label>
            <label for="submit">
                <button class="p-search__Button search-submit" type="submit" id="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
                    <span class="p-search__Button--text c-text-size__Search--button c-text-color__Search">検索</span>
                </button>
            </label>
        </form>
