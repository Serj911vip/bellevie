{assign var="show_price" value=true}
{assign var="show_old_price" value=true}
{assign var="show_clean_price" value=true}

<ul class="ty-template-small">
{foreach from=$products item="product" name="products"}
    {assign var="obj_id" value=$product.product_id}
    {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
    {include file="common/product_data.tpl" product=$product}
    {hook name="products:product_small_item"}
    <li class="ty-template-small__item clearfix">
        {assign var="form_open" value="form_open_`$obj_id`"}
        {$smarty.capture.$form_open nofilter}
            <div class="ty-template-small__item-img">
                <a href="{"products.view?product_id=`$product.product_id`"|fn_url}">{include file="common/image.tpl" image_width="50" image_height="50" images=$product.main_pair obj_id=$obj_id_prefix no_ids=true lazy_load=true}</a>
            </div>
            <div class="ty-template-small__item-description">
                {if $block.properties.item_number == "Y"}<span class="ut2-hit">{$smarty.foreach.products.iteration}</span>{/if}
                {assign var="name" value="name_$obj_id"}<bdi>{$smarty.capture.$name nofilter}</bdi>

                {if $show_price}
                <div class="ty-template-small__item-price">
					<div>
						{assign var="old_price" value="old_price_`$obj_id`"}
						{if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}
					</div>
					<div>
					{assign var="price" value="price_`$obj_id`"}
					{$smarty.capture.$price nofilter}
					
					{assign var="clean_price" value="clean_price_`$obj_id`"}
					{$smarty.capture.$clean_price nofilter}
                </div>
                {/if}

                {assign var="rating" value="rating_$obj_id"}
                {$smarty.capture.$rating nofilter}

                {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                {if $smarty.capture.$add_to_cart|trim}<p>{$smarty.capture.$add_to_cart nofilter}</p>{/if}
            </div>
        {assign var="form_close" value="form_close_`$obj_id`"}
        {$smarty.capture.$form_close nofilter}
    </li>
    {/hook}
{/foreach}
</ul>