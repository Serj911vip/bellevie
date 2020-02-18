{assign var="discussion" value=$product.product_id|fn_get_discussion:'P':true:$smarty.request}
{if $discussion.posts}
    {foreach $discussion.posts as $post}
        <div itemprop="review" itemscope itemtype="http://schema.org/Review">
            <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <meta itemprop="ratingValue" content="{$post.rating_value}">
            </span>
            <meta itemprop="itemReviewed" content="{$product.product|escape}">
            <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                <meta itemprop="name" content="{$post.name}">
            </span>
            <meta itemprop="datePublished" content="{$post.timestamp|date_format:"%Y-%m-%d"}">
            <meta itemprop="reviewBody" content="{$post.message|escape}">
        </div>
    {/foreach}
{/if}