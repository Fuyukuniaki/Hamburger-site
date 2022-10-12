<footer class="l-footer p-footer c-background--Footer c-grid__FrontPage-footer c-size__Footer">
    <ul class="p-footer__Link c-margin__Footer--link c-padding__AllZero">
        <?php wp_nav_menu(array('menu' => 'footer_navi')); ?>
<!--    <li class="p-footer__Link--text c-text-size__Footer--link c-text-color__Footer--link"><a href="/" class="c-text-color__Footer--link c-text-decoration__None">ショップ情報</a></li>
        <li class="p-footer__Link--text c-text-size__Footer--link c-text-color__Footer--link"><a href="/" class="c-text-color__Footer--link c-text-decoration__None">ヒストリー</a></li> -->
    </ul>
    <small class="c-text-size__Footer--copyright c-text-color__Footer--copyright  c-margin__Footer--copyright">Copyright: <?php bloginfo( 'name' ); ?></small>
</footer>