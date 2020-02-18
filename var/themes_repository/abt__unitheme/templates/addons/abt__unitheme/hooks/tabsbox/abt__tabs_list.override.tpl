{if $navigation.tabs or $navigation[$grid.grid_id]}
{assign var="empty_tab_ids" value=$content|empty_tabs}
{assign var="_tabs" value=false}
{if $top_order_actions}{$top_order_actions nofilter}{/if}
{script src="js/tygh/tabs.js"}

<div class="ty-tabs cm-j-tabs{if $track} cm-track{/if} {if $grid.ab__show_in_tabs == 'Y'}cm-j-tabs-disable-convertation{/if} clearfix">
    {if $grid.ab__show_in_tabs == 'Y'}
        <ul class="ty-tabs__list">
        {foreach from=$navigation[$grid.grid_id] item=tab key=key name=tabs}
            {if ((!$tabs_section && !$tab.section) || ($tabs_section == $tab.section)) && !$key|in_array:$empty_tab_ids && $key|strpos:'ab__grid_tab' !== false}
            {if !$active_tab}
                {assign var="active_tab" value=$key}
            {/if}
            {assign var="_tabs" value=true}
            <li id="{$key}" data-block="{$tab.block}" class="{if $grid.ab__show_in_tabs}ab__grid_tabs {/if}ty-tabs__item{if $tab.js} cm-js{elseif $tab.ajax} cm-js cm-ajax{/if}{if $key == $active_tab} active{/if}"><a class="ty-tabs__a">{$tab.title}</a></li>
            {/if}
        {/foreach}
        </ul>
    {else}
        <ul class="ty-tabs__list" {if $tabs_section}id="tabs_{$tabs_section}"{/if}>
        {foreach from=$navigation.tabs item=tab key=key name=tabs}
            {if ((!$tabs_section && !$tab.section) || ($tabs_section == $tab.section)) && !$key|in_array:$empty_tab_ids}
            {if !$active_tab}
                {assign var="active_tab" value=$key}
            {/if}
            {assign var="_tabs" value=true}
            <li id="{$key}" class="ty-tabs__item{if $tab.js} cm-js{elseif $tab.ajax} cm-js cm-ajax{/if}{if $key == $active_tab} active{/if}"><a class="ty-tabs__a" {if $tab.href} href="{$tab.href|fn_url}"{/if}>{$tab.title}</a></li>
            {/if}
        {/foreach}
        </ul>
    {/if}
</div>

{if $_tabs}
<div class="cm-tabs-content ty-tabs__content clearfix{if $grid.ab__show_in_tabs == 'Y'} cm-j-content-disable-convertation{/if}"{if $grid.ab__show_in_tabs != 'Y'} id="tabs_content"{/if}>
    {$content nofilter}
</div>
{/if}

{if $onclick}
<script type="text/javascript">
    var hndl = {$ldelim}
        'tabs_{$tabs_section}': {$onclick}
    {$rdelim}
</script>
{/if}
{else}
    {$content nofilter}
{/if}