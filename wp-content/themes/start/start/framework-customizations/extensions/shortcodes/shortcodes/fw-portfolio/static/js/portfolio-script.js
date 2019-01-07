jQuery(document).ready(function ($) {
	"use strict";

	// portfolio masonry
	var gridcontainer = jQuery('.fw-portfolio-list');
	if (gridcontainer.length > 0) {
		gridcontainer.masonry({
			itemSelector: 'li.categories-item'
		});
	}

	var portfolio_filter = jQuery('.portfolio_filter');
	if (portfolio_filter.length > 0) {
		portfolio_filter.each(function () {
			var filter = jQuery(this);
			var isotope = jQuery(this).attr('data-isotope');
			var list_id = jQuery(this).attr('data-list-id');
			var filter_id = filter.attr('id');

			jQuery('#'+filter_id).parents('.fw-portfolio-filter').addClass('fw-portfolio-visible');
			catInit( filter_id );

			if (isotope != '1') {
				return;
			}

			jQuery('#' + list_id).isotope({
				itemSelector: 'li',
				transitionDuration: '0.6s',
				layoutMode: 'moduloColumns'
			});

			filter.on('click', '.categories-item', function (e) {
				e.preventDefault();
				jQuery('.categories-item').removeClass('active');
				jQuery(this).addClass('active');

				var option = jQuery(this).data('category'),
					search = option ? function () {
						var item = jQuery(this),
							name = item.data('category') ? item.data('category') : '';
						return name.match(new RegExp('\\b' + option + '\\b'));
					} : '*';

				jQuery('#' + list_id).isotope({filter: search});
			});
		});
	}
	else {
		/* portfolio without filter */
		var fw_portfolio_list = jQuery('.fw-portfolio-list');

		fw_portfolio_list.each(function () {
			var list_id = jQuery(this).attr('id');
			jQuery('#' + list_id).isotope({
				itemSelector: 'li',
				transitionDuration: '0.6s',
				layoutMode: 'moduloColumns'
			});
		});
	}
});

function catInit(filter_id) {
	jQuery('#' + filter_id).carouFredSel({
		swipe: {
			onTouch: true
		},
		prev: '#' + filter_id + '-prev',
		next: '#' + filter_id + '-next',
		items: {
			visible: 'variable'
		},
		auto: {
			play: false
		},
		infinite: true,
		scroll: {
			items: 1,
			duration: 600,
			easing: 'swing'
		}
	});
}


jQuery(window).resize(function () {
	var portfolio_filter = jQuery('.portfolio_filter');
	if (portfolio_filter.length > 0) {
		portfolio_filter.each(function () {
			var filter_id = jQuery(this).attr('id');
			catInit( filter_id );
		});
	}
});


