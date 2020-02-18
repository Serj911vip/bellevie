{hook name="blocks:topmenu_dropdown"}

{if $items}
    <ul class="ty-menu__items cm-responsive-menu">
        {hook name="blocks:topmenu_dropdown_top_menu"}

		<li class="ty-menu__item ty-menu__menu-btn visible-phone">
		    <a class="ty-menu__item-link" onclick="$('.cat-menu-horizontal .ty-menu__items').toggleClass('open');">
		        <i class="ty-icon-short-list"></i>
		        <span>{__("catalog_products")}</span>
		    </a>
		</li>

        {foreach from=$items item="item1" name="item1"}
            {assign var="cat_image" value=""}
            {if $item1.category_id}{assign var="cat_image" value=$item1.category_id|fn_get_image_pairs:'category':'M':true:true}{/if}
            {assign var="item1_url" value=$item1|fn_form_dropdown_object_link:$block.type}
            {assign var="unique_elm_id" value=$item1_url|md5}
            {assign var="unique_elm_id" value="topmenu_`$block.block_id`_`$unique_elm_id`"}

            {assign var="subitems_count" value=$item1.$childs|count}
            {assign var="cols" value=0}
            {if $subitems_count}
                {math assign="divider" equation="ceil(x / 3)" x=$subitems_count}
                {math assign="cols" equation="ceil(x / y)" x=$subitems_count y=$divider}
            {/if}
            <li class="ty-menu__item {if !$item1.$childs} ty-menu__item-nodrop{else} cm-menu-item-responsive{/if} {if $item1.active || $item1|fn_check_is_active_menu_item:$block.type} ty-menu__item-active{/if} first-lvl{if $smarty.foreach.item1.last} last{/if} {if $item1.class} {$item1.class}{/if} ">
                    {if $item1.$childs}
                        <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                            <i class="ty-menu__icon-open ty-icon-down-open"></i>
                            <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                        </a>
                    {/if}
                    <a {if $item1_url} href="{$item1_url}"{/if} class="ty-menu__item-link a-first-lvl">
                        <div class="menu-lvl-ctn">
                            {$item1.$name}{if $item1.$childs}<i class="icon-right-dir"></i>{/if}
                        </div>
                    </a>
                {if $item1.$childs}

                    {if !$item1.$childs|fn_check_second_level_child_array:$childs}
                    {* Only two levels. Vertical output *}
                        <div class="ty-menu__submenu">
                            <ul class="ty-menu__submenu-items ty-menu__submenu-items-simple {if !empty($cat_image.pair_id)}with-pic {/if} cm-responsive-menu-submenu">
                                {hook name="blocks:topmenu_dropdown_2levels_elements"}

                                {foreach from=$item1.$childs item="item2" name="item2"}
                                    {assign var="item_url2" value=$item2|fn_form_dropdown_object_link:$block.type}
                                    <li class="ty-menu__submenu-item{if $item2.active || $item2|fn_check_is_active_menu_item:$block.type} ty-menu__submenu-item-active{/if}">
                                        <a class="ty-menu__submenu-link" {if $item_url2} href="{$item_url2}"{/if}>{$item2.$name}</a>
                                    </li>
                                {/foreach}

                                {if $item1.show_more && $item1_url}
                                    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                        <a href="{$item1_url}"
                                           class="ty-menu__submenu-alt-link">{__("text_topmenu_view_more")}</a>
                                    </li>
                                {/if}

                                {if !empty($cat_image.pair_id)}
                                    <div class="category-image">
                                    <a {if $item1_url} href="{$item1_url}"{/if}>{include file="common/image.tpl" images=$cat_image.detailed}</a>
                                    </div>
                                {/if}

                                {/hook}
                            </ul>
                        </div>
                 {else}
                        {if $cols == 1}
                            {assign var="dropdown_class" value="dropdown-1column"}
                        {elseif $cols == 5}
                            {assign var="dropdown_class" value="dropdown-fullwidth"}
                        {elseif $cols == 6}
                            {assign var="dropdown_class" value="dropdown-fullwidth"}
                        {else}
                            {assign var="dropdown_class" value="dropdown-`$cols`columns"}
                        {/if}
                        <div class="ty-menu__submenu" id="{$unique_elm_id}">
                            {hook name="blocks:topmenu_dropdown_3levels_cols"}
                                <ul class="ty-menu__submenu-items cm-responsive-menu-submenu dropdown-column-item {$dropdown_class} {if !empty($cat_image.pair_id)}with-pic {/if} clearfix">

                                {assign var="rows" value=(($item1.$childs|count)/3)|ceil}
		                        {split data=$item1.$childs size=$rows assign="splitted_categories" skip_complete=true}

		                        	{foreach from=$splitted_categories item="row"}
									<ul class="ty-menu__submenu-col">

                                    {foreach from=$row item="item2" name="item2"}

                                    	{$Viewlimit=$block.properties.dropdown_third_level_view|default:5}

                                        <li class="ty-top-mine__submenu-col">

                                            {assign var="item2_url" value=$item2|fn_form_dropdown_object_link:$block.type}
                                            <div class="ty-menu__submenu-item-header {if $item2.active || $item2|fn_check_is_active_menu_item:$block.type} ty-menu__submenu-item-header-active{/if}">
                                                <a{if $item2_url} href="{$item2_url}"{/if} class="ty-menu__submenu-link">{$item2.$name}</a>
                                            </div>
                                            {if $item2.$childs}
                                                <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                                                    <i class="ty-menu__icon-open ty-icon-down-open"></i>
                                                    <i class="ty-menu__icon-hide ty-icon-up-open"></i>
                                                </a>
                                            {/if}
                                            <div class="ty-menu__submenu">
                                                <ul class="ty-menu__submenu-list {if $item2.$childs|count > $Viewlimit}hiddenCol {/if}cm-responsive-menu-submenu" {if $item2.$childs|count > $Viewlimit}style="height: {$Viewlimit * 19}px;"{/if}>
                                                    {if $item2.$childs}
                                                        {hook name="blocks:topmenu_dropdown_3levels_col_elements"}
                                                        {foreach from=$item2.$childs item="item3" name="item3"}
                                                            {assign var="item3_url" value=$item3|fn_form_dropdown_object_link:$block.type}
                                                            <li class="ty-menu__submenu-item{if $item3.active || $item3|fn_check_is_active_menu_item:$block.type} ty-menu__submenu-item-active{/if}">
                                                                <a{if $item3_url} href="{$item3_url}"{/if} class="ty-menu__submenu-link">{$item3.$name}</a>
                                                            </li>
                                                        {/foreach}
                                                        {/hook}
                                                    {/if}
                                                </ul>
                                               	{if $item2.$childs|count > $Viewlimit}
                                                <a href="javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');" class="ty-menu__submenu-link-more">{__("more")} <i class="ty-icon-plus-circle"></i></a>
                                                {/if}
                                            </div>
                                        </li>
                                    {/foreach}

                                    </ul>
                                    {/foreach}

                                    {if empty($cat_image.pair_id) and $item1_url}
                                    <li class="last-delim-spacer"></li>
                                    <li class="ty-menu__submenu-dropdown-bottom">
                                        <a href="{$item1_url}">{__("text_topmenu_more", ["[item]" => $item1.$name])}</a>
                                    </li>
                                    {/if}

                                    {if !empty($cat_image.pair_id)}
                                        <div class="category-image">
                                        <a {if $item1_url} href="{$item1_url}"{/if}>{include file="common/image.tpl" images=$cat_image.detailed}</a>
                                        </div>
                                    {/if}

                                </ul>
                            {/hook}
                        </div>
                    {/if}

                {/if}
            </li>
        {/foreach}
        {/hook}
    </ul>
{/if}
{/hook}