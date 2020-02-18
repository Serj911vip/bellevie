{assign var="th_size" value=$thumbnails_size|default:35}
{assign var="player_params" value="rel=0&controls={if $addons.ab__video_gallery.controls == 'N'}0{else}1{/if}&loop={if $addons.ab__video_gallery.repeat == 'N'}0{else}1{/if}&enablejsapi=1&version=3&autoplay=1"}
{if $product.main_pair.icon || $product.main_pair.detailed}
{assign var="image_pair_var" value=$product.main_pair}
{elseif $product.option_image_pairs}
{assign var="image_pair_var" value=$product.option_image_pairs|reset}
{/if}
{if $image_pair_var.image_id}
{assign var="image_id" value=$image_pair_var.image_id}
{else}
{assign var="image_id" value=$image_pair_var.detailed_id}
{/if}
{if !$preview_id}
{assign var="preview_id" value=$product.product_id|uniqid}
{/if}
{$ab__vg_videos = $product.product_id|fn_ab__vg_get_videos}
{$ab__vg_settings = $product.product_id|fn_ab__vg_get_setting}
<div class="ty-product-img cm-preview-wrapper">
{include file="common/image.tpl" obj_id="`$preview_id`_`$image_id`" images=$image_pair_var link_class="cm-image-previewer{if $ab__vg_videos && $ab__vg_settings.replace_image == 'Y'} hidden{/if}" image_width=$image_width image_height=$image_height image_id="preview[product_images_`$preview_id`]"}
{foreach from=$product.image_pairs item="image_pair"}
{if $image_pair}
{if $image_pair.image_id}
{assign var="img_id" value=$image_pair.image_id}
{else}
{assign var="img_id" value=$image_pair.detailed_id}
{/if}
{include file="common/image.tpl" images=$image_pair link_class="cm-image-previewer hidden" obj_id="`$preview_id`_`$img_id`" image_width=$image_width image_height=$image_height image_id="preview[product_images_`$preview_id`]"}
{/if}
{/foreach}
{if $ab__vg_videos}
{if $addons.ab__video_gallery.on_thumbnail_click == 'image_replace'}
{$ab__video_width = $settings.Thumbnails.product_details_thumbnail_width|default:0}
{$ab__video_height = $settings.Thumbnails.product_details_thumbnail_height|default:$ab__video_width*3/4|ceil}
{if !$ab__video_width}
{$ab__video_width = $ab__video_height*4/3|ceil}
{/if}
{foreach $ab__vg_videos as $video}
<div id="det_img_link_{$preview_id}_{$video.video_id}" class="ab__vg_loading ab__vg-image_gallery_video cm-image-previewer{if $ab__vg_settings.replace_image != 'Y' || $video@iteration > 1} hidden{/if}" data-width="{$ab__video_width|default:$video.width}" data-height="{$ab__video_height|default:$video.height}" data-src="{include file="addons/ab__video_gallery/components/build_url.tpl" youtube_id=$video.youtube_id}" data-frameborder="0" data-allowfullscreen="1">
{include file="addons/ab__video_gallery/components/thumbnail.tpl" video=$video width=$ab__video_width|default:$video.width height=$ab__video_height|default:$video.height}
</div>
{/foreach}
{/if}
{foreach $ab__vg_videos as $video}
{if $addons.ab__video_gallery.on_thumbnail_click == 'open_popup'}
<a id="det_img_link_{$preview_id}_{$video.video_id}" class="ab__vg-image_gallery_video cm-image-previewer{if $addons.ab__video_gallery.on_thumbnail_click == 'open_popup'} cm-dialog-opener cm-dialog-auto-size{/if}{if $ab__vg_settings.replace_image != 'Y' || $video@iteration > 1} hidden{/if}" data-ca-target-id="ab__vg_video_{$video.video_id}" rel="nofollow">
{$video.icon_type = 'snapshot'}
{include file="addons/ab__video_gallery/components/thumbnail.tpl" video=$video width=$ab__video_width|default:$video.width height=$ab__video_height|default:$video.height}
</a>
{/if}
<div id="ab__vg_video_{$video.video_id}" class="cm-popup-box hidden" title="{$video.title}">
<div style="{if $video.width}width:{$video.width}px;{/if}{if $video.height}height:{$video.height}px{/if}" {if $video.width}data-width="{$video.width}"{/if} {if $video.height}data-height="{$video.height}"{/if} class="ab__vg_loading" data-src="{include file="addons/ab__video_gallery/components/build_url.tpl" youtube_id=$video.youtube_id}" data-frameborder="0" data-allowfullscreen="1">
{include file="addons/ab__video_gallery/components/thumbnail.tpl" video=$video width=$ab__video_width|default:$video.width height=$ab__video_height|default:$video.height}
</div>
</div>
{/foreach}
{/if}
</div>
{if $product.image_pairs || $ab__vg_videos}
{if $settings.Appearance.thumbnails_gallery == "Y"}
<input type="hidden" name="no_cache" value="1" />
{strip}
<div class="ty-center ty-product-bigpicture-thumbnails_gallery">
<div class="cm-image-gallery-wrapper ty-thumbnails_gallery ty-inline-block">
{strip}
<div class="ty-product-thumbnails owl-carousel cm-image-gallery" id="images_preview_{$preview_id}">
{if $ab__vg_videos && $addons.ab__video_gallery.position == 'pre'}
{foreach $ab__vg_videos as $video}
<div class="cm-item-gallery ty-float-left">
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$video.video_id}" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-item-gallery cm-thumbnails-mini{if $ab__vg_settings.replace_image == 'Y' && $video@iteration == 1} active{/if}">
<img src="{$images_dir}/addons/ab__video_gallery/youtube_logo.png" width="{$th_size}" height="{$th_size}" alt="{$video.title|strip_tags}" />
</a>
</div>
{/foreach}
{/if}
{if $image_pair_var}
<div class="cm-item-gallery ty-float-left">
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$image_id}" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item{if $ab__vg_videos && $ab__vg_settings.replace_image != 'Y'} active{/if}" style="width: {$th_size}px">
{include file="common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini"}
</a>
</div>
{/if}
{if $product.image_pairs}
{foreach from=$product.image_pairs item="image_pair"}
{if $image_pair}
<div class="cm-item-gallery ty-float-left">
{if $image_pair.image_id}
{assign var="img_id" value=$image_pair.image_id}
{else}
{assign var="img_id" value=$image_pair.detailed_id}
{/if}
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$img_id}" class="cm-gallery-item cm-thumbnails-mini ty-product-thumbnails__item">
{include file="common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini"}
</a>
</div>
{/if}
{/foreach}
{/if}
{if $ab__vg_videos && $addons.ab__video_gallery.position == 'post'}
{foreach $ab__vg_videos as $video}
<div class="cm-item-gallery ty-float-left">
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$video.video_id}" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-item-gallery cm-thumbnails-mini{if $ab__vg_settings.replace_image == 'Y' && $video@iteration == 1} active{/if}">
<img src="{$images_dir}/addons/ab__video_gallery/youtube_logo.png" width="{$th_size}" height="{$th_size}" alt="{$video.title|strip_tags}" />
</a>
</div>
{/foreach}
{/if}
</div>
{/strip}
</div>
</div>
{/strip}
{else}
<div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_{$preview_id}" style="width: {$image_width}px;">
{strip}
{if $ab__vg_videos && $addons.ab__video_gallery.position == 'pre'}
{foreach $ab__vg_videos as $video}
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$video.video_id}" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini{if $ab__vg_settings.replace_image == 'Y' && $video@iteration == 1} active{/if}">
<img src="{$images_dir}/addons/ab__video_gallery/youtube_logo.png" width="{$th_size}" height="{$th_size}" alt="{$video.title|strip_tags}" />
</a>
{/foreach}
{/if}
{if $image_pair_var}
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$image_id}" class="cm-thumbnails-mini ty-product-thumbnails__item{if $ab__vg_videos && $ab__vg_settings.replace_image != 'Y'} active{/if}">
{include file="common/image.tpl" images=$image_pair_var image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$image_id`_mini"}
</a>
{/if}
{if $product.image_pairs}
{foreach from=$product.image_pairs item="image_pair"}
{if $image_pair}
{if $image_pair.image_id == 0}
{assign var="img_id" value=$image_pair.detailed_id}
{else}
{assign var="img_id" value=$image_pair.image_id}
{/if}
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$img_id}" class="cm-thumbnails-mini ty-product-thumbnails__item">
{include file="common/image.tpl" images=$image_pair image_width=$th_size image_height=$th_size show_detailed_link=false obj_id="`$preview_id`_`$img_id`_mini"}
</a>
{/if}
{/foreach}
{/if}
{if $ab__vg_videos && $addons.ab__video_gallery.position == 'post'}
{foreach $ab__vg_videos as $video}
<a data-ca-gallery-large-id="det_img_link_{$preview_id}_{$video.video_id}" class="ab__vg-image_gallery_item ty-product-thumbnails__item cm-thumbnails-mini{if $ab__vg_settings.replace_image == 'Y' && $video@iteration == 1} active{/if}">
<img src="{$images_dir}/addons/ab__video_gallery/youtube_logo.png" width="{$th_size}" height="{$th_size}" alt="{$video.title|strip_tags}" />
</a>
{/foreach}
{/if}
{/strip}
</div>
{/if}
{/if}
{include file="common/previewer.tpl"}
{script src="js/tygh/product_image_gallery.js"}
{hook name="products:product_images"}{/hook}