{** block-description:tmpl_ip5_logo **}
{if $runtime.controller == "index"}
	<div class="ty-logo-container">
		<img src="/design/themes/abt__unitheme2/media/images/bellevie/belle_vie_logo.svg" class="ty-logo-container__image" alt="{$logos.theme.image.alt}" />
	</div>
{else}
	<a href="{""|fn_url}" title="{$logos.theme.image.alt}">
		<div class="ty-logo-container">
			<img src="/design/themes/abt__unitheme2/media/images/bellevie/belle_vie_logo.svg" class="ty-logo-container__image" alt="{$logos.theme.image.alt}" />
		</div>
	</a>
{/if}