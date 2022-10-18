
//-------------------------------------------------------------------------
function navActive(){
    $(function () {
        $("nav").toggleClass('active');
        $(".js-shade").toggleClass('inactive');
    });
};

function menu_slide(){
    if( $('.js-button__clickable').length > 0 ||
       $('.js-button__clickable').hasClass('clicked') ){
            $('.js-button__clickable').remove();
            $('.js-shade').removeClass('inactive').remove();
            $('.js-body').removeClass('inactive');
            $('nav').removeClass('active');
            $('.js-button__clickable').removeClass('clicked');
    }
    if(window.matchMedia("(max-width: 834px)").matches){
        $('.js-body').prepend('<span class="p-button__clickable js-button__clickable">Menu</span>');
        $('.js-body').prepend('<div class="js-shade p-body__Shade"></div>');

        $('.js-button__clickable').each(function(){
            $(this).on('click', function(){
                $.when($('body').toggleClass('inactive'))
                 .done(navActive());
                $(this).toggleClass('clicked');
            });
        });
    }
};

function paginations(){
    $('.page-numbers').each(function(){
        if($(this).hasClass('prev') || $(this).hasClass('next')) {
            $('.prev').addClass('c-size__Pagination--prev c-text-size__Pagination--prev c-text-color__Pagination--prev').wrap('<li class="c-mainlist__Pagination--prev c-size__Pagination--prev c-background__Pagination--prev c-margin__Pagination--prev"></li>');
            $('.next').addClass('c-size__Pagination--next c-text-size__Pagination--next c-text-color__Pagination--next c-text-text-align--right').wrap('<li class="c-mainlist__Pagination--next c-size__Pagination--next c-background__Pagination--next c-margin__Pagination--next"></li>');
        } else {
            $(this).addClass('c-size__Pagination--number').wrap('<li class="c-mainlist__Pagination--number c-size__Pagination--number c-text-text-align--center c-margin__Pagination--number c-background__Pagination--number c-text-color__Pagination--number"></li>');
            $('.current').parent().addClass('active');
        }
    });
};

$(window).on('load resize', function(){
    paginations();
    menu_slide();
//-------------------------------------------------------------------------
});