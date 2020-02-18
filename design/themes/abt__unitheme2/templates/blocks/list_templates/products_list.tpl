{if $products}

    {** Запрашиваем хар-ки **}
    {if $show_features}
        {** запрашиваем все доступные хар-ки по товарам **}
        {$products=$products|fn_abt__ut2_add_products_features_list:0:true}

    {elseif $settings.abt__ut2.general.brand_feature_id > 0}
        {** запрашиваем хар-ку БРЕНД по товарам **}
        {$products=$products|fn_abt__ut2_add_products_features_list:$settings.abt__ut2.general.brand_feature_id:true}
    {/if}

    {script src="js/tygh/exceptions.js"}

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

    {if !$no_sorting}
        {include file="views/products/components/sorting.tpl"}
    {/if}

    {if $ut2_load_more}{include file="common/abt__ut2_pagination.tpl" type="{"`$runtime.controller`_`$runtime.mode`"}" position="top" object="products"}{/if}
    {foreach from=$products item=product key=key name="products"}
        {capture name="capt_options_vs_qty"}{/capture}
        {hook name="products:product_block"}
            {assign var="obj_id" value=$product.product_id}
            {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
            {include file="common/product_data.tpl" product=$product min_qty=true}

            <div class="ty-product-list clearfix"{if $ut2_load_more && $smarty.foreach.products.first} data-ut2-load-more="first-item"{/if}>

                {assign var="form_open" value="form_open_`$obj_id`"}
                {$smarty.capture.$form_open nofilter}
                {if $bulk_addition}
                    <input class="cm-item ty-float-right ty-product-list__bulk" type="checkbox" id="bulk_addition_{$obj_prefix}{$product.product_id}" name="product_data[{$product.product_id}][amount]" value="{if $js_product_var}{$product.product_id}{else}1{/if}" {if ($product.zero_price_action == "R" && $product.price == 0)}disabled="disabled"{/if} />
                {/if}
                
                <div class="ut2-pl__image">
                    {assign var="product_link" value="products.view?product_id=`$product.product_id`"|fn_url}
                     
                    <div class="ut2-pl__list-buttons">
                        {if $addons.wishlist.status == "A" && !$hide_wishlist_button}
                            {include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$obj_prefix``$product.product_id`" but_name="dispatch[wishlist.add..`$product.product_id`]" but_role="text"}
                        {/if}
                        {if $settings.General.enable_compare_products == "Y" && !$hide_compare_list_button || $product.feature_comparison == "Y"}
                            {include file="buttons/add_to_compare_list.tpl" product_id=$product.product_id}
                        {/if}
                    </div>
                    
                    {hook name="products:product_block_image"}
                    <div class="cm-reload-{$obj_prefix}{$obj_id} image-reload" id="list_image_update_{$obj_prefix}{$obj_id}">
                        {if !$hide_links}
                            <a href="{$product_link}">
                            <input type="hidden" name="image[list_image_update_{$obj_prefix}{$obj_id}][link]" value="{"products.view?product_id=`$product.product_id`"|fn_url}" />
                        {/if}

                        {assign var="product_labels" value="product_labels_`$obj_prefix``$obj_id`"}
                        {$smarty.capture.$product_labels nofilter}

                        <input type="hidden" name="image[list_image_update_{$obj_prefix}{$obj_id}][data]" value="{$obj_id_prefix},{$settings.Thumbnails.product_lists_thumbnail_width},{$settings.Thumbnails.product_lists_thumbnail_height},product" />
                        {include file="common/image.tpl" image_width=$settings.Thumbnails.product_lists_thumbnail_width obj_id=$obj_id_prefix images=$product.main_pair image_height=$settings.Thumbnails.product_lists_thumbnail_height - 30}

                        {if !$hide_links}
                            </a>
                        {/if}
                    <!--list_image_update_{$obj_prefix}{$obj_id}--></div>
                    {/hook}
                </div>
                <div class="ut2-pl__content">
                {hook name="products:product_block_content"}
                    {if $js_product_var}
                        <input type="hidden" id="product_{$obj_prefix}{$product.product_id}" value="{$product.product}" />
                    {/if}
                    {* res_delete_1 *}
                    {if $item_number == "Y"}<strong>{$smarty.foreach.products.iteration}.&nbsp;</strong>{/if}
                    {* /res_delete_1 *}

                    <div class="ut2-pl__info" style="min-height: {$settings.Thumbnails.product_lists_thumbnail_height - 30}px">
                        <div class="ut2-pl__item-name">
                            {assign var="name" value="name_$obj_id"}
                            <bdi>{$smarty.capture.$name nofilter}</bdi>
                        </div>
                        
                        <div class="ut2-pl__extra-block clearfix">

								{if ($ab_dotd_product_ids && $product.product_id|in_array:$ab_dotd_product_ids) or ($product.promotions)}
									<div class="ab_dotd_product_label">{__('ab__dotd_product_label')}</div>
								{/if}

								{hook name="products:video_gallery"}{/hook}

                                {assign var="rating" value="rating_$obj_id"}
                                {hook name="products:product_rating"}
                                {if $smarty.capture.$rating|strlen > 40}
                                    <div class="ut2-pl__rating">{$smarty.capture.$rating nofilter}</div>
                                {else}
                                    {if $addons.discussion.status == "A"}
										<div class="ut2-pl__rating"><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span></div>
									{/if}
								{/if}
                                {/hook}

                                {if $product.product_code}{assign var="sku" value="sku_$obj_id"}{$smarty.capture.$sku nofilter}{/if}
                        </div>
                            
                        <div class="ut2-pl__description">
                            {assign var="prod_descr" value="prod_descr_`$obj_id`"}
                            {$smarty.capture.$prod_descr nofilter}
                        </div>
                        
                        {hook name="products:additional_info"}{/hook}
                        
                        {if $settings.abt__ut2.product_list.$tmpl.show_features[$settings.abt__device] == 'Y'}
                        <div class="ut2-pl__feature">
                            {assign var="product_features" value="product_features_`$obj_id`"}
                            {$smarty.capture.$product_features nofilter}
                        </div>
                        {/if}
                    </div>
                    
                    <div class="ut2-pl__control">
	                    
	                    <div class="ut2-pl__price">
		                    {assign var="old_price" value="old_price_`$obj_id`"}
                            {if $smarty.capture.$old_price|trim}
                                {$smarty.capture.$old_price nofilter}
                            {/if}
                            
                            {assign var="price" value="price_`$obj_id`"}
                            {$smarty.capture.$price nofilter}

                            {assign var="clean_price" value="clean_price_`$obj_id`"}
                            {$smarty.capture.$clean_price nofilter}

                            {assign var="list_discount" value="list_discount_`$obj_id`"}
                            {$smarty.capture.$list_discount nofilter}
                        </div>
                     
                        {if !$smarty.capture.capt_options_vs_qty}
                            <div class="ty-product-list__option">
                                {assign var="product_options" value="product_options_`$obj_id`"}
                                {$smarty.capture.$product_options nofilter}
                            </div>

                            {assign var="product_amount" value="product_amount_`$obj_id`"}
                            {$smarty.capture.$product_amount nofilter}
                            
                            {if $settings.abt__ut2.product_list.$tmpl.show_qty[$settings.abt__device] == 'Y'}
                            <div class="ut2-pl__qty">
                                {assign var="qty" value="qty_`$obj_id`"}
                                {$smarty.capture.$qty nofilter}
                            </div>
                            {/if}
                        {/if}

                        {assign var="min_qty" value="min_qty_`$obj_id`"}
                        {$smarty.capture.$min_qty nofilter}

                        {assign var="product_edp" value="product_edp_`$obj_id`"}
                        {$smarty.capture.$product_edp nofilter}
                        
                        {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                        {$smarty.capture.$add_to_cart nofilter}
                    </div>
                {/hook}
                </div>
                {assign var="form_close" value="form_close_`$obj_id`"}
                {$smarty.capture.$form_close nofilter}
            </div>
            {if !$smarty.foreach.products.last}{/if}
        {/hook}
    {/foreach}
    {if $ut2_load_more}{include file="common/abt__ut2_pagination.tpl" type="{"`$runtime.controller`_`$runtime.mode`"}" position="bottom" object="products"}{/if}

    {if $bulk_addition}
        <script type="text/javascript">
            (function(_, $) {

                $(document).ready(function() {

                    $.ceEvent('on', 'ce.commoninit', function(context) {
                        if (context.find('input[type=checkbox][id^=bulk_addition_]').length) {
                            context.find('.cm-picker-product-options').switchAvailability(true, false);
                        }
                    });

                    $(_.doc).on('click', '.cm-item', function() {
                        $('#opt_' + $(this).prop('id').replace('bulk_addition_', '')).switchAvailability(!this.checked, false);
                    });
                });

            }(Tygh, Tygh.$));
        </script>
    {/if}

    {if !$no_pagination}
        {include file="common/pagination.tpl" force_ajax=$force_ajax}
    {/if}

{/if}

{capture name="mainbox_title"}{$title}{/capture}