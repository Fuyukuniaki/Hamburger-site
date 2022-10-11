        <form class="p-search c-margin__search" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
            <label for="search">
                <input class="p-search__Window z-index--0000" type="text" placeholder="チーズバーガー" name="s" id="s">
                <i class="p-search__Window--lupe z-index--9999 c-color c-font-family__FontAwesome fa-solid fa-magnifying-glass"></i>
            </label>
            <label for="submit">
                <button class="p-search__Button" type="submit" id="submit">
                    <span class="p-search__Button--text c-text-size__Search--button c-text-color__Search">検索</span>
                </button>
            </label>
        </form>