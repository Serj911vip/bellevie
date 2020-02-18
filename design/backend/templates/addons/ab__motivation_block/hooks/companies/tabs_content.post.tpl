{if "MULTIVENDOR"|fn_allowed_for}
<div id="content_ab__motivation_block" class="hidden">
{if $ab__mb_items}
{foreach from=$ab__mb_items item="ab__mb_item" key="_key"}
<div style="margin: 20px 0">
<input type="hidden" name="ab__mb_items[{$_key}][motivation_item_id]" value="{$ab__mb_item.motivation_item_id}" />
<div>{$ab__mb_item.name}</div>
<div class="control-group">
<label class="control-label" for="ab__mb_description_{$_key}">{__("description")}:</label>
<div class="controls">
<textarea id="ab__mb_description_{$_key}" name="ab__mb_items[{$_key}][description]" cols="35" rows="8" class="{if $addons.ab__motivation_block.description_type == 'html'}cm-wysiwyg{/if} input-large" style="width: calc(100% - 50px);">{$ab__mb_item.description}</textarea>
<a data-ca-field="description" data-ca-id="{$ab__mb_item.motivation_item_id}" class="btn ab__mb_restore_default" target="_blank" title="{__('ab__mb.set_default_value')}"><i class="icon-cog"></i></a>
</div>
</div>
</div>
{/foreach}
<script type="text/javascript">
(function (_, $) {
$('.ab__mb_restore_default').click(function () {
var btn = $(this);
var item_id = btn.data('caId');
var field = btn.data('caField');
if (item_id !== undefined && field !== undefined) {
$.ceAjax('request', fn_url("ab__motivation_block.get_default_value"), {
method: 'get',
data: {
motivation_item_id: item_id,
field: field
},
callback: function(data){
var input = btn.closest('.controls').find('*[name$="[' + field + ']"]');
if (data.value !== undefined && input.length) {
if (input.attr('type') == 'checkbox') {
input.prop('checked', (data.value == 'Y'));
} else {
input.val(data.value);
if (input.hasClass('cm-wysiwyg')) {
input.ceEditor('destroy');
input.ceEditor('recover');
}
}
}
}
});
}
});
}(Tygh, Tygh.$));
</script>
{else}
<p class="no-items">{__("no_data")}</p>
{/if}
</div>
{/if}
