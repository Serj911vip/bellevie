{** -------------------------------------------------------------------- **}
{** full_width **}
{** -------------------------------------------------------------------- **}
{if !$grid.parent_id && ( $grid.width + $grid.offset >= $runtime.layout.width ) }
<div class="control-group cm-no-hide-input">
<label class="control-label" for="ext_grid_full_width_{$id}">{__("full_width")}</label>
<div class="controls">
<select id="ext_grid_full_width_{$id}" name="extended">
<option value="O" {if $grid.extended == "O"}selected="selected"{/if}>{__("original")}</option>
<option value="E" {if $grid.extended == "E"}selected="selected"{/if}>{__("extender")}</option>
<option value="F" {if $grid.extended == "F"}selected="selected"{/if}>{__("full_extender")}</option>
</select>
</div>
</div>
{/if}
{** -------------------------------------------------------------------- **}
{** ab__grid_tabs **}
{** -------------------------------------------------------------------- **}
<div class="control-group cm-no-hide-input">
<label class="control-label" for="elm_grid_ab__show_in_tabs_{$id}">{__("ab__grid_tabs.ab__show_in_tabs")}</label>
<div class="controls">
<input type="hidden" class="cm-no-hide-input" name="ab__show_in_tabs" value="N" />
<input id="elm_grid_ab__show_in_tabs_{$id}" type="checkbox" class="cm-no-hide-input" name="ab__show_in_tabs" value="Y" {if $grid.ab__show_in_tabs == 'Y'}checked{/if} />
</div>
</div>
<div class="control-group cm-no-hide-input">
<label class="control-label" for="elm_grid_ab__use_ajax_{$id}">{__("ab__grid_tabs.ab__use_ajax")}</label>
<div class="controls">
<input type="hidden" class="cm-no-hide-input" name="ab__use_ajax" value="N" />
<input id="elm_grid_ab__use_ajax_{$id}" type="checkbox" class="cm-no-hide-input" name="ab__use_ajax" value="Y" {if $grid.ab__use_ajax == 'Y'}checked{/if} />
</div>
</div>
