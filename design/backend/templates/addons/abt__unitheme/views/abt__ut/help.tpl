{capture name="mainbox_title"}
{__("abt__unitheme")}: {__("abt__ut.help")}
{/capture}
{capture name="mainbox"}
<p>{__('abt__ut.help.docs')}</p>
{/capture}
{include file="common/mainbox.tpl" title=$smarty.capture.mainbox_title title_start = __("abt__unitheme") title_end = __("abt__ut.help") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
