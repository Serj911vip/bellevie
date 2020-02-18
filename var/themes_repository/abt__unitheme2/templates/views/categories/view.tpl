{hook name="categories:view"}
        {if ($category_data.description || $runtime.customization_mode.live_editor)}
            <div class="ty-wysiwyg-content ty-mb-s" {live_edit name="category:description:{$category_data.category_id}"}>{$category_data.description nofilter}</div>
        {/if}
    <div class="ut2-cat-container{if $settings.abt__ut2.category.description_position == 'bottom'} reverse{/if}">
	    {if $settings.abt__ut2.category.description_position != 'none'}
        {hook name="categories:view_description"}
        {/hook}
        {/if}

        <div class="cat-view-grid" id="category_products_{$block.block_id}">
            {include file="views/categories/components/subcategories.tpl"}

            {if $products}
                {assign var="layouts" value=""|fn_get_products_views:false:0}
                {if $category_data.product_columns}
                    {assign var="product_columns" value=$category_data.product_columns}
                {else}
                    {assign var="product_columns" value=$settings.Appearance.columns_in_products_list}
                {/if}

                {if $layouts.$selected_layout.template}
                    {include file="`$layouts.$selected_layout.template`" columns=$product_columns}
                {/if}

            {elseif !$subcategories || $show_no_products_block}
                <p class="ty-no-items cm-pagination-container">{__("text_no_products")}</p>
            {else}
                <div class="cm-pagination-container"></div>
            {/if}
        <!--category_products_{$block.block_id}--></div>
    </div>
{capture name="mainbox_title"}<span {live_edit name="category:category:{$category_data.category_id}"}>{$category_data.category}</span>{/capture}
{/hook}