{strip}
<script type="text/javascript" data-no-defer>
    (function(_, $) {
        {* Init abt__ut2 - settings, data and functions *}
        $.extend(_, {
            abt__ut2: {
                settings: {$settings.abt__ut2|json_encode nofilter},

                controller : '{$runtime.controller}',
                mode : '{$runtime.mode}',
                device : '{$settings.abt__device}',


                functions: {
                    in_array: function( val, arr ) {
                        var answ = 0;
                        if ( Array.isArray( arr ) ) {
                            answ = ~arr.indexOf( val );
                        } else {
                            answ = ~Object.keys(arr).indexOf( val );
                        }

                        return Boolean(answ);
                    },

                    detect_class_changes: function( elem, callback, add_old_val ) {
                        var vanilla_elem = elem[0];
                        var observer = new MutationObserver( callback );
                        observer.observe(vanilla_elem, {
                            attributes: true,
                            attributeOldValue: add_old_val || false,
                            attributeFilter: ["class"]
                        });
                    }
                }
            },
        });

        {** set scroll-to-elm-offset **}
        $('body').data('ca-scroll-to-elm-offset', 50);

        {** Whether to add a block [...] to bread crumbs **}
        {if $settings.abt__device == 'mobile' || $settings.abt__device == 'tablet'}
            var main_content_breadcrumbs = $(".main-content-grid");
            var m_c_b_w = main_content_breadcrumbs.outerWidth();

            var mobile_breadcrumbs = $(".ty-breadcrumbs").css("display", "inline-block");
            var m_b_w = mobile_breadcrumbs.outerWidth( true );


            if ( m_b_w >= m_c_b_w ) {
                mobile_breadcrumbs.addClass("long").css("display", '');
            }
        {/if}

        {** Whether to enable a fixed button for the device **}
        {if $settings.abt__ut2.product_list.show_fixed_filters_button[$settings.abt__device] == 'Y'}
            var filters = $(".ty-dropdown-box.ut2-filters:not(.ty-sidebox-important)");
            if ( filters.length ) {
                var offset = filters.offset();
                offset.bottom = offset.top + Number(filters.outerHeight());
                var class_list = ["fixed-filters"];
                var header_height = 0;
                {if $settings.abt__ut2.general.enable_fixed_header_panel == 'Y'}
                    var header = $(".header-grid .top-menu-grid");
                    if ( header.length ) { header_height = Number(header.outerHeight()); }
                {/if}

                var class_string = class_list.join(' ');
                $(window).on("resize scroll", function() {
                    var scroll_top = window.scrollY + header_height;
                    if (scroll_top > offset.bottom) {
                        filters.addClass(class_string);
                    } else {
                        filters.removeClass(class_string);
                    }
                });
            }
        {/if}

        {$ut2_dispatch = "`$runtime.controller`.`$runtime.mode`"}
        $(document).ready(function() {
            {if $ut2_dispatch == 'products.view'}
                {if $settings.abt__ut2.products.view.show_sticky_add_to_cart[$settings.abt__device] == 'Y'}
                    $("body").addClass("sticky-add-to-cart");
                {/if}
            {elseif $ut2_dispatch == 'categories.view'}
                _.abt__ut2.settings.product_list.class_name = "ty-column{$settings.Appearance.columns_in_products_list}";
            {elseif $ut2_dispatch == 'checkout.cart'}
                $(".ty-dropdown-box__title:not(.open)").addClass("__cart-page");
            {/if}
        });
    }(Tygh, Tygh.$));
</script>
{/strip}
{script src="js/addons/abt__unitheme2/abt__ut2.js"}
{script src="js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"}
{script src="js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"}
{script src="js/addons/abt__unitheme2/abt__ut2_swipe_menu.js"}
{script src="js/addons/abt__unitheme2/abt__ut2_light_menu.js"}
{script src="js/addons/abt__unitheme2/abt__ut2_youtube.js"}
{script src="js/addons/abt__unitheme2/abt__ut2_load_more.js"}
{script src="js/addons/abt__unitheme2/abt__ut2_custom_combination.js"}