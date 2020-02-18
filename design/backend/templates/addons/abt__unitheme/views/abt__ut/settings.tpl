{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="abt__unitheme_settings_form" id="abt__unitheme_settings_form">
{if $settings.abt__unitheme}
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive">
<thead>
<tr>
<th width="40%">{__('name')}</th>
<th width="60%">{__('value')}</th>
</tr>
</thead>
<tbody>
{foreach from=$settings.abt__unitheme item="s"}
<tr>
<td data-th="{__('name')}">{__("abt__ut.setting.`$s.name`")}{include file="common/tooltip.tpl" tooltip={__("abt__ut.setting.`$s.name`__tooltip")}}</td>
<td data-th="{__('value')}">
{$f_v="abt__unitheme_data[`$s.name`]"}
{if $s.type == 'checkbox'}
<input type="hidden" value="N" name="{$f_v}">
<input type="checkbox" value="Y" name="{$f_v}" {if $s.value == 'Y'}checked="checked"{/if}>
{elseif $s.type == 'selectbox'}
<select name="{$f_v}" class="span3">
{foreach from=$s.variants item="v"}
<option value="{$v}" {if $v == $s.value}selected="selected"{/if}>{__({$v})}</option>
{/foreach}
</select>
{elseif $s.type == 'input'}
<input type="text" name="{$f_v}" value="{$s.value}" class="span3">
{elseif $s.type == 'textarea'}
<textarea name="{$f_v}" class="span3">{$s.value}</textarea>
{/if}
</td>
</tr>
{/foreach}
</tbody>
</table>
</div>
{/if}
</form>
{/capture}
{capture name="buttons"}
{include file="buttons/button.tpl" but_text=__("save") but_role="submit-link" but_name="dispatch[abt__ut.update_settings]" but_meta="btn-primary" but_target_form="abt__unitheme_settings_form"}
{/capture}
{include file="common/mainbox.tpl" title=__("abt__ut.settings") title_start=__("abt__unitheme") title_end=__("abt__ut.settings") select_languages=true content=$smarty.capture.mainbox buttons=$smarty.capture.buttons}
