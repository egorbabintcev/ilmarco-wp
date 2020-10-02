// add custom function
$.fn.setCursorPosition = function (pos) {
    this.each(function (index, elem) {
        if (elem.setSelectionRange) {
            elem.setSelectionRange(pos, pos);
        } else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    });
    return this;
};

// setup sliders
jQuery(document).ready(function ($) {
    $('.stocks__slider').slick({
        arrows: true,
        centerMode: true,
        dots: true,
        dotsClass: 'slider-dots',
        draggable: true,
        slidesToShow: 1,
        prevArrow: '<button class="slider-btn prev"><svg><use xlink:href="/wp-content/themes/ilMarco/assets/img/icons-sprite.svg#arrow-left"></use></svg></button>',
        nextArrow: '<button class="slider-btn next"><svg><use xlink:href="/wp-content/themes/ilMarco/assets/img/icons-sprite.svg#arrow-right"></use></svg></button>',
        responsive: [
            {
                breakpoint: 2560,
                settings: {
                    centerPadding: '20%',
                },
            },
            {
                breakpoint: 1281,
                settings: {
                    centerPadding: '5%',
                    draggable: true,
                },
            },
            {
                breakpoint: 481,
                settings: {
                    arrows: false,
                    centerPadding: '3%',
                },
            },
        ]
    });
    $('.reviews__slider').slick({
        dots: true,
        dotsClass: 'slider-dots',
        draggable: true,
        prevArrow: '<button class="slider-btn prev"><svg><use xlink:href="/wp-content/themes/ilmarko/assets/img/icons-sprite.svg#arrow-left"></use></svg></button>',
        nextArrow: '<button class="slider-btn next"><svg><use xlink:href="/wp-content/themes/ilmarko/assets/img/icons-sprite.svg#arrow-right"></use></svg></button>',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 481,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '4%',
                    slidesToShow: 1,
                }
            },
        ],
    });

    $('.cart-crossell__slide-wrapper').slick({
        infinite: false,
        slidesToShow: 3,
        // slidesToScroll: 1,
        prevArrow: $('.cart .slider-btn.prev'),
        nextArrow: $('.cart .slider-btn.next'),
        variableWidth: true,
    })
});

// setup product card counter
$('.food-card__counter-btn').on('click', function () {
    const price = $(this).closest('.food-card').find('span.price');
    const counter = $(this).closest('.food-card__counter').find('span.food-card__counter-num');

    if ($(this).hasClass('dec') && +counter.text() > 1) {
        counter.text(+counter.text() - 1);
        price.text(price.text() - price.data('start'));
    } else if ($(this).hasClass('inc')) {
        counter.text(+counter.text() + 1);
        price.text(+price.text() + price.data('start'))
    }

    $(this).closest('.food-card').find('.food-card__btn').attr('data-quantity', counter.text())
})

// setup anchor links
$('a[href*="#"]').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: $($.attr(this, 'href')).offset().top}, 500);
})

// setup category switch
$('.catalog input[type="radio"]').on('click', function () {
    const category = this.dataset.category;
    const pages = $('.catalog .food-page');

    if (window.matchMedia('screen and (min-width: 481px)').matches) {
        pages
            .removeClass('is-active')
            .filter(`.food-page[data-category="${category}"]`)
            .addClass('is-active');
        $('html, body').animate({scrollTop: $('.catalog').offset().top}, 500);
    } else if (window.matchMedia('screen and (max-width: 480px)').matches) {
        const target = pages.filter(`.food-page[data-category="${category}"]`);
        $('html, body').animate({scrollTop: target.offset().top - $(this).closest('.catalog-radio').outerHeight()}, 500);
    }
})

// setup maps switch
$('.contacts input[type="radio"]').on('change', function () {
    const {map, address} = this.dataset;
    $(this)
        .closest('.contacts')
        .find('.address')
        .text(address);
    $(this)
        .closest('.contacts')
        .find('iframe')
        .prop('src', map);
})

// setup scroll to category

if ($('.catalog-radio').length !== 0) {
    const catalogRadioPos = $('.catalog-radio').offset().top;
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > catalogRadioPos) {
            $('.catalog-radio').addClass('fixed');
            $('.catalog-pages').css('margin-top', $('.catalog-radio').outerHeight(true));
        } else {
            $('.catalog-radio').removeClass('fixed');
            $('.catalog-pages').css('margin-top', 0);
        }
    })
}

// setup modal functionality
$('.modal-close').on('click', function () {
    $(this).closest('.modal').fadeOut();
    $('body').removeClass('is-lock');
})

$('.food-card__btn').on('click', function (e) {
    e.preventDefault();
    const order = $(this).closest('.food-card').find('.food-card__title').text();
    $('.modal input[name="order"]').prop('value', order);
    $('.modal.modal-callback').fadeIn();
    // $('body').addClass('is-lock');
})

// setup tel input
// $('input[type="tel"]').mask('+7 ?(999) 999-99-99', { autoclear: false })
// $('input[type="tel"]').on('click', function (evt) {
//   const { selectionStart, value } = this;
//   const lastChar = value.match(/_/);
//
//   if (lastChar && selectionStart > lastChar.index) {
//     $(this).setCursorPosition(lastChar.index);
//   }
// })

$('.cart-switch input[type="radio"]').on('change', function () {
    const shippingTypes = $('.cart-delievery-type');

    shippingTypes
        .removeClass('is-active')
        .filter('#' + this.value)
        .addClass('is-active')
})

$('.cart__btn-next').on('click', function () {
    const cartSteps = $('.cart-step');
    const cartHeaderSteps = $('.header-step');

    cartHeaderSteps
        .filter('.is-active')
        .removeClass('is-active')
        .addClass('is-completed')
        .next()
        .addClass('is-active')

    cartSteps
        .filter('.is-active')
        .removeClass('is-active')
        .next()
        .addClass('is-active')

    $('html, body').animate({scrollTop: 0}, 500);
})

// $('#checkout-form').on('submit', function (e) {
//   e.preventDefault();
//   const data = $(this).serialize();
//   $.ajax({
//     type: 'POST',
//     url: '/wp-content/themes/ilmarco/submit.php',
//     data,
//   });
//   location.assign('/');
// })

$('.food-card__counter-btn').on('click', function () {

});

// (function (){
//   let delievery_type;
//
//   // console.log(delievery_type);
//
//   $('input[name="delievery_type"]').on('input', function (){
//     $.each($("input[name='delievery_type']:checked"), function(){
//       if($(this).val() === 'delievery') {
//         console.log('delievery');
//       } else if($(this).val() === 'pickup') {
//         $.each($("input[name='delievery_type']:checked"), function(){
//
//
//       }
//     });
//   });
//
// })();


(function (){
    $('#zurab').on('click', function (){
        $('table.shop_table.woocommerce-checkout-review-order-table > tbody  > tr').each(function(index, tr) {
            // console.log(index);
            console.log(tr);

            $('#cart-info').val(tr.html + '<br>');
        });
    });
})();

$("#wpcf7-f131-p80-o1 .wpcf7-submit").on('click', function(e) {
    e.preventDefault();
    var $form = $(this.form);

    var $cart = $('#side_cart');

    var quantity = '<div>Товаров в корзине: ' + $cart.data('count') + ' шт.</div>';
    var price = '<div>На сумму: ' + $cart.data('total') + ' руб.</div>';

    var info = $cart.find('.js-side-cart-item').map(function(i, el) {
        var $item = $(el);
        return "<div>" + $item.data('name') + ", цена " + $item.data('price') + " руб, кол-во " + $item.data('quantity') + " шт.</div>";
    }).get().join('');

    $form.find('[name="your-cart"]').val('<div>Корзина</div>' + quantity + price + info + '</div>');

    $form.trigger('submit');
});
