{if $motivation_item_data}
{assign var="id" value=$motivation_item_data.motivation_item_id}
{else}
{assign var="id" value=0}
{/if}
{capture name="mainbox"}
<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="ab__mb_motivation_item_data_form" enctype="multipart/form-data">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="motivation_item_id" value="{$id}" />
<input type="hidden" name="company_id" value="{$runtime.company_id}" />
{capture name="tabsbox"}
<div id="content_general">
<div class="control-group">
<label class="control-label cm-required" for="ab__mb_name">{__("title")}</label>
<div class="controls">
<input type="text" name="motivation_item_data[name]" id="ab__mb_name" value="{$motivation_item_data.name}" size="25" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__mb_position">{__("position_short")}</label>
<div class="controls">
<input type="text" name="motivation_item_data[position]" id="ab__mb_position" value="{$motivation_item_data.position|default:"0"}" size="3"/>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__mb_icon_type">{__("ab__mb_icon_type")}</label>
<div class="controls">
<select name="motivation_item_data[icon_type]" id="ab__mb_icon_type" onchange="$('.ab__mb_container').addClass('hidden');$('#ab__mb_' + this.value + '_container').removeClass('hidden');">
<option value="nothing" {if $motivation_item_data.icon_type == 'nothing'}selected{/if}>{__("ab__mb_icon_type.nothing")}</option>
<option value="img" {if !$motivation_item_data.icon_type || $motivation_item_data.icon_type == 'img'}selected{/if}>{__("ab__mb_icon_type.img")}</option>
<option value="icon" {if $motivation_item_data.icon_type == 'icon'}selected{/if}>{__("ab__mb_icon_type.icon")}</option>
</select>
</div>
</div>
<div id="ab__mb_nothing_container" class="ab__mb_container{if $motivation_item_data.icon_type != 'nothing'} hidden{/if}"></div>
<div id="ab__mb_img_container" class="ab__mb_container {if $motivation_item_data.icon_type != 'img'}hidden{/if}">
<div class="control-group">
<label class="control-label" for="ab__mb_img">{__("image")}</label>
<div class="controls">
{include file="common/attach_images.tpl" image_name="ab__mb_img" image_object_type="motivation_item" image_pair=$motivation_item_data.main_pair no_thumbnail=true}
</div>
</div>
</div>
<div id="ab__mb_icon_container" class="ab__mb_container{if $motivation_item_data.icon_type != 'icon'} hidden{/if}">
<div class="control-group">
<label class="control-label" for="ab__mb_icon_class">{__("ab__mb_icon_class")}{include file="common/tooltip.tpl" tooltip=__('ab__mb_icon_class.tooltip', ['[link]' => 'ab__motivation_block.icons'|fn_url])}</label>
<div class="controls">
<input type="text" name="motivation_item_data[icon_class]" id="ab__mb_icon_class" value="{$motivation_item_data.icon_class}" class="input-large" />
</div>
</div>
<div class="control-group">
<label class="control-label cm-color" for="ab__mb_icon_color">{__("ab__mb_icon_color")}</label>
<div class="controls">
{include file="common/colorpicker.tpl" cp_name="motivation_item_data[icon_color]" cp_id="ab__mb_icon_color" cp_value=$motivation_item_data.icon_color}
</div>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__mb_description">{__("description")}:</label>
<div class="controls">
<textarea id="ab__mb_description" name="motivation_item_data[description]" cols="35" rows="8" class="{if $addons.ab__motivation_block.description_type == 'html'}cm-wysiwyg {/if}input-large">{$motivation_item_data.description}</textarea>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__mb_expanded">{__("ab__mb_expanded")}</label>
<div class="controls">
<input type="hidden" name="motivation_item_data[expanded]" value="N" />
<input type="checkbox" name="motivation_item_data[expanded]" id="ab__mb_expanded" value="Y"{if $motivation_item_data.expanded == "Y"} checked="checked"{/if} />
</div>
</div>
{if "MULTIVENDOR"|fn_allowed_for}
<div class="control-group">
<label class="control-label" for="ab__mb_vendor_edit">{__("ab__mb_vendor_edit")}</label>
<div class="controls">
<input type="hidden" name="motivation_item_data[vendor_edit]" value="N" />
<input type="checkbox" name="motivation_item_data[vendor_edit]" id="ab__mb_vendor_edit" value="Y"{if $motivation_item_data.vendor_edit == "Y"} checked="checked"{/if} />
</div>
</div>
{/if}
{include file="common/select_status.tpl" input_name="motivation_item_data[status]" id="ab__mb_status" obj_id=$id obj=$motivation_item_data hidden=false}
<!--content_general--></div>
{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section track=true}
{capture name="buttons"}
{include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="ab__mb_motivation_item_data_form" but_name="dispatch[ab__motivation_block.update]" save=$id}
{/capture}
</form>
{/capture}
{if !$id}
{capture name="mainbox_title"}
{__("ab__mb.new_motivation_item")}
{/capture}
{else}
{$title_start = __("ab__mb.editing_motivation_item")}
{$title_end = $motivation_item_data.name}
{capture name="mainbox_title"}
{$title_start}: {$title_end}
{/capture}
{/if}
{include file="common/mainbox.tpl"
title_start=$title_start
title_end=$title_end
title=$smarty.capture.mainbox_title
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
select_languages=true}
