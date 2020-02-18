{if $addons.ab__deal_of_the_day.ab__show_promos == 'Y' && $settings.abt__device == "desktop" && $product.promotions|count > 0 }
    <div class="ab-dotd-promos" data-abt-dotd-promotions-id="{','|implode:($product.promotions|array_keys)}">
        <ul>
            {foreach $product.promotions as $item}
                <li class="ab-dotd-category-promo promo-{$item@key}"></li>
            {/foreach}
        </ul>
    </div>
{/if}