function fn_abt__ut2_calc_cell(e) {
	var min_width = 215;
	var mid_width = 260;
	$('div.grid-list').each(function () {
		var cell = $(this).find('div[class*="ut2-gl__item"]:first');
		if (cell.length && cell.outerWidth() < min_width) {
			$(this).addClass('ut2-min-narrow');
			$(this).removeClass('ut2-mid-narrow');
			$(this).find('.ut2-gl__control').addClass('view');
		} else if (cell.length && cell.outerWidth() > min_width && cell.outerWidth() < mid_width) {
			$(this).addClass('ut2-mid-narrow');
			$(this).removeClass('ut2-min-narrow');
			$(this).find('.ut2-gl__control').addClass('view');
		} else {
			$(this).removeClass('ut2-min-narrow ut2-mid-narrow');
			$(this).find('.ut2-gl__control').addClass('view');
		}
	});
}



(function (_, $) {
    
    
        (function() {
            var bannersWrapper = $('.ut2-settings-desktop');
            var allElem = $('[class ^= ut2-a__]', bannersWrapper);
            var bannerImgs = $('image', bannersWrapper);
            
            function resizeBanner() {
                if($(window).innerWidth() <= 767) {
                    allElem.each(function() {
                        console.log()
                        $(this).height('auto')
                    })
                } 
            }
            
            $(window).on('load', function() {
                resizeBanner()
                $(window).on('resize',function() {
                    resizeBanner()
                });
            });
        
            
        })();
  
    
    (function() {
        $(document).on('scroll', function() {
            var scrollTop = $(document).scrollTop();
            var documentHeight = $(document).innerHeight();
            console.log()
            if(scrollTop > documentHeight - 1100) {
                $('.ab__scroll_to_top').css({'transform': 'translateY(-75px)'})
            } else {
                $('.ab__scroll_to_top').css({'transform': 'translateY(0px)'})
            }
        })
    })();
    
    
    
	(function () {
		var interval;
		var counter;

		function fn_abt__ut2_lazy_load() {
			counter = 0;
			let w_top = $(window).scrollTop();
			let w_bot = w_top + $(window).height();
			$("img.lazyOwl").each(function () {
				counter++;
				let img = $(this);
				let e_top = img.offset().top;
				let e_bot = e_top + img.height();
				if (img.is(':visible') && ((e_top >= w_top && e_top <= w_bot) || (e_bot >= w_top && e_bot <= w_bot))) {
					img.toggleClass('abt-ut2-lazy-loading lazyOwl');
					img.one("load", function () {
						if (--counter == 0) {
							clearInterval(interval);
						}
						$(this).toggleClass('abt-ut2-lazy-loading abt-ut2-lazy-loaded').animate({
							opacity: 1
						}, 100);
					}).attr("src", img.data("src"));
					if (this.complete) {
						$(this).load();
					}
				}
			});
			$('[data-style-lazy-load]:not(.abt-ut2-style-lazy-loaded)').each(function () {
				counter++;
				let block = $(this);
				let e_top = block.offset().top;
				let e_bot = e_top + block.height();
				if (block.is(':visible') && ((e_top >= w_top && e_top <= w_bot) || (e_bot >= w_top && e_bot <= w_bot))) {
					let style = block.attr('style');
					if (style === undefined) {
						style = '';
					}
					block.attr('style', $(this).data('style-lazy-load') + style).addClass('abt-ut2-style-lazy-loaded');
				}
			});
			if (!counter) {
				clearInterval(interval);
			}
		}
		$(window).on('scroll resize load', function () {
			clearInterval(interval);
			interval = setInterval(fn_abt__ut2_lazy_load, 50);
		});
		$.ceEvent('on', 'ce.commoninit', function () {
			clearInterval(interval);
			interval = setInterval(fn_abt__ut2_lazy_load, 50);
		});
	})();
	$(document).ready(function () {
		if (_.abt__ut2.settings.general.enable_fixed_header_panel === 'Y') {
			var header_selector = "#tygh_main_container > .tygh-header > .header-grid";
			if (document.documentElement.clientWidth > 768) {
				header_selector += ":not(.fixed)";
			}
			var top_panel = $("#tygh_main_container > .tygh-top-panel"),
				header = $(header_selector),
				menu = $('.top-menu-grid'),
				b = $('body'),
				top_panel_height = top_panel.height(),
				header_height = header.height(),
				menu_height = menu.height(),
				fixed = 'fixed-header';
			var height = header_height;
			if (top_panel_height != void(0)) {
				height += top_panel_height;
			}
			
			if ($(window).innerWidth() <= 767 ) {
			    $(".ty-dropdown-box__content").css({'display': 'none'});
			    $(".top-menu-grid-vetrtical .ty-dropdown-box__title").removeClass('open');
			    $(".top-menu-grid-vetrtical .ty-dropdown-box__title").addClass('cm-combination');
			}
			
			$(window).on("resize scroll", function () {
			    var menuGrid = $('.menu-grid');
				var scroll = $(window).scrollTop();
				if (scroll >= height && !b.hasClass(fixed)) {
					header.css('padding-top', menu_height + 'px');
					b.addClass(fixed);
					
					if($(window).innerWidth() > 767) {
				    	$(".top-menu-grid-vetrtical .ty-dropdown-box__content").hide();
					}
				
					$(".top-menu-grid-vetrtical .ty-dropdown-box__title").addClass('cm-combination');
					$(".top-menu-grid-vetrtical .ty-dropdown-box__title").removeClass('open');
				} else if (scroll < (height - menu_height) && b.hasClass(fixed)) {
					header.css('padding-top', '');
					b.removeClass(fixed);
					if(window.location.pathname == '/' && $(window).innerWidth() > 767) {
					    $(".top-menu-grid-vetrtical .ty-dropdown-box__content").slideDown();
					    $(".top-menu-grid-vetrtical .ty-dropdown-box__title").removeClass('cm-combination');
					    $(".top-menu-grid-vetrtical .ty-dropdown-box__title").addClass('open');
    					console.log(1)
					}
				}
			});
		}
		$(".tygh-header .cm-combination[id^='sw_']").click(function () {
			$(".tygh-header .cm-combination.open:not(#" + this.id + ")").click();
		});
	});
	$(document).ready(function () {
		fn_abt__ut2_calc_cell('ready');
		$(window).on("resize", function (e) {
			fn_abt__ut2_calc_cell('resize');
		});
		$.ceEvent('on', 'ce.commoninit', function () {
			fn_abt__ut2_calc_cell('ce.commoninit');
		});
		$.ceEvent('on', 'ce.tab.show', function () {
			fn_abt__ut2_calc_cell('ce.tab.show');
		});
	});
	if (document.documentElement.clientWidth > 768) {
		$(document).ready(function () {
			var m = $('.hpo-menu');
			var b = $('.hpo-banner');
			if (m.length) {
				var menu_height = m.outerHeight();
				m.addClass("open-menu").find(".ty-dropdown-box__title:first").addClass("open");
				var last_first_level_item = m.find("li.ty-menu__item.first-lvl.last");
				var m_height = parseInt(last_first_level_item.offset().top + last_first_level_item.outerHeight());
				var fixed_header = function () {
					var scroll = $(window).scrollTop();
					if (scroll >= m_height) {
						$("body").addClass("fixed-header").css("margin-top", menu_height + "px");
						m.removeClass('open-menu');
						$(".hpo-menu > .ty-dropdown-box__title").removeClass("open");
					} else {
						$("body").removeClass("fixed-header").css("margin-top", '');
						m.addClass('open-menu');
						$(".hpo-menu > .ty-dropdown-box__title").addClass("open");
					}
				};
				fixed_header();
				$(window).scroll(fixed_header);
			}
		});
	}
	$(".ut2-h__menu .ty-menu__item").mouseenter(function () {
		var $item = $(this);
		var submenu = $item.find(".ty-menu__submenu-items");
		var t = 250;
		submenu.css("display", "none");
		setTimeout(function () {
			submenu.css("display", '');
		}, t);
	});
}(Tygh, Tygh.$));