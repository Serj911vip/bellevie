{capture name="mainbox"}
<form action="{""|fn_url}" method="post" name="ab__ut_demo_data_form" id="ab__ut_demo_data_form">
<h3>{__("abt__ut.demo_data.head")}</h3>
<div class="table-responsive-wrapper">
<table class="table table-middle table-responsive" width="100%">
<thead>
<tr>
<th width="60%">{__("abt__ut.demo_data.table.description")}</th>
<th width="20%">{__("abt__ut.demo_data.table.action")}</th>
</tr>
</thead>
<tbody>
<tr>
<td data-th="{__("abt__ut.demo_data.table.description")}">{__("abt__ut.demo_data.actions.add_banners")}</td>
<td data-th="{__("abt__ut.demo_data.table.action")}">{btn type="list" class="cm-ajax1 cm-post btn btn-primary" text=__("add") dispatch="dispatch[abt__ut.demo_data.add_banners]"}</td>
</tr>
</tbody>
</table>
</div>
</form>
{/capture}
{include file="common/mainbox.tpl"
title=__("abt__ut.demo_data")
title_start = __("abt__unitheme")
title_end = __("abt__ut.demo_data")
content=$smarty.capture.mainbox
buttons=$smarty.capture.buttons
content_id="ab__ut_demo_data_form"}