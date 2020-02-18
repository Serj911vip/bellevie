{if !$config.tweaks.disable_dhtml}
    {assign var="ajax_class" value="cm-ajax cm-ajax-full-render"}
{/if}

{if !$hide_compare_list_button}
	{$c_url = $redirect_url|default:$config.current_url|escape:url}
	<a class="ut2-add-to-compare {if $details_page}label {/if}{$ajax_class} {if !$runtime.customization_mode.live_editor}cm-tooltip{/if}" href="{"product_features.add_product?product_id=$product_id&redirect_url=$c_url"|fn_url}" title="{__("add_to_comparison_list")}" data-ca-target-id="comparison_list,account_info*,abt__ut2_compared_products" rel="nofollow"><i class="ut2-icon-baseline-equalizer"></i>{if $details_page}{__("compare")}{/if}</a>
{/if}