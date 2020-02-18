<div class="cm-tabs-content {if $static_data.ab__ut_mwi__status != 'Y'}hidden{/if}" id="content_tab_abt__ut_menu_tab_{$id}">
<fieldset>
{** Иконка **}
<div class="control-group">
<label class="control-label">{__("ab__ut_mwi.icon")}:</label>
<div class="controls">
{include file="common/attach_images.tpl"
image_name="ab__ut_mwi__icon"
image_object_type="ab__ut_mwi__icon"
image_key=$id
hide_titles=true
no_detailed=true
hide_alt=true
image_pair=$static_data.ab__ut_mwi__icon}
</div>
</div>
{** тип пункта меню **}
<div class="control-group">
<label for="ab__ut_mwi__dropdown_{$id}" class="control-label">{__("ab__ut_mwi.dropdown")}:</label>
<div class="controls">
<input type="hidden" id="ab__ut_mwi__dropdown_{$id}" name="static_data[ab__ut_mwi__dropdown]" value="N">
<input type="checkbox" id="ab__ut_mwi__dropdown_{$id}" name="static_data[ab__ut_mwi__dropdown]" value="Y" {if $static_data.ab__ut_mwi__dropdown == 'Y'}checked="checked"{/if}>
</div>
</div>
{** text **}
<div class="control-group">
<label for="ab__ut_mwi__text_{$id}" class="control-label">{__("ab__ut_mwi.text")}:</label>
<div class="controls">
<textarea name="static_data[ab__ut_mwi__text]" id="ab__ut_mwi__text_{$id}" class="input-xxlarge cm-wysiwyg">{$static_data.ab__ut_mwi__text}</textarea>
</div>
</div>
{** text-position **}
<div class="control-group">
<label for="ab__ut_mwi__text_position_{$id}" class="control-label">{__("ab__ut_mwi.text_position")}:</label>
<div class="controls">
<select name="static_data[ab__ut_mwi__text_position]" id="ab__ut_mwi__text_position_{$id}">
<option value="bottom" {if $static_data.ab__ut_mwi__text_position == 'bottom'}selected="selected"{/if}>{__("ab__ut_mwi.text_position.bottom")}</option>
<option value="right_bottom" {if $static_data.ab__ut_mwi__text_position == 'right_bottom'}selected="selected"{/if}>{__("ab__ut_mwi.text_position.right_bottom")}</option>
<option value="right_top" {if $static_data.ab__ut_mwi__text_position == 'right_top'}selected="selected"{/if}>{__("ab__ut_mwi.text_position.right_top")}</option>
</select>
</div>
</div>
{** label **}
<div class="control-group">
<label for="ab__ut_mwi__label_{$id}" class="control-label">{__("ab__ut_mwi.label")}:</label>
<div class="controls">
<input type="text" id="ab__ut_mwi__label_{$id}" name="static_data[ab__ut_mwi__label]" value="{$static_data.ab__ut_mwi__label}" class="input-large main-input">
</div>
</div>
{** label color **}
<div class="control-group">
<label for="ab__ut_mwi__label_color_{$id}" class="control-label cm-color">{__("ab__ut_mwi.label_color")}:</label>
<div class="controls">
<input class="cm-abt-ut-colorpicker" style="font-family: monospace;" type="text" name="static_data[ab__ut_mwi__label_color]" id="ab__ut_mwi__label_color_{$id}" value="{$static_data.ab__ut_mwi__label_color|replace:"transparent":""|default:"#ffffff"}"/>
</div>
</div>
{** label background **}
<div class="control-group">
<label for="ab__ut_mwi__label_background_{$id}" class="control-label cm-color">{__("ab__ut_mwi.label_background")}:</label>
<div class="controls">
<input class="cm-abt-ut-colorpicker" style="font-family: monospace;" type="text" name="static_data[ab__ut_mwi__label_background]" id="ab__ut_mwi__label_background_{$id}" value="{$static_data.ab__ut_mwi__label_background|replace:"transparent":""|default:"#ffffff"}"/>
</div>
</div>
</fieldset>
<!--content_tab_abt__ut_menu_tab_{$id}--></div>