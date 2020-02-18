{if $ab__mb_items}
<div class="ab__mb_items{if $addons.ab__motivation_block.bg_color !="#ffffff"} colored{/if}" style="background-color: {$addons.ab__motivation_block.bg_color}">
{foreach $ab__mb_items as $ab__mb_item}
<div class="ab__mb_item">
<div id="sw_ab__mb_item_{$ab__mb_item.motivation_item_id}_{$block.block_id}" class="ab__mb_item-title cm-combination{if $ab__mb_item.expanded == 'Y'} open{/if}">
{if $ab__mb_item.icon_type == 'img' && $ab__mb_item.main_pair}
{include file="common/image.tpl" images=$ab__mb_item.main_pair}
{elseif $ab__mb_item.icon_type == 'icon' && $ab__mb_item.icon_class}
<i class="{$ab__mb_item.icon_class} ab__mb_item-icon" style="color:{$ab__mb_item.icon_color}"></i>
{/if}
<div class="ab__mb_item-name">{$ab__mb_item.name}</div>
</div>
<div id="ab__mb_item_{$ab__mb_item.motivation_item_id}_{$block.block_id}" class="ab__mb_item-description ty-wysiwyg-content"{if $ab__mb_item.expanded != 'Y'} style="display: none;"{/if}>
{if $addons.ab__motivation_block.description_type == 'smarty'}
{eval_string var=$ab__mb_item.description}
{else}
{$ab__mb_item.description nofilter}
{/if}
</div>
</div>
{/foreach}
</div>
{/if}