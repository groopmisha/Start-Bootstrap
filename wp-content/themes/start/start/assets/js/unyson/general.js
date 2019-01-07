jQuery(document).ready(function ($) {
    var $ = jQuery;
    var screenRes = $(window).width(),
        screenHeight = $(window).height(),
        html = $('html'),
        iScrollPos = 0;


    /*$("img.attachment-post-thumbnail").load(function() {
        var src = $(this).data('srcset');
    });*/

    $(document).on('lazybeforesizes', function (e) {
        //use width of parent node instead of the image width itself
        var parent_width = $(e.target).parents('.fw-block-image-parent').innerWidth() || e.detail.width;
        var srcset = $(e.target).data('srcset').split(', ');
        var shown_width = '';

        //get all available widths
        var widths = [];
        var img_width = 0;
        for (var width in srcset) {
            if (srcset[width].indexOf(' ') !== -1) {
                var img_src = srcset[width].substr(srcset[width].indexOf(' ') + 1);
                widths.push(+img_src.substring(0, img_src.length - 1));
            }
        }

        //get image width if exist
        if (widths.length !== 0) {
            //check if in array exists value bigger than parent width
            var is_width_bigger = false;
            for (var is_width in widths) {
                if (widths[is_width] > parent_width) {
                    is_width_bigger = true;
                }
            }

            if (!is_width_bigger) {
                if (widths.length >= 2) shown_width = Math.max.apply(Math, widths);
                else shown_width = widths.join();
            }
        }

        //set parent width the image selected width
        if (shown_width.length !== 0)
            $(e.target).parents('.fw-block-image-parent').width(shown_width);
    });


    // IE<7 Warning
    if (html.hasClass("ie8")) {
        $("body").empty().html('Please, Update your Browser to at least IE9').css({
            'text-align': 'center',
            'font-size': '40px',
            'color': 'red',
            'margin-top': '20px'
        });
    }
    // Disable Empty Links
    $("[href='#']").click(function (event) {
        event.preventDefault();
    });

    // Remove outline in IE
    $("a, input, textarea").attr("hideFocus", "true").css("outline", "none");

    // If device is touch addClass fw-touchDevice
    if (Modernizr.touch) {
        $('body').addClass('fw-touchDevice');
    }


    if ($('select[class*="select-"]').length > 0) {
        $('select[class*="select-"]').selectize({
            //create: true,
            //sortField: 'text'
        });
    }
    $('select[name="archive-dropdown"], select[name="cat"], .woocommerce-ordering .orderby').selectize({
        create: true,
        allowEmptyOption: true
    });

    if ($(".input-styled, #ship-to-different-address, .inputs").length) {
        $(".input-styled input, #ship-to-different-address input, .inputs input[type='radio'], .inputs input[type='checkbox']").customInput();
    }

    // prettyPhoto lightbox, check if <a> has atrr data-rel and hide for Mobiles
    if ($('a').is('[data-rel]') && screenRes > 600) {
        $('a[data-rel]').each(function () {
            $(this).attr('rel', $(this).data('rel'));
        });
        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools: false,
            deeplinking: false,
            theme: 'dark_square',
            horizontal_padding: 60,
            show_title: false,
            overlay_gallery: false,
            changepicturecallback: function () {
                var $holder = jQuery('.pp_nav .currentTextHolder'),
                    $closeButton = jQuery('.pp_close'),
                    splitted = $holder.text().split('/');
                $closeButton.addClass('fa fa-times');

                $holder.html(splitted.join('<span class="pp_text_devider">/</span>'));
                $closeButton.remove();
                $('.pp_pic_holder').prepend($closeButton);

                $closeButton.click(function () {
                    $('.pp_overlay, .pp_pic_holder').fadeOut(300, function () {
                        $(this).remove();
                    });
                    return false
                })
            }
        });
    }
    // masonry grid view
    if ($(".postlist").hasClass("postlist-grid")) {

        var $gridcontainer = $('.postlist-grid').masonry();
        $gridcontainer.masonry({
            itemSelector: '.postlist-col'
        });
    }
    ;
    if ($(".fw-portfolio").length > 0) {
        var $gridcontainer = $('.fw-portfolio-list').masonry();
        $gridcontainer.masonry({
            itemSelector: 'li'
        });
    }

    //Iframe Serponsive
    function adjustIframes() {
        $('iframe').each(function () {
            var
                $this = $(this),
                proportion = $this.data('proportion'),
                w = $this.attr('width'),
                actual_w = $this.width();

            if (!proportion) {
                proportion = $this.attr('height') / w;
                $this.data('proportion', proportion);
            }

            if (actual_w != w) {
                $this.css('height', Math.round(actual_w * proportion) + 'px');
            }
        });
    }

    $(window).on('resize load', adjustIframes);

    // Detect Click in Iframe
    function detectIframeClick() {
        var overiFrame = -1;
        jQuery('.myCarousel').find('iframe').hover(function () {
            overiFrame = 1;
        }, function () {
            overiFrame = -1
        });
        $(window).on('blur', function () {
            if (overiFrame != -1) {
                jQuery('.myCarousel').carousel('pause');
            }
        });
        jQuery('.carousel-control, .carousel-indicators li').click(function () {
            jQuery('.myCarousel').carousel('cycle');
        });
    }

    detectIframeClick();


    // Smooth Scroling of ID anchors
    function filterPath(string) {
        return string
            .replace(/^\//, '')
            .replace(/(index|default).[a-zA-Z]{3,4}$/, '')
            .replace(/\/$/, '');
    }

    var locationPath = filterPath(location.pathname);
    var scrollElem = scrollableElement('html', 'body');

    function anchorFn(argument) {
        $('.anchor a[href*="#"], a[href*="#"].anchor').each(function () {
            $(this).click(function (event) {
                var thisPath = filterPath(this.pathname) || locationPath;
                if (locationPath == thisPath
                    && (location.hostname == this.hostname || !this.hostname)
                    && this.hash.replace(/#/, '')) {
                    var $target = $(this.hash), target = this.hash;
                    if (target && $target.length != 0) {
                        var targetOffset = $target.offset().top;
                        event.preventDefault();
                        $(scrollElem).animate({scrollTop: targetOffset}, 400, function () {
                            location.hash = target;
                        });
                    }
                }
            });
        });
    }

    anchorFn();

    // use the first element that is "scrollable"
    function scrollableElement(els) {
        for (var i = 0, argLength = arguments.length; i < argLength; i++) {
            var el = arguments[i],
                $scrollElement = $(el);
            if ($scrollElement.scrollTop() > 0) {
                return el;
            } else {
                $scrollElement.scrollTop(1);
                var isScrollable = $scrollElement.scrollTop() > 0;
                $scrollElement.scrollTop(0);
                if (isScrollable) {
                    return el;
                }
            }
        }
        return [];
    };

    // Responsive Menu (Mobile Menu)
    var Mobile_Menu = function () {
        if (jQuery('.mmenu-link').length > 0 || jQuery('.fw-site-navigation').length == 0) return;

        var $menu = jQuery(".fw-site-navigation#fw-menu-primary").not('.fw-header.fw-sticky-menu .fw-site-navigation#fw-menu-primary').clone();

        $menu.attr("id", "mobile-menu").removeClass().appendTo(".fw-header .fw-header-main .fw-nav-wrap .fw-container");
        jQuery('<a href="#mobile-menu" class="mmenu-link"><i class="fa fa-navicon"></i></a>').prependTo(".fw-header .fw-header-main .fw-nav-wrap .fw-container");

        // Create menu
        $menu.mmenu({
            counters: true,
            extensions: ["theme-dark", "effect-listitems-slide"],
            navbar: {
                add: true
            },
            offCanvas: {
                position: "left"
            }
        }, {
            classNames: {
                selected: "current-menu-item"
            }
        });
        anchorFn();
    };
    if (screenRes < 1199) {
        Mobile_Menu();
    }
    $(window).on('resize', function () {
        var screenRes = $(window).width();
        if (screenRes < 1199) {
            Mobile_Menu();
        }
    });

    // Sticky Menu
    if (jQuery('body.fw-header-sticky').length > 0) {
        jQuery('.fw-header').clone().addClass('fw-sticky-menu').prependTo('div.site');
        var height_original_header = jQuery('header.fw-header').not('header.fw-header.fw-sticky-menu').outerHeight();

        // make anchor form sticky menu with smooth scroll
        anchorFn();

        $(window).on('scroll', function () {
            if (height_original_header > 300) {
                var intermediate_height = height_original_header + 250;
            } else {
                var intermediate_height = 400;
            }

            // add or remove class "fw-sticky-menu-open"
            if ($(window).scrollTop() > intermediate_height) {
                // Scroll Down
                $('.fw-header.fw-sticky-menu').addClass('fw-sticky-menu-open');
            } else {
                // Scroll Up
                $('.fw-header.fw-sticky-menu').removeClass('fw-sticky-menu-open');
            }
        });

        // complete search form on keyup
        jQuery('.fw-header .fw-search-form .fw-input-search').on("keyup", function () {
            var search_input = jQuery(this).val();
            jQuery('.fw-header .fw-search-form .fw-input-search').val(search_input);
        });
    }

    // DropDown
    if (screenRes > 1199) {
        jQuery(".fw-nav-menu li.menu-item-has-children").not("li.menu-item-has-mega-menu").hover(function () {
            var $this = $(this);
            if ($this.find('.sub-menu')) {
                var dropdown = $this.children('ul'),
                    dropdownWidth = dropdown.outerWidth(),
                    dropdownOffset = parseInt(dropdown.offset().left, 10);
                if (dropdownWidth + dropdownOffset > screenRes) {
                    dropdown.addClass('left');
                }
                else {
                    dropdown.removeClass('left');
                }
            }
        });
    }

    // Search Icon Button
    var miniSearch = function () {
        var container_menu_width = jQuery('.fw-header .fw-nav-wrap > .fw-container').width(),
            wrap_search_form = jQuery('.fw-header .fw-wrap-search-form');

        // Close the search form
        jQuery('body').on('click', '.fw-header .fw-close-search-form', function (event) {
            event.preventDefault();
            jQuery('.fw-header .fw-wrap-search-form').slideUp(300, function () {
                wrap_search_form.removeClass('opened');
            });
        });

        jQuery('.fw-header .fw-search-icon').click(function (event) {
            event.preventDefault();
            var menu_height = jQuery('.fw-header-main').not('.fw-header.fw-sticky-menu .fw-header-main').outerHeight();
            wrap_search_form.css('height', menu_height);

            // If topbar is enable
            if (jQuery('.fw-top-bar-on').length > 0) {
                var topBar_height = jQuery('.fw-top-bar').outerHeight();

                wrap_search_form.css({
                    top: topBar_height
                });
            }

            // If header is sticky
            if (jQuery('.fw-header-sticky').length) {
                var wrap_search_form_sticky = jQuery('.fw-header.fw-sticky-menu .fw-wrap-search-form'),
                    menu_height_sticky = jQuery('.fw-header.fw-sticky-menu .fw-header-main').outerHeight();

                wrap_search_form_sticky.css('height', menu_height_sticky);
            }

            // Animation opened form
            jQuery('.fw-header .fw-wrap-search-form').slideDown(300, function () {
                wrap_search_form.addClass('opened');
            });

            // Focus on sticky search if you click on icon in sticky menu
            if (jQuery('.search-in-menu.fw-header-sticky .fw-sticky-menu.fw-sticky-menu-open').length > 0) {
                jQuery('.fw-header.fw-sticky-menu .fw-input-search').on('click').focus();
            }
            else {
                jQuery('.fw-header .fw-input-search').on('click').focus();
            }
        });

        // Close the search form if click outside
        jQuery(document).mouseup(function (e) {
            var container = jQuery('.fw-header .fw-wrap-search-form.fw-form-search-full');

            if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                jQuery('.fw-header .fw-wrap-search-form').slideUp(300, function () {
                    wrap_search_form.removeClass('opened');
                });
            }
        });

        // Append the close button for search form
        jQuery('.fw-header .fw-search-form').append('<a href="#" class="fw-close-search-form"><i class="fa fa-close"></i></a>');

        // Set the style for search form
        wrap_search_form.css({
            top: 0,
            display: 'none'
        });

        // Set width for input
        wrap_search_form.children('.fw-search-form').css({
            width: container_menu_width
        });
    };

    if (jQuery('.fw-header .fw-mini-search').length > 0) {
        miniSearch();

        jQuery(window).on('resize', function () {
            miniSearch();
        });
    }

    // Toggles
    $('.toggle-link').click(function () {
        $(this).parents('.toggle').removeClass('collapsed');

        if (!$(this).hasClass('collapsed')) {
            $(this).parents('.toggle').addClass('collapsed');
        }
    });

    $(".opened").find(".panel-collapse").addClass("in");
    $(".panel-toggle").click(function () {
        $(this).closest(".toggleitem").toggleClass("opened");
    });

    // pricing
    function tablePriceInit() {
        $(".fw-price-table").each(function () {
            var this_table_width = $(this).width();
            var this_table_cols = $(this).children().size();
            var this_col_width = (this_table_width / this_table_cols);

            $(this).children(".fw-price-col").css('width', this_col_width - 1);

            var table_col_height = 0;
            var this_col_row = $(this).children().find(".fw-price-row");
            this_col_row.each(function () {
                table_col_height = table_col_height > $(this).height() ? table_col_height : $(this).height();
            });
            this_col_row.each(function () {
                $(this).height(table_col_height);
            });
        });
    }

    if ($('.fw-price-table').length) {
        tablePriceInit();

        $(window).on('resize', function () {
            tablePriceInit();
        });
    }


    // Animate Things
    (function ($) {
        $.fn.hasScrollBar = function () {
            return this.get(0).scrollHeight > this.height();
        }
    })(jQuery);


    // Front Page section type7
    function latest_posts() {
        var $wrappers = $('.latest-posts.lp-type7'),
            $wrapper = null,
            $item = null,
            $items = [],
            offset = 0,
            height = 0;

        function _scaleImage() {
            if (!$wrappers || 0 === $wrappers.length) {
                return false;
            }
            $wrappers.each(function () {
                $wrapper = $(this);
                $item = $wrapper.find('.lp-item:nth-child(2)');
                height = $item.prev().height();
                $item.find('.lp-thumb').css('height', height);
                if (992 > $(window).width() && 767 < $(window).width()) {
                    $item = $wrapper.find('.lp-item:first');
                    offset = ($item.height() / 2);
                    $wrapper.find('.lp-item:nth-child(3)').css('top', offset + 'px');
                } else {
                    $wrapper.find('.lp-item:last').css('top', 'auto');
                }
                $item = $wrapper.find('.lp-item:first');
                height = $item.height();
                $items = $wrapper.find('.lp-item:not(.lp-item:first):not(.lp-item:nth-child(2))');
                if (767 < $(window).width()) {
                    height = height / 2;
                }
                $items.each(function () {
                    $item = $(this);
                    $item.css('height', height);
                    $item.find('.lp-thumb').css('height', height);
                    $item.find('.lp-thumb > img').css('height', height);
                });
            });
            return true;
        }

        setTimeout(_scaleImage, 10);
        setTimeout(_scaleImage, 100);
        window.onresize = function () {
            _scaleImage();
        }
        ;
    }

    latest_posts();

    function latestPostType10Slider() {
        var lpType10 = jQuery('.lp-type10');
        if (lpType10.length) {
            var numberItems = 3,
                itemLoop;

            // If exist sidebar
            if ($(".fw-content-area.col-md-8").length) {
                numberItems = 2;
            }

            // If number of lp-item <= numberItems then loop option disable
            if (lpType10.find('.lp-item').length <= numberItems) {
                itemLoop = false;
            }
            else {
                itemLoop = true;
            }

            // Create slider
            lpType10.each(function () {
                $(this).find('.lp-content').owlCarousel({
                    loop: itemLoop,
                    margin: 10,
                    nav: true,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    items: numberItems,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: numberItems
                        }
                    }
                });
            });
        }
    }

    latestPostType10Slider();

    // Remove exist clearfix and add clearfix after each event item
    if ($('.latest-posts.lp-type4').length && screenRes < 767) {
        var wrapPost = $(".latest-posts.lp-type4");

        wrapPost.each(function () {
            var $this = $(this);
            $this.find('.lp-content > .clearfix').remove();
            $this.find('.lp-content > div:nth-child(even)').after('<div class="clearfix"></div>');
        });
    }
});


/**
 * Forms
 */
jQuery(function ($) {
    "use strict";
    var formErrorMessageClass = 'form-error',
        formErrorHideEventNamespace = '.form-error-hide',
        errorTemplate = '<p class="' + formErrorMessageClass + '" style="color: red;">{message}</p>'; // todo: customize this (add class="" instead of style="")

    function showFormError($form, inputName, message) {
        var inputSelector = '[name="' + inputName + '"]',
            $input = $form.find(inputSelector).last(),
            $message = $(errorTemplate.replace('{message}', message));

        if ($input.length) {
            $input.parent().after($message);

            $form.one('focusout' + formErrorHideEventNamespace, inputSelector, function () {
                $message.slideUp(function () {
                    $(this).remove();
                });
            });
        } else {
            // if input not found, show message in form
            $form.prepend($message);
        }
    }

    function themeGenerateFlashMessagesHtml(types) {
        var html = [], typeHtml = [];

        $.each(types, function (type, messages) {
            typeHtml = [];

            $.each(messages, function (messageId, messageData) {
                /*typeHtml.push(messageData.message);*/
                typeHtml.push(messageData);
            });

            if (typeHtml.length) {
                html.push(
                    '<ul class="flash-messages-' + type + '">' +
                    '    <li>' + typeHtml.join('</li><li>') + '</li>' +
                    '</ul>'
                );
            }
        });

        if (html.length) {
            return html.join('');
        } else {
            return '<p>Success</p>';
        }
    }

    /**
     * Display FW_Form errors
     */
    do {
        if (typeof _fw_form_invalid == 'undefined') {
            break;
        }

        var $form = $('form.fw_form_' + _fw_form_invalid.id).first();

        if (!$form.length) {
            console.error('Form not found on the page');
            break;
        }

        $.each(_fw_form_invalid.errors, function (inputName, message) {
            showFormError($form, inputName, message);
        });
    } while (false);

    /**
     * Ajax submit
     */
    {
        $(document.body).on('submit', 'form[data-fw-ext-forms-type="contact-forms"]', function (e) {
            e.preventDefault();

            var $form = $(this);

            // todo: show loading

            jQuery.ajax({
                type: "POST",
                url: FwPhpVars.ajax_url,
                data: $(this).serialize(),
                dataType: 'json'
            }).done(function (r) {
                if (r.success) {
                    // prevent multiple submit
                    $form.on('submit', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                    });

                    $form.html(
                        themeGenerateFlashMessagesHtml(r.data.flash_messages)
                    );
                } else {
                    // hide all current error messages
                    $form.off(formErrorHideEventNamespace)
                        .find('.' + formErrorMessageClass).remove();

                    // add new error messages
                    $.each(r.data.errors, function (inputName, message) {
                        showFormError($form, inputName, message);
                    });
                }
            }).fail(function () {
                // todo: show server error
            });
        });
    }
});

// Align the content to middle section
$(window).load(function () {
    // vertical align middle
    function fnResize() {
        var screenRes = $(window).width();
        if (screenRes <= 719) {
            $('.fw-content-vertical-align-middle').addClass("fw-middle-align");
        } else {
            $('.fw-content-vertical-align-middle').each(function () {
                var $this = $(this),
                    heightContainerParent = $this.find('.fw-container-fluid, .fw-container').outerHeight(),
                    heightParent = $this.outerHeight();
                $this.find('[id^="column-"]').each(function () {
                    var $thisColum = $(this);
                    var heightColum = $thisColum.outerHeight(),
                        heightContainer = $this.find('.fw-container-fluid, .fw-container').height();
                    $thisColum.css({
                        marginTop: heightContainer / 2 - heightColum / 2
                    })
                });
                $this.css({
                    paddingTop: heightParent / 2 - heightContainerParent / 2
                }).addClass("fw-middle-align");
            });
        }
    }

    fnResize();
    $(window).resize(fnResize);
});

