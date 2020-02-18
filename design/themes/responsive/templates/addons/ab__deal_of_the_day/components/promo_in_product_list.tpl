{$image_width = 45}
{if $promo }
<a href="{if $promo.link}{$promo.link}{/if}">
{if $promo.image}
{include file="common/image.tpl"
show_detailed_link=false
images=$promo.image
no_ids=true
image_width=$image_width}
{else}
<i class="ty-no-image__icon ty-icon-image"></i>
{/if}
<div class="ab-dotd-promo-category-wrapper">
{if $promo.promotion_id }
<div class="ab-dotd-promo-header">{__("ab__dotd_product_label")} <span>{$promo.name}</span></div>
{/if}
</div>
</a>
{/if}