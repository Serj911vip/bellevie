{* block-description:abt__ut2__banner_carousel_combined *}
{if $items}
    <div id="banner_slider_{$block.snapping_id}" class="banners owl-carousel">
        {foreach from=$items item="b"}
            {include file="addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl"}
        {/foreach}
    </div>
{/if}

<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_{$block.snapping_id}');
        if (slider.length) {
            slider.owlCarousel({
                direction: '{$language_direction}',
                items: 1,
                singleItem: true,
                slideSpeed: {$block.properties.speed|default:400},
                autoPlay: '{$block.properties.delay * 1000|default:false}',
                afterMove: function(){
                    slider.find('.ut2-a-video iframe').each(function(){
                        $(this).get(0).contentWindow.postMessage('{ "event":"command","func":"' + 'pauseVideo' + '","args":"" }', '*');
                    });
                },
                stopOnHover: true,
                {if $block.properties.navigation == "N"}
                    pagination: false
                {/if}
                {if $block.properties.navigation == "D"}
                    pagination: true
                {/if}
                {if $block.properties.navigation == "P"}
                    pagination: true,
                    paginationNumbers: true
                {/if}
                {if $block.properties.navigation == "A"}
                    pagination: false,
                    navigation: true,
                    navigationText: ['{__("prev_page")}', '{__("next")}']
                {/if}
            });
        }
    });
}(Tygh, Tygh.$));
</script>
