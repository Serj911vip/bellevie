{$brand = $product.product_id|fn_abt__ut2_get_product_brand}
{if $brand}
    <meta itemprop="brand" content="{$brand}">
{/if}