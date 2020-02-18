{** block-description:product_variations.variations_list **}

{if $items}
    {if $block.properties.hide_add_to_cart_button == "Y"}
        {$_show_add_to_cart=false}
    {else}
        {$_show_add_to_cart=true}
    {/if}
    {if $block.properties["product_variations.hide_add_to_wishlist_button"] == "Y"}
        {$_show_add_to_wishlist=false}
    {else}
        {$_show_add_to_wishlist=true}
    {/if}

    {$products=$items}
    {$obj_prefix="`$block.block_id`000"}
    {$show_add_to_wishlist=$_show_add_to_wishlist|default:true}
    {$show_sku=$block.properties["product_variations.show_product_code"]|default:"Y" == "Y"}
    {$show_variation_thumbnails=$block.properties["product_variations.show_variation_thumbnails"]|default:"Y" == "Y"}
    {$show_price=true}
    {$show_add_to_cart=$_show_add_to_cart|default:true}
    {$but_role="action"}
    {$hide_form=true}
    {$show_product_amount=$settings.General.inventory_tracking == "Y"}
    {$hide_stock_info=false}
    {$show_out_of_stock=true}
    {$show_amount_label=false}
    {$show_qty=true}
    {$hide_qty_label=true}
    {$show_variations=true}
    {$show_sku_label=false}
    {$image_width=$image_width|default:50}
    {$image_height=$image_height|default:50}

    {hook name="products:product_variations_list_settings"}{/hook}

    {$list_buttons="list_buttons_`$obj_id`"}

    {$smarty.capture.$list_buttons nofilter}

    {if $show_variations}
        {$first_product=reset($products)}
    {/if}

    {script src="js/tygh/exceptions.js"}
    <div class="ty-variations-list__wrapper">
    <table class="ty-variations-list ty-table">
        <thead>
            <tr>
                {if $show_variation_thumbnails}
                    <th class="ty-variations-list__title ty-left">&nbsp;</th>
                {/if}
                {if $show_sku}
                    <th class="ty-variations-list__title ty-left">{__("sku")}</th>
                {/if}
                {if $show_variations}
                    {foreach $first_product.variation_features as $feature}
                        <th class="ty-variations-list__title ty-left">{$feature.description}</th>
                    {/foreach}
                {/if}
                {if $show_product_amount}
                    <th class="ty-variations-list__title ty-right">{__("availability")}</th>
                {/if}
                <th class="ty-variations-list__title ty-left">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {foreach $products as $key => $product}
                {$variation_link="products.view?product_id={$product.product_id}"|fn_url}
                {$obj_id=$product.product_id}
                {$obj_id_prefix="`$obj_prefix``$product.product_id`"}

                {include file="common/product_data.tpl" product=$product}

                {hook name="products:product_variations_list"}
                    <tr class="ty-variations-list__item">
                        {if $show_variation_thumbnails}
                            <td class="ty-variations-list__product-elem ty-variations-list__image">
                                <a href="{$variation_link}">
                                    {include
                                        file="common/image.tpl"
                                        image_width=$image_width
                                        image_height=$image_height
                                        images=$product.main_pair
                                        obj_id=$obj_id_prefix
                                    }
                                </a>
                            </td>
                        {/if}

                        {if $show_sku}
                            <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options ty-variations-list__sku">
                                {$sku = "sku_`$obj_id`"}
                                <a href="{$variation_link}">
                                    {$smarty.capture.$sku nofilter}
                                </a>
                            </td>
                        {/if}

                        {foreach $product.variation_features as $feature}
                            <td class="ty-variations-content__product-elem ty-variations-content__product-elem-options">
                                <bdi>
                                    <span class="ty-product-options">
                                        <span class="ty-product-options-content">
                                            {$feature.variant}
                                        </span>
                                    </span>
                                </bdi>
                            </td>
                        {/foreach}

                        {if $show_product_amount}
                            <td class="ty-variations-list__product-elem ty-variations-list__product-elem-options">
                                {$product_amount="product_amount_`$obj_id`"}

                                {$smarty.capture.$product_amount nofilter}
                            </td>
                        {/if}

                        <td class="ty-variations-list__product-elem ty-variations-list__controls">
                            <form
                                {if !$config.tweaks.disable_dhtml}
                                    class="cm-ajax cm-ajax-full-render"
                                {/if}
                                action="{""|fn_url}" method="post" name="variations_list_form{$obj_prefix}">

                                <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
                                <input type="hidden" name="redirect_url" value="{$config.current_url}" />
                                <input type="hidden" name="product_data[{$obj_id}][product_id]" value="{$obj_id}">

                                <div class="ty-variations-list__price">
                                    {$old_price="old_price_`$obj_id`"}
                                    {if $smarty.capture.$old_price|trim}
                                        {$smarty.capture.$old_price nofilter}
                                    {/if}

                                    {$price="price_`$obj_id`"}
                                    {$smarty.capture.$price nofilter}

                                    {$clean_price="clean_price_`$obj_id`"}
                                    {$smarty.capture.$clean_price nofilter}
                                </div>

                                {hook name="variations_list:list_buttons"}
                                {if $show_add_to_cart}
                                    <div class="ut2-vl__control">
                                        {if $show_qty}
                                            <div class="ut2-vl__qty">
                                                {assign var="qty" value="qty_`$obj_id`"}
                                                {$smarty.capture.$qty nofilter}
                                            </div>
                                        {/if}
                                        <div class="button-container">
		                                    {$add_to_cart="add_to_cart_`$obj_id`"}
		                                    {$smarty.capture.$add_to_cart nofilter}
                                        </div>
                                    </div>
                                {/if}
                                {/hook}
                                
                            </form>
                        </td>
                    </tr>
                {/hook}
            {/foreach}
        </tbody>
    </table>
    </div>
{/if}