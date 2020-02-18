/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2018   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and  accept   *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
(function (_, $) {
function ab__toogle_video(iframe) {
iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
}
$.ceEvent('on', 'ce.dialogshow', function(d) {
if (/ab__vg_video_/.test(d.attr('id'))) {
$('.ab__vg_loading', $(d)).trigger('click');
}
$(d).one('dialogclose', function(event) {
var iframe = $('iframe', $(this));
if (iframe.length) {
iframe.each(function(i,v) {
ab__toogle_video(v);
});
}
});
});
$(_.doc).on('click', '.cm-thumbnails-mini', function() {
var iframes = $('iframe.ab__vg-image_gallery_video.hidden');
iframes.each(function() {
ab__toogle_video($(this).get(0));
});
});
$(_.doc).on('click', '.ab__vg_loading', function() {
var elem = $(this),
iframe = $('<iframe></iframe>');
iframe.addClass(elem.attr('class'));
iframe.attr('id', elem.attr('id'));
$.each(elem.data(), function(i,val) {
iframe.attr(i, val);
});
elem.replaceWith(iframe);
iframe.removeClass('ab__vg_loading');
});
$(_.doc).on('click', '.ab__vg-image_gallery_video.cm-dialog-opener', function() {
var id = $(this).data('caTargetId');
if (id !== undefined) {
$('#' + id + ' .ab__vg_loading').trigger('click');
}
});
})(Tygh, Tygh.$);