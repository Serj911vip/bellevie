{** ******************************************************************** **}
{** Флаг для расширенных настроек меню **}
{** ******************************************************************** **}
<div class="control-group">
<label for="ab__ut_mwi__status_{$id}" class="control-label">{__("ab__ut_mwi.status")}:</label>
<div class="controls">
<input type="hidden" name="static_data[ab__ut_mwi__status]" value="N">
<input type="checkbox" id="ab__ut_mwi__status_{$id}" name="static_data[ab__ut_mwi__status]" value="Y" {if $static_data.ab__ut_mwi__status == 'Y'}checked="checked"{/if}>
</div>
</div>