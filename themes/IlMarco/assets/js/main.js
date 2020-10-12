// setup sliders
jQuery(document).ready(function($) {
    $('.stocks__slider').slick({
        arrows: true,
        centerMode: true,
        dots: true,
        dotsClass: 'slider-dots',
        draggable: true,
        slidesToShow: 1,
        prevArrow: '<button class="slider-btn prev"><svg><use xlink:href="/wp-content/themes/IlMarco/assets/img/icons-sprite.svg#arrow-left"></use></svg></button>',
        nextArrow: '<button class="slider-btn next"><svg><use xlink:href="/wp-content/themes/IlMarco/assets/img/icons-sprite.svg#arrow-right"></use></svg></button>',
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
        prevArrow: '<button class="slider-btn prev"><svg><use xlink:href="/wp-content/themes/IlMarco/assets/img/icons-sprite.svg#arrow-left"></use></svg></button>',
        nextArrow: '<button class="slider-btn next"><svg><use xlink:href="/wp-content/themes/IlMarco/assets/img/icons-sprite.svg#arrow-right"></use></svg></button>',
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
    const href = $(this).attr('href');
    if (href === '#') return;
    $('html, body').animate({ scrollTop: $($.attr(this, 'href')).offset().top }, 500);
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
      const clearPhone = (phone) => {
        return phone.toString().replace(/[^+\d]+/g, '');
      }

      const {map, address, tel, time} = this.dataset;
      $(this)
          .closest('.contacts')
          .find('.address')
          .text(address);
      $(this)
          .closest('.contacts')
          .find('iframe')
          .prop('src', map)
      $(this)
          .closest('.contacts')
          .find('.tel')
          .text(tel)
          .prop('href', `tel:${clearPhone(tel)}`)
      $(this)
          .closest('.contacts')
          .find('.whatsapp')
          .prop('href', `https://wa.me/${clearPhone(tel).replace(/\+/g, '')}`)
      $(this)
          .closest('.contacts')
          .find('.worktime')
          .text(time)
  })

  // setup scroll to category

  if ($('.catalog-radio').length !== 0) {
    const catalogRadioPos = $('.catalog').offset().top;
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > catalogRadioPos) {
        $('.catalog-menu').addClass('is-fixed');
        $('.catalog-pages').css('margin-top', $('.catalog-radio').outerHeight(true));
      } else {
        $('.catalog-menu').removeClass('is-fixed');
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
    if (!$('.catalog-menu').hasClass('is-fixed')) {
      $('html, body').animate({scrollTop: $('.catalog').offset().top + 10}, 150);
    }
  })

  $('.header-about__switch').on('click', function(e) {
    const links = $(this)
      .closest('.header-about__switch')
      .find('a')
      .toggleClass('is-active')
  })

  if (window.matchMedia('(max-width: 481px)').matches) {
    $('[data-wrap="mobile-nav"]').wrapAll($('<div class="mobile-nav" />'));
  } else {
    $('.mobile-nav').contents().unwrap();
  }

  $('.header-toggler').on('click', function() {
    $('.mobile-nav, .header-toggler, .header-toggler svg')
      .toggleClass('is-active')
    $('body')
      .toggleClass('is-lock')
  })

  $('.mobile-nav a[href*="#"]').on('click', function(e) {
    $('.mobile-nav, .header-toggler, .header-toggler svg')
      .removeClass('is-active')
    $('body')
      .removeClass('is-lock')
  })

  /*
  $('.footer-contact__btn').on('click', function(e) {
    e.preventDefault();
    $('.modal-callback')
      .fadeIn()
    $('body')
      .addClass('is-lock')
  })
  */

  $('.footer-further__policy').on('click', function(e) {
    e.preventDefault();
    $('.modal-privacy')
      .fadeIn()
    $('body')
      .addClass('is-lock')
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


  /* Этих блоков пока нет
  $('.cart-switch input[type="radio"]').on('change', function () {
      const shippingTypes = $('.cart-delievery-type');

      shippingTypes
          .removeClass('is-active')
          .filter('#' + this.value)
          .addClass('is-active')
  })
  */

  /* Шаги меняются из-за разных страниц
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

  */

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

  // $('.food-card__counter-btn').on('click', function () {
  //
  // });

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


  // (function () {
  //     $('#zurab').on('click', function () {
  //         $('table.shop_table.woocommerce-checkout-review-order-table').each(function (index, table) {
  //             // console.log(index);
  //             console.log(table);
  //
  //             document.getElementById("total").value = table;
  //         });
  //     });
  // })();
  //
  // (function () {
  //     setTimeout(function () {
  //         document.getElementById("total").value = $('.woocommerce-Price-amount.amount').val();//выцепили title страницы
  //         // document.getElementById("price").innerText = document.querySelector("div.summary.entry-summary > p > ins > span").innerText;
  //
  //
  //         console.log($('.woocommerce-Price-amount.amount').val());
  //     }, 3000);
  // })();

  // $(document).ready(function () {
  //     $('.billing_delivery').on('change', function () {
  //         $(document).ready().trigger("update_checkout");
  //     })
  // });
  //
  //
  // document.addEventListener('wpcf7mailsent', function (event) {
  //     location = 'http://example.com/';
  // }, false);

  $('.header-cart__toggler').on('click', function (e) {
    if (window.matchMedia('(min-width: 481px)').matches) {
      e.preventDefault();
      $('.modal-minicart').toggleClass('open');
    }
  });

  $('.mfp-close').on('click', function () {
      $('.modal-minicart').toggleClass('open');
  });

  (() => {
      const billing_first_name_field = $('#billing_first_name_field'),
          billing_last_name_field = $('#billing_last_name_field'),
          billing_address_1_field = $('#billing_address_1_field'),
          billing_address_2_field = $('#billing_address_2_field'),
          billing_phone_field = $('#billing_phone_field'),
          billing_email_field = $('#billing_email_field');

      $(window).on('load', function (){
          billing_first_name_field.hide();
          billing_last_name_field.hide();
          billing_address_1_field.hide();
          billing_address_2_field.hide();
          billing_email_field.hide();
          billing_phone_field.show();
      });

      $('#shipping_method_0_local_pickup1').prop("checked", true);


      if ($('#shipping_method_0_local_pickup1').attr('checked') === 'checked') {
          billing_first_name_field.hide();
          billing_last_name_field.hide();
          billing_address_1_field.hide();
          billing_address_2_field.hide();
          billing_email_field.hide();
          billing_phone_field.show();

      } else if ($('#shipping_method_0_local_pickup3').attr('checked') === 'checked') {
          billing_first_name_field.hide();
          billing_last_name_field.hide();
          billing_address_1_field.hide();
          billing_address_2_field.hide();
          billing_email_field.hide();
          billing_phone_field.show();
      } else {
          billing_first_name_field.show();
          billing_last_name_field.show();
          billing_address_1_field.show();
          billing_address_2_field.show();
          billing_email_field.show();
      }


      $(document).on('click', function (e) {
          if (e.target.id === 'shipping_method_0_local_pickup1') {
              billing_first_name_field.hide();
              billing_last_name_field.hide();
              billing_address_1_field.hide();
              billing_address_2_field.hide();
              billing_email_field.hide();
              billing_phone_field.show();

          } else if (e.target.id === 'shipping_method_0_local_pickup3') {
              billing_first_name_field.hide();
              billing_last_name_field.hide();
              billing_address_1_field.hide();
              billing_address_2_field.hide();
              billing_email_field.hide();
              billing_phone_field.show();

          } else if (e.target.id === 'shipping_method_0_flat_rate6') {
              billing_first_name_field.show();
              billing_last_name_field.show();
              billing_address_1_field.show();
              billing_address_2_field.show();
              billing_email_field.show();
          }
      });
  })();
});
