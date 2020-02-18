<span itemscope itemtype="http://schema.org/Review">
    <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
        <meta itemprop="ratingValue" content="{$post.rating_value}">
    </span>
    {if $discussion.object_type == 'P'}
        <meta itemprop="itemReviewed" content="{$product.product|escape}">
    {elseif $discussion.object_type == 'C'}
        <meta itemprop="itemReviewed" content="{$category_data.category|escape}">
    {elseif $discussion.object_type == 'A'}
        <meta itemprop="itemReviewed" content="{$page.page|escape}">
    {elseif $discussion.object_type == 'E'}
        <meta itemprop="itemReviewed" content="{$runtime.company_data.company|escape}">
    {/if}
    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
        <meta itemprop="name" content="{$post.name}">
    </span>
    <meta itemprop="datePublished" content="{$post.timestamp|date_format:"%Y-%m-%d"}">
    <meta itemprop="reviewBody" content="{$post.message|escape}">
</span>