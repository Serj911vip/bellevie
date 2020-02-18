{if "MULTIVENDOR"|fn_allowed_for && $product.company_id}
{assign var="company_id" value=$product.company_id}
{else}
{assign var="company_id" value=fn_get_runtime_company_id()}
{/if}
{$tmp = ['company_id' => $company_id]|fn_ab__mb_get_motivation_items}
{include file="addons/ab__motivation_block/blocks/ab__motivation_block.tpl" ab__mb_items=$tmp.0}