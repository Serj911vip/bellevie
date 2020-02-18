{strip}
<script type="text/javascript">
(function(_, $) {
$.extend(_, {
ab__dotd: {
current_dispatch: '{$runtime.controller}.{$runtime.mode}',
max_height: '{$addons.ab__deal_of_the_day.max_height|intval|default:250|escape:"javascript"}',
more: '{"ab__dotd.more"|__|escape:"javascript"}',
less: '{"ab__dotd.less"|__|escape:"javascript"}',
promotion_parents: {
grid_list: '{if $settings.theme_name !== 'abt__unitheme2'}ty-grid-list__item{else}ut2-gl__item{/if}',
product_list: 'ty-product-list'
}
}
});
}(Tygh, Tygh.$));
</script>
{/strip}
{script src="js/addons/ab__deal_of_the_day/func.js"}